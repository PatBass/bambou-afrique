<?php
namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Gestion des pages de l'administrateur
 *
 * @author Mikael SERREAU <mikael@squareeyes.fr>
 */
class UserController extends Controller
{
    /**
     * Affichage du dashboard de l'administrateur
     * @return Response
     */
    public function adminDashboardAction()
    {
        // Bypass Dashboard
        return $this->redirect($this->generateUrl('AFMPFilingBundle_licencefiles'));

        return $this->render('AFMPUserBundle:Admin:dashboard.html.twig');
    }

    /**
     * Access a user account when ROLE_SUPER_ADMIN
     *
     * @param User $user
     * @return Response
     */
    public function bypassAction(User $user)
    {
      $oldToken = $this->get('security.context')->getToken();
      $token = new UsernamePasswordToken($user, null, $oldToken->getProviderKey(), $user->getRoles());
      $this->get('security.context')->setToken($token);

      return $this->redirect($this->generateUrl('fos_user_profile_show'));
    }

    /**
     * Go back to the ROLE_SUPER_ADMIN account
     *
     * @return Response
     */
    public function reverseBypassAction()
    {
      $session = $this->getRequest()->getSession();

      if (!$session->get('admin')) {
        throw $this->createNotFoundException();
      }

      $entityManager = $this->getDoctrine()->getManager();
      $admin = $entityManager->getRepository('AFMPUserBundle:User')->findOneById($session->get('admin'));
      
      $oldToken = $this->get('security.context')->getToken();
      $token = new UsernamePasswordToken($admin, null, $oldToken->getProviderKey(), $admin->getRoles());
      $this->get('security.context')->setToken($token);

      return $this->redirect($this->generateUrl('fos_user_profile_show'));
    }
}