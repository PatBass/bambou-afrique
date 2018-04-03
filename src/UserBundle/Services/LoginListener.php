<?php
namespace AFMP\UserBundle\Services;

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
 * @author Mikael SERREAU <mikael@squareeyes.fr>
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
        if ($user->hasRole('ROLE_SUPER_ADMIN')) {
            if (count($user->getSchools()) > 0) {
                $this->session->set('school', $user->getSchools()[0]);
            }
        }

        $this->dispatcher->addListener(KernelEvents::RESPONSE, array($this, 'redirection'));
    }

    /**
     * Redirect user on dispatch route
     * @param FilterResponseEvent $event
     */
    public function redirection(FilterResponseEvent $event)
    {
        $response = new RedirectResponse($this->router->generate('AFMPUserBundle_dispatch'));
        $event->setResponse($response);
    }
}