<?php
namespace UserBundle\Services;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Routing\Router;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
 
/**
 * Listen login was successfully
 *
 * @author Patrick BASSOUKISSA <patrickbassoukissa@gmail.com>
 */
class LoginListener
{
    private $router;
    private $securityContext;
    private $session;
    private $dispatcher;

    /**
     * Constructor
     * @param Router                   $router
     * @param SecurityContextInterface $securityContext
     * @param SessionInterface         $session
     * @param EventDispatcher          $dispatcher
     */
    public function __construct(Router $router, SecurityContextInterface $securityContext, SessionInterface $session, $dispatcher)
    {
        $this->router = $router;
        $this->securityContext = $securityContext;
        $this->session = $session;
        $this->dispatcher = $dispatcher;
    }

    /**
     * Called each time login was successfully
     * @param InteractiveLoginEvent $event
     */
    public function loginSuccess(InteractiveLoginEvent $event)
    {
        $user = $this->securityContext->getToken()->getUser();

        return $this->router->generate('index1');
        /*$if ($user->hasRole('ROLE_ADMIN')) {
            return new Response('Compte Admin');
        } else {
            return new Response('Page de profil utilisateur');
        }

        $this->dispatcher->addListener(KernelEvents::RESPONSE, array($this, 'redirection'));*/
    }

    /**
     * Redirect user on dispatch route
     * @param FilterResponseEvent $event
     */
    public function redirection(FilterResponseEvent $event)
    {
        $response = new RedirectResponse($this->router->generate('index1'));
        $event->setResponse($response);
    }
}