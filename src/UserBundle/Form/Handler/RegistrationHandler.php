<?php
namespace AFMP\UserBundle\Form\Handler;

use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\Event\UserEvent;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use AFMP\FilingBundle\Entity\LicenceFile;
use AFMP\LicenceBundle\Entity\Licence;
use AFMP\SchoolBundle\Entity\School;

/**
 * Handles the Registration Form
 */
class RegistrationHandler
{
    protected $request;
    protected $router;
    protected $dispatcher;
    protected $userManager;
    protected $entityManager;
    protected $mailer;
    protected $fileManager;
    private $securityContext;
    private $afmpmailer;

    /**
     * Constructeur
     * @param Request          $request
     * @param Router           $router
     * @param Dispatcher       $dispatcher
     * @param UserManager      $userManager
     * @param EntityManager    $entityManager
     * @param Mailer           $mailer
     * @param FileManager      $fileManager
     * @param SessionInterface $session
     * @param SecurityContext  $scurityContext
     * @param MailingService   $afmpmailer
     */
    public function __construct($request, $router, $dispatcher, $userManager, $entityManager, $mailer, $fileManager, $session, $securityContext, $afmpmailer)
    {
        $this->request = $request;
        $this->router = $router;
        $this->dispatcher = $dispatcher;
        $this->userManager = $userManager;
        $this->entityManager = $entityManager;
        $this->mailer = $mailer;
        $this->fileManager = $fileManager;
        $this->session = $session;
        $this->securityContext = $securityContext;
        $this->afmpmailer = $afmpmailer;
    }

    /**
     * Check la validité du formulaire
     * @param Form $form
     * @return Response
     */
    public function process(Form $form)
    {    
        $user = $this->userManager->createUser();
        $user->setEnabled(true);
    
        $this->dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, new UserEvent($user, $this->request));
    
        $form->setData($user);

        if ('POST' === $this->request->getMethod()) {
            $form->bind($this->request);
            $user->setUsername($user->getEmail());
            $user->setUsernameCanonical($user->getEmailCanonical());
            $user->getInfos()->setPhone(str_replace(array(' ', '-', '.', '/', '\\', '_', ',', '+'), '', $user->getInfos()->getPhone()));

            if ($form->isValid()) {
                return $this->onSuccess($form, $user);
            }
        }

        return false;
    }

    protected function onSuccess($form, $user)
    {
        $event = new FormEvent($form, $this->request);
        $this->dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);
        $this->userManager->updateUser($user);

        // Create the Licence File
        $reflicence = $this->request->request->get('fos_user_registration_form')['licence'];
        $refschool = $this->request->request->get('fos_user_registration_form')['school'];
        $cadeau    = isset($this->request->request->get('fos_user_registration_form')['cadeau']) ? $this->request->request->get('fos_user_registration_form')['cadeau'] : false;
        $this->fileManager->createFiling($user, $reflicence, $refschool, $cadeau);

        if (null === $response = $event->getResponse()) {
            if ($this->securityContext->isGranted('ROLE_SUPER_ADMIN')) {
                $url = $this->router->generate('AFMPUserBundle_dispatch')."?compte_client=".$user->getUsername();
                $response = new RedirectResponse($url);
            } else {
                $url = $this->router->generate('fos_user_registration_confirmed');
                $response = new RedirectResponse($url);
                $this->dispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $this->request, $response));
            }
        }

        $this->afmpmailer->sendRegistrationMail($user);
        
        return $response;
    }
}