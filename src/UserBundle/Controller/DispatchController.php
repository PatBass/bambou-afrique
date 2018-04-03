<?php
namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Page de redirection sur les bon dashboards en fonction des roles
 *
 * @author Patrick BASSOUKISSA <patrickbassoukissa@gmail.com>
 */
class DispatchController extends Controller
{
    /**
     * Dispatcher
     * @return Response
     */
    public function indexAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user->hasRole('ROLE_SUPER_ADMIN')) {
            return $this->redirect($this->generateUrl('UserBundle_admin_dashboard'));
        } else if ($user->hasRole('ROLE_USER')) {
            return $this->redirect($this->generateUrl('AFMPFilingBundle_dashboard'));
        }

        throw $this->createNotFoundException();
    }
}