<?php

namespace UserBundle\Listeners;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\UserEvent;
use FOS\UserBundle\FOSUserEvents;
use UserBundle\Services\MailingService;

class RegistrationListener implements EventSubscriberInterface
{
    private $mailer;
    private $securityContext;
    private $router;

    public function __construct(MailingService $mailer, $securityContext, $router)
    {
        $this->mailer = $mailer;
        $this->securityContext = $securityContext;
        $this->router = $router;
    }

    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            FOSUserEvents::REGISTRATION_COMPLETED=> 'onRegistrationCompleted'
        );
    }

    /**
     * Send an email to the user when it's registration is completed
     */
    public function onRegistrationCompleted(FilterUserResponseEvent $event)
    {
        $user = $event->getUser();
    }
}