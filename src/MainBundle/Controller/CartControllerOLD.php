<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 08/05/18
 * Time: 21:32
 */

namespace MainBundle\Controller;
use MainBundle\Entity\Commande;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use UserBundle\Entity\Address;
use UserBundle\Form\Type\AddressType;


class CartController extends Controller
{
    /**
     * @param $id int
     * @Route("/panier/ajouter/{id}", name="add_to_cart")
     */
    public function addInCartAction($id)
    {
        $session = $this->getRequest()->getSession();
        if (!$session->has('cart')) {
            $session->set('cart', array());
        }

        $cart = $session->get('cart');

        if (array_key_exists($id, $cart)) {
            if ($this->getRequest()->query->get('quantity')) {
                $cart[$id] = $this->getRequest()->query->get('quantity');
                $session->getFlashBag()->add('success', 'Quantité mise à jour avec succes');
            }

        } else {
            if ($this->getRequest()->query->get('quantity')) {
                $cart[$id] = $this->getRequest()->query->get('quantity');
            } else {
                $cart[$id] = 1;
                $session->getFlashBag()->add('success', 'Le mets a bien été ajouté dans votre panier');
            }

        }

        $session->set('cart', $cart);


        return $this->redirect($this->generateUrl('cart'));
    }

    public function cartCountAction()
    {
        $session = $this->get('request')->getSession();

        if (!$session->has('cart')) {
            $nb = 0;
        } else {
            $nb = count($session->get('cart'));
        }

        return $this->render('MainBundle:Cart:cart_count.html.twig', array(
            'nb' => $nb
        ));
    }

    /**
     * @param $id int
     * @Route("/panier/supprimer/{id}", name="delete_cart")
     */
    public function deleteCartAction($id)
    {
        $session = $this->getRequest()->getSession();
        if ($session->has('cart')) {
            $cart = $session->get('cart');
            if (array_key_exists($id, $cart)) {
                unset($cart[$id]);
                $session->set('cart', $cart);
                $this->get('session')->getFlashBag()->add('success', 'Le met a bien été supprimé de la commande !');
            }
        }

        return $this->redirect($this->generateUrl('cart'));
    }

    /**
     *
     * @Route("/panier", name="cart")
     */
    public function cartAction()
    {
        $session = $this->getRequest()->getSession();

        if (!$session->has('cart')) {
            $session->set('cart', array());
        }

        $cart = $session->get('cart');

        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('MainBundle:Product')->findArray(array_keys($session->get('cart')));

        return $this->render('MainBundle:Cart:cart.html.twig', array(
            'products' => $products,
            'cart'     => $cart
        ));
    }

    /**
     *
     * @Route("/livraison", name="shipping")
     */
    public function shippingAction()
    {
        $entity = new Address();
        $form = $this->createForm(new AddressType(), $entity);
        $currentUser = $this->get('security.context')->getToken()->getUser();
        $form->handleRequest($this->get('request'));
        if ($this->get('request')->getMethod() == "POST" && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $entity->setUser($currentUser);
            $em->persist($entity);

            $em->flush();

            return $this->redirect($this->generateUrl('shipping'));

        }
        return $this->render('MainBundle:Cart:shipping.html.twig', array(
            'form'        => $form->createView(),
            'currentUser' => $currentUser
        ));
    }

    public function setShippingOnSession()
    {
        $session = $this->getRequest()->getSession();

        if (!$session->has('address')) $session->set('address', array());
        $address = $session->get('address');

        if ($this->getRequest()->request->get('shipping') != null) {
            $address['shipping'] = $this->getRequest()->request->get('shipping');
            if ($this->getRequest()->request->get('billing') != null) {
                $address['billing'] = $this->get('request')->request->get('billing');
            }


        } else {
            return $this->redirect($this->generateUrl('shipping'));
        }

        $session->set('address', $address);
        return $this->redirect($this->generateUrl('validation'));
    }

    public function prepareCommandeAction()
    {

        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();

        if (!$session->has('commande')) {
            $commande = new Commande();

            dump($commande);die();

            $commande->setDate(new \DateTime());


            $commande->setUser($this->container->get('security.context')->getToken()->getUser());
            $commande->setValider(0);
            $commande->setReference(0);
            $commande->setCommande($this->facture());

            $em->persist($commande);
            dump($commande);die();
            $session->set('commande', $commande->getId());
        } else {
            $commande = $em->getRepository('MainBundle:Commande')->find($session->get('commande'));
        }

        $em->flush();



        return $commande->getId();
    }

    /**
     *
     * @Route("/validation", name="validation")
     */
    public function validationAction()
    {
        $session = $this->get('request')->getSession();
        $em = $this->getDoctrine()->getManager();

        if ($this->get('request')->getMethod() == "POST")
            $this->setShippingOnSession();



        $prepareCommande = $this->prepareCommandeAction();
        //$prepareCommande = $this->forward('MainBundle:Commandes:prepareCommande');

        $commande = $em->getRepository('MainBundle:Commande')->find($prepareCommande);

        /*$address = $session->get('address');
        $products = $em->getRepository('MainBundle:Product')->findArray(array_keys($session->get('cart')));
        $shipping = $em->getRepository('UserBundle:Address')->find($address['shipping']);
        if ($address['billing'])
            $billing = $em->getRepository('UserBundle:Address')->find($address['billing']);
        else
            $billing = null;*/

        //dump($commande);die();

        return $this->render('MainBundle:Cart:validation.html.twig', array(
            'commande' => $commande
        ));
    }

    public function facture()
    {
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        $generator = $this->container->get('security.secure_random');
        $address = $session->get('address');
        $cart = $session->get('cart');
        $commande = array();
        $totalHT = 0;
        $totalTTC = 0;

        $billing = $em->getRepository('UserBundle:Address')->find($address['billing']);
        $shipping = $em->getRepository('UserBundle:Address')->find($address['shipping']);
        $products = $em->getRepository('MainBundle:Product')->findArray(array_keys($session->get('cart')));

        foreach ($products as $product) {
            $prixHT = $product->getPrice() * $cart[$product->getId()];
            $prixTTC = $product->getPrice() * $cart[$product->getId()] * (1 + $product->getTva()->getValeur()/100);
            $totalHT += $prixHT;
            $totalTTC += $prixTTC;

            if (!isset($commande['tva']['%'.$product->getTva()->getValeur()])) {
                $commande['tva']['%'.$product->getTva()->getValeur()] = round($prixTTC - $prixHT, 2);
            } else {
                $commande['tva']['%'.$product->getTva()->getValeur()] += round($prixTTC - $prixHT, 2);
            }

            $commande['products'][$product->getId()] = array(
                'title' => $product->getTitle(),
                'quantity' => $cart[$product->getId()],
                'prixHT'   => round($product->getPrice(), 2),
                'prixTTC'  => round($product->getPrice() * (1 + $product->getTva()->getValeur()/100) , 2)
            );
        }

        $commande['billing'] = array(
            "firstname" => $billing->getFirstname(),
            "lastname"  => $billing->getLastname(),
            "streetnumber"  => $billing->getStreetnumber(),
            "streetextension"   => $billing->getStreetextension(),
            "streettype"  => $billing->getStreettype(),
            "streetname"   => $billing->getStreetname(),
            "zipcode"   => $billing->getZipcode(),
            "city"      => $billing->getCity(),
            "country"   => $billing->getCountry()
        );

        $commande['shipping'] = array(
            "firstname" => $shipping->getFirstname(),
            "lastname"  => $shipping->getLastname(),
            "streetnumber"  => $shipping->getStreetnumber(),
            "streetextension"   => $shipping->getStreetextension(),
            "streettype"  => $shipping->getStreettype(),
            "streetname"   => $shipping->getStreetname(),
            "zipcode"   => $shipping->getZipcode(),
            "city"      => $shipping->getCity(),
            "country"   => $shipping->getCountry()
        );

        $commande['prixHT'] = round($totalHT, 2);
        $commande['prixTTC'] = round($totalTTC, 2);
        $commande['token'] = bin2hex($generator->nextBytes(20));

        return $commande;
    }

    /**
     *
     * @Route("/livraison/adresse/suppression/{id}", name="deleteAddress")
     */
    public function deleteAddressAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $address = $em->getRepository('UserBundle:Address')->find($id);

        if ($this->container->get('security.context')->getToken()->getUser() != $address->getUser() || !$address)
            return $this->redirect($this->generateUrl('shipping'));

        $em->remove($address);
        $em->flush();
    }
}