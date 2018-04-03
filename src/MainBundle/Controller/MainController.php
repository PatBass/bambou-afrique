<?php

namespace MainBundle\Controller;

use MainBundle\Entity\Application;
use MainBundle\Entity\Contact;
use MainBundle\Form\ApplicationType;
use MainBundle\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;


class MainController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response represents an HTTP response
     * @Route ("/", name="home")
     *
     */
    public function homeAction()
    {
        return $this->render('MainBundle:Main:home.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/Bamboudafrique-Casablanca", name="index1")
     *
     */
    public function index1Action()
    {
        $productsList = $this
            ->getDoctrine()
            ->getRepository('MainBundle:Product')
            ->findAll()
        ;

        return $this->render('MainBundle:Main:index-1.html.twig', array(
            'productsList' => $productsList
        ));

    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/Bamboudafrique-Casablanca/Mon-compte", name="account")
     *
     */
    public function accountAction()
    {

        return $this->render('MainBundle:Main:account.html.twig');

    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/Bamboudafrique-Casablanca/le-mets/{id}", name="single")
     *
     */
    public function singleAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('MainBundle:Product')->find($id);

        return $this->render('MainBundle:Main:single.html.twig', array(
                'product' => $product
            )
        );

    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/Bamboudafrique-Casablanca/Specialite/{category}", name="speciality")
     *
     */
    public function specialityAction(Request $request, $category)
    {
        $category = strtolower($category);
        $em = $this->getDoctrine()->getManager();
        $productsList = $em->getRepository('MainBundle:Product')->findAll();
        $listCategories = $em->getRepository('MainBundle:Category')->findAll();
        $specialityList = $em->getRepository('MainBundle:Specialitylist')->findAll();


        $finalProductsList = [];
        if ($category != "liste") {
            foreach ($productsList as $product ) {

                foreach ($listCategories as $cat) {
                    //var_dump($category);die();
                    if ($cat->getName() === $category) {
                        $product->addCategory($cat);
                        $finalProductsList[] = $product;
                    }
                }
            }
        }

        $categ = ($category != "liste")? '$category':'';

        //var_dump($finalProductsList);die();


        return $this->render('MainBundle:Main:'.$category.'.html.twig', array(
            'finalProductsList' => $finalProductsList,
            'productsList'      => $productsList,
            'categ'             => $categ,
            'specialityList'    => $specialityList
        ));

    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/Bamboudafrique-Casablanca/contact", name="contact")
     *
     */
    public function contactAction(Request $request)
    {
        // Retrieving POST data
        //$postData = $request->request->get('email');

        $contact = new Contact();

        //$form = $this->createForm(new ContactType(), $contact);

        $form = $this
            ->createForm(new ContactType(), $contact)
            ->handleRequest($request)
        ;

        if ($form->isSubmitted() && $form->isValid()) {
            /*if ($this->get('ap_platform.antispam')->isSpam($contact->getMessage())) {
                throw new \Exception('The field email is either empty or its content is too short');
            }*/

            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Votre message a été envoyé !');

            $mailer = $this->get('mailer');

            $message =  \Swift_Message::newInstance()
                ->setSubject('Message venant du formulaire de contact de odellya.org')
                ->setFrom('contact@odellya.org')
                ->setTo('contact@odellya.org')
                ->setBody("Nouveau message provenant de ".$contact->getName()."<br>  Adresse Email : <strong>".$contact->getEmail()."</strong> <br>Son message:<br> <i>".$contact->getMessage()."</i>")
            ;

            $mailer->send($message);
        }

        return $this->render("MainBundle:Main:contact.html.twig", array(
            'form' => $form->createView()
        ));
    }


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/adhesion", name="application")
     *
     */
    public function applicationAction(Request $request)
    {
        // Retrieving POST data
        //$postData = $request->request->get('email');

        $application = new Application();

        //$form = $this->createForm(new ContactType(), $contact);

        $form = $this
            ->createForm(new ApplicationType(), $application)
            ->handleRequest($request)
        ;

        if ($form->isSubmitted() && $form->isValid()) {
            /*if ($this->get('ap_platform.antispam')->isSpam($contact->getMessage())) {
                throw new \Exception('The field email is either empty or its content is too short');
            }*/

            //Moving the visitor's photo to upload/img
            //$application->getImage()->upload();  The entity is handling image moving to storage directory

            $key          = '6LeF9Q4UAAAAAB9qB7E5Zfe7LQKAUqop2w89K7iB';
            $response     = $_POST['g-recaptcha-response'];  // $response = get
            $remoteip     = $_SERVER['REMOTE_ADDR'];

            $gapi_request = 'https://www.google.com/recaptcha/api/siteverify?secret='.$key.'&response='.$response.'&remoteip='.$remoteip;

            $json         = json_decode(file_get_contents($gapi_request), true);

            if (!$json['success']) {
                $error = 'La valeur du recaptcha est incorrecte';
                return $this->render('MainBundle:Main:application.html.twig', array(
                    'form'    => $form->createView(),
                    'application' => $application,
                    'error'   => $error
                ));
            } else {
                $em = $this->getDoctrine()->getManager();
                $em->persist($application);

                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Votre demande d\'adhésion a été envoyée !');

                $mailer = $this->get('mailer');

                $message =  \Swift_Message::newInstance()
                    ->setSubject('Nouvelle adhésion via odellya.org')
                    ->setFrom('contact@odellya.org')
                    ->setTo('patrickbassoukissa@yahoo.fr')
                    ->setBody("Nouvelle adhésion effectuée par ".$application->getName()."\nAdresse Email : ".$application->getEmail()."\nPays de résidence : ".$application->getCountry()."\nSon message:\n".$application->getMessage()."\n\nPhoto jointe : http://localhost:8888/odellya/web/".$application->getImage()->getUploadDir().'/'.$application->getImage()->getId().'/'.$application->getImage()->getUrl())
                ;

                $mailer->send($message);

                unset($application);
                unset($form);
                $application = new Application();
                $form = $this->createForm(new ApplicationType(), $application);
            }

        }

        return $this->render("MainBundle:Main:application.html.twig", array(
            'form' => $form->createView()
        ));
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/Bamboudafrique-Casablanca/login", name="login")
     *
     */
    public function loginAction()
    {

        return $this->render('MainBundle:Main:login.html.twig');

    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/Bamboudafrique-Casablanca/La-commande", name="checkout")
     *
     */
    public function checkoutAction()
    {

        return $this->render('MainBundle:Main:checkout.html.twig');

    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/Bamboudafrique-Casablanca/A-propos-de-Bambou-d-Afrique", name="about")
     *
     */
    public function aboutAction()
    {
        return $this->render('MainBundle:Main:about.html.twig');

    }


    private function createCreateForm(Contact $contact)
    {
        $form = $this->createForm(new ContactType(), $contact, array(
            'action' => $this->generateUrl('contact'),
            'method' => 'POST'
        ));

        return $form;
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/contact", name="contact_new")
     * @Method ("GET")
     */
    public function newContactAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createCreateForm($contact);

        return $this->render('MainBundle:Main:newContact.html.twig', array(
            'contact' => $contact,
            'form'    => $form->createView()
        ));
    }

    /**
     * @Route ("/choose-language/{language}", name="choose_language")
     * Change the locale for the current user
     * @param String $language
     * @return array
     *
     */
    public function chooseLanguageAction($language = null)
    {
        if ($language != null) {
            //Saving language value in session
            $this->get('session')->set('_locale', $language);
        }

        //Attempting to redirect to the previous page
        $url = $this->container->get('request')->headers->get('referer');

        if (empty($url)) {
            $url = $this->container->get('router')->generate('home');
        }
        return new RedirectResponse($url);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response|void
     * @Route ("/keyword-search", name="keyword_search")
     */
    public function searchAction()
    {
        $request = $this->container->get('request');

        $search_application = $this->get('fos_elastica.index.odellya.application');
        $search_application->search('prenom1@domain.com');


        /*if($request->isXmlHttpRequest())
        {
            $keyword = '';
            $keyword = $request->request->get('keyword');

            $em = $this->container->get('doctrine')->getEntityManager();

            if($keyword != '')
            {
                $qb = $em->createQueryBuilder();

                $qb->select('a')
                    ->from('MyAppFilmothequeBundle:Acteur', 'a')
                    ->where("a.nom LIKE :keyword OR a.prenom LIKE :keyword")
                    ->orderBy('a.nom', 'ASC')
                    ->setParameter('keyword', '%'.$keyword.'%');

                $query = $qb->getQuery();
                $acteurs = $query->getResult();
            }
            else {
                $acteurs = $em->getRepository('MyAppFilmothequeBundle:Acteur')->findAll();
            }

            return $this->container->get('templating')->renderResponse('MyAppFilmothequeBundle:Acteur:liste.html.twig', array(
                'acteurs' => $acteurs
            ));
        }
        else {
            return $this->listerAction();
        }*/
    }

    public function listerAction() // Pour ajouter le formulaire
    {
        // ...
        $form = $this->container->get('form.factory')->create(new ActeurRechercheForm());

        return $this->container->get('templating')->renderResponse('MyAppFilmothequeBundle:Acteur:lister.html.twig', array(
            'acteurs' => $acteurs,
            'form' => $form->createView()
        ));
    }

    /**
     * @Route ("/translation/{name}", name="translation")
     */
    public function translationAction($name)
    {
        $translated = $this->get('translator')->trans('Search');

        return $this->render("MainBundle:Main:translation.html.twig", array(
            "name" => $name,
            "translated" => $translated
        ));
    }

    /**
     * @Route ("/Bamboudafrique-Casablanca/Galerie", name="galery")
     */
    public function galeryaction()
    {

        return $this->render("MainBundle:Main:galery.html.twig");
    }

}
