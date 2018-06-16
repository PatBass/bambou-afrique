<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 16/05/18
 * Time: 19:08
 */

namespace MainBundle\Services;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;


class RedirectionListener
{
    public function __construct(ContainerInterface $container, Session $session)
    {
        $this->session = $session;
        $this->router = $container->get('router');
        $this->securityContext = $container->get('security.context');
    }

    public function onKernelRequest(GetResponseEvent $event)
    {
        $route = $event->getRequest()->attributes->get('_route');

        if ($route == 'shipping' || $route == 'validation') {
            if ($this->session->has('cart')) {
                if (count($this->session->get('cart')) == 0) {
                    $event->setResponse(new RedirectResponse($this->router->generate('cart')));
                }
            }

            if (!is_object($this->securityContext->getToken()->getUser())) {
                $this->session->getFlashBag()->add('notice', 'Vous devez vous identifier pour pouvoir continuer');
                $event->setResponse(new RedirectResponse($this->router->generate('fos_user_security_login')));
            }
        }
    }

}