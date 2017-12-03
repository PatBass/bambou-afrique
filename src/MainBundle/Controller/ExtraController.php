<?php

namespace MainBundle\Controller;

use MainBundle\Entity\Choix;
use MainBundle\Entity\Contact;
use MainBundle\Entity\Distributor;
use MainBundle\Form\ContactType;
use MainBundle\Form\DistributorType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;


class ExtraController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/", name="home")
     * @Method ("GET")
     */
    public function indexAction()
    {
        return $this->render('MainBundle:Main:index.html.twig');
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
     * @Route ("/nakevote", name="nakevote")
     */
    public function nakevoteAction(Request $request)
    {
        //dump($request);die;

        $form = $this->createFormBuilder()
            ->add('prenom', 'text', array('required' => true))
            ->add('password', 'password', array('required' => true))

            ->getForm()
        ;

        $listVotants = [
            "Chrisbel" => "malonga",
            "Guy" => null,
            "Kelfred" => null,
            "Packo" => null,
            "Patrice" => null,
            "Sidney" => null,
            "Marien" => null,
            "Wilder" => null,
            "Karl" => null,
            "Vianney" => null,
            "Armel" => null,
            "Gatien" => null,
            "Elitch" => null,
            "Davy" => null,
            "Yann" => null,
            "Destin" => null,
            "Borefe" => null,
            "Michael" => null,
            "Maco" => null,
            "242066204247" => null,
            "Séverin" => null,
            "Modeste" => null,
            "Fustel" => null,
            "242066928749" => null,
            "Borel" => null,
            "Mbama" => null,
            "Bertrand" => null,
            "Lebreche" => null,
            "Dikobat" => null,
            "33625351916" => null,
            "Gildas" => null,
            "Jude" => null,
            "Christel" => null,
            "Wilson" => null,
            "Alain" => null,
            "33651697151" => "personne",
            "33659346182" => null,
            "33668342845" => null,
            "33676456386" => null,
            "Paracle" => null,
            "Behn" => null,
            "Ghislain" => "bassoukissa"
        ];

        $form->handleRequest($request);
        //dump($prenom);die;

        $password = $form->get('password')->getData();

        $prenom = $form->get('prenom')->getData();
        $request->getSession()->set('prenom_du_votant', $prenom);

        if ($form->isSubmitted() && $form->isValid()) {

            /*foreach ($listVotants as $key => $value) {
                if ($key == $prenom && $password == $value) {
                    return $this->redirect($this->generateUrl('tokevote', array(
                        'votant' => $prenom,
                    )));

                } else {

                    $request->getSession()->getFlashbag()->add('notice', 'Yo nani ? Té to yébi yo té, longwa !');

                }
            }*/

            if (array_key_exists($prenom, $listVotants) && $password == $listVotants[$prenom]) {
                return $this->redirect($this->generateUrl('tokevote', array(
                    'votant' => $prenom,
                )));

            } else {

                $request->getSession()->getFlashbag()->add('notice', 'Yo nani ? Té to yébi yo té, longwa !');

            }

        }



        return $this->render('MainBundle:Extra:identification.html.twig', array(
            'form' => $form->createView()
        ));


    }

    /**
     * @Route ("/tokevote", name="tokevote")
     */
    public function tokevoteAction(Request $request)
    {

        /*$choix1 ="Amical 212";
        $choix2 ="Association des Anciens Congolais Résidents au Maroc";
        $choix3 ="Amical des Anciens Étudiants et Résidents Congolais du Maroc (AAERCOM)";
        $choix4 ="Référentiel des anciens étudiants congolais au Maroc ( REACOM)";
        $choix5 ="Cité d'idées et solutions des anciens étudiants congolais au Maroc";
        $choix6 ="Cité ou Campus des cadres congolais formés au Maro";
        $choix7 ="Référentiel des Cadres Congolais formés au Maroc (RECCFOM)";
        $choix8 ="Atlas Congo Maroc";
        $choix9 ="Intersection Congo Maroc";
        $choix10 ="Collectif 'cite inter'";
        $choix11 ="Cercle des anciens résidents congolais au Maroc";*/

        $choix1 = new Choix();
        $choix1->setProposition("Amical 212");

        $choix2 = new Choix();
        $choix2->setProposition("Association des Anciens Congolais Résidents au Maroc");

        $choix3 = new Choix();
        $choix3->setProposition("Amical des Anciens Étudiants et Résidents Congolais du Maroc (AAERCOM)");

        $choix4 = new Choix();
        $choix4->setProposition("Référentiel des anciens étudiants congolais au Maroc ( REACOM)");

        $choix5 = new Choix();
        $choix5->setProposition("Cité d'idées et solutions des anciens étudiants congolais au Maroc");

        $choix6 = new Choix();
        $choix6->setProposition("Cité ou Campus des cadres congolais formés au Maroc");

        $choix7 = new Choix();
        $choix7->setProposition("Référentiel des Cadres Congolais formés au Maroc (RECCFOM)");

        $choix8 = new Choix();
        $choix8->setProposition("Atlas Congo Maroc");

        $choix9 = new Choix();
        $choix9->setProposition("Intersection Congo Maroc");

        $choix10 = new Choix();
        $choix10->setProposition("Collectif 'cite inter'");

        $choix11 = new Choix();
        $choix11->setProposition("Cercle des anciens résidents congolais au Maroc");

        $em = $this->getDoctrine()->getManager();
        $em->persist($choix1);
        $em->persist($choix2);
        $em->persist($choix3);
        $em->persist($choix4);
        $em->persist($choix5);
        $em->persist($choix6);
        $em->persist($choix7);
        $em->persist($choix8);
        $em->persist($choix9);
        $em->persist($choix10);
        $em->persist($choix11);

        $em->flush();


        $form = $this->createFormBuilder()
            ->add('proposition', 'entity', array(
                'class' => 'MainBundle:Choix',
                'multiple'=>false,
                'expanded'=>true

            ))
            ->getForm()
        ;

        $form->handleRequest($request);

        $proposition = $form->get('proposition')->getData();




        $votants = [];
        if ($form->isSubmitted() && $form->isValid()) {
            $listChoix = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('MainBundle:Choix')
                ->findAll()
            ;

            foreach ($listChoix as $choix) {
                if ($proposition == $choix->getProposition()) {
                    $count = $choix->getCount();
                    $count++;
                    $choix->setCount($count);
                }
            }

            $em->flush();


            $votants[] = $request->getSession()->get('votant');
        }

        $cookie = new Cookie('list_choix', $listChoix);
        $response = new Response();
        $response->headers->setCookie($cookie);

        return $this->render('MainBundle:Extra:tokevote.html.twig', array(
            'form' => $form->createView(),
            'proposition' => $proposition,
            'listChoix' => $response->headers->getCookies()[0]->getValue(),
            'votants' => $votants
        ));



    }



}
