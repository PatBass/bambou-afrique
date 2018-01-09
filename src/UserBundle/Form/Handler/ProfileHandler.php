<?php
namespace AFMP\UserBundle\Form\Handler;

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
class ProfileHandler
{
	protected $request;
	protected $router;
	protected $dispatcher;
    protected $userManager;
    protected $entityManager;
    protected $mailer;

    public function __construct($request, $router, $dispatcher, $userManager, $entityManager, $mailer)
    {
    	$this->request = $request;
    	$this->router = $router;
    	$this->dispatcher = $dispatcher;
    	$this->userManager = $userManager;
        $this->entityManager = $entityManager;
        $this->mailer = $mailer;
    }

    public function process(Form $form, $user)
    {    
        $form->setData($user);

        if ('POST' === $this->request->getMethod()) {
            $form->bind($this->request);

            if ($form->isValid()) {
                $event = new FormEvent($form, $this->request);
                $this->dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);

                $this->userManager->updateUser($user);

                if (null === $response = $event->getResponse()) {
                    $url = $this->router->generate('fos_user_profile_show');
                    $response = new RedirectResponse($url);
                }

                $this->dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $this->request, $response));

                return $response;
            }
        }
    }

    protected function onSuccess()
    {

    }
}