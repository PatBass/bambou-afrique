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
use Symfony\Component\HttpFoundation\Response;
use UserBundle\Entity\Address;
use UserBundle\Form\Type\AddressType;


class CommandesController extends Controller
{
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
        $products = $em->getRepository('UserBundle:Product')->findArray(array_keys($session->get('cart')));

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

    public function prepareCommandeAction()
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();

        if (!$session->has('commande')) {
            $commande = new Commande();
        } else {
            $commande = $em->getRepository('MainBundle:Commande')->find($session->get('commande'));
        }

        $commande->setDate(new \DateTime());
        $commande->setUser($this->container->get('security.context')->getToken()->getUser());
        $commande->setValider(0);
        $commande->setReference(0);
        $commande->setCommande($this->facture());

        if (!$session->has('commande')) {
            $em->persist($commande);
            $session->set('commande', $commande->getId());
        }

        $em->flush();

        return new Response($commande->getId());
    }

    /**
     * Simulation de traitement par l'api banque - à adapter en fonction de l'api utilisé
     *
     * @Route("api/banque/{id}", name="validation_commande")
     */
    public function validationCommandeAction($id)
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();

        $commande = $em->getRepository('MainBundle:Commande')->find($id);

        if (!$commande || $commande->getValider() == 1) {
            throw $this->createNotFoundException("La commande n'existe pas");
        }

        $commande->setValider(1);
        $commande->setReference($this->container->get('set_new_reference'));

        $em->flush();

        $session->remove('address');
        $session->remove('commande');
        $session->remove('cart');

        $this->container->get('session')->getFlashBag()->add('success', 'La commande a été traitée avec succès');

        return $this->redirect($this->generateUrl('bill'));


    }
    
}