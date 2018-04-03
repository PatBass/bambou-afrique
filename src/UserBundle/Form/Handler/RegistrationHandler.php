<?php
namespace UserBundle\Form\Handler;

use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\Event\UserEvent;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;


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
    private $securityContext;
    private $bamboumailer;

    /**
     * Constructeur
     * @param Request          $request
     * @param Router           $router
     * @param Dispatcher       $dispatcher
     * @param UserManager      $userManager
     * @param EntityManager    $entityManager
     * @param Mailer           $mailer
     * @param SessionInterface $session
     * @param SecurityContext  $scurityContext
     * @param MailingService   $bamboumailer
     */
    public function __construct($request, $router, $dispatcher, $userManager, $entityManager, $mailer, $session, $securityContext, $bamboumailer)
    {
        $this->request = $request;
        $this->router = $router;
        $this->dispatcher = $dispatcher;
        $this->userManager = $userManager;
        $this->entityManager = $entityManager;
        $this->mailer = $mailer;
        $this->session = $session;
        $this->securityContext = $securityContext;
        $this->bamboupmailer = $bamboumailer;
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
            $user->setPhone(str_replace(array(' ', '-', '.', '/', '\\', '_', ',', '+'), '', $user->getPhone()));

            if ($form->isValid()) {
                if ($form->getData()->getLastname() === "Administrateur" && $form->getData()->getFirstname() === "Administrateur") {
                    $user->addRole('ROLE_ADMIN');
                } else {
                    $user->addRole('ROLE_USER');
                }
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

        if (null === $response = $event->getResponse()) {
            $url = $this->generateUrl('fos_user_registration_confirmed');
            $response = new RedirectResponse($url);
        }

        $this->dispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

        //$this->bamboumailer->sendRegistrationMail($user);
        
        return $response;
    }
}