<?php
namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MPDF;
use Symfony\Component\HttpFoundation\Response;

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

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/profile/facture", name="bill")
     */
    public function billAction()
    {
        $em = $this->getDoctrine()->getManager();
        $bills = $em->getRepository('MainBundle:Commande')->getByBill($this->getUser());

        return $this->render('UserBundle:Billing:bill.html.twig', array(
            "bills" => $bills
        ));
    }

    public function billPDFAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $bill = $em->getRepository('MainBundle:Commande')->findOneBy(array('user'=>$this->getUser(), 'valider'=> 1, 'id'=>$id));

        if (!$bill) {
            $this->get('session')->getFlashBag()->add('error', 'Une erreur est survenue');
            $this->redirect($this->generateUrl('bill'));
        }

        $content= $this->renderView('MainBundle:Billing:bill_pdf.html.twig');

        //$mpdf = new \mPDF();

        $stylesheet = file_get_contents(__DIR__.'/../../../vendor/pdf/pdf.css'); // Get css content
        $html = '<div id="pdf-content">
              Your PDF Content goes here (Text/HTML)
         </div>';
        // Setup PDF
        $mpdf = new mPDF('utf-8', 'A4'); // New PDF object with encoding & page size
        $mpdf->setAutoTopMargin = 'stretch'; // Set pdf top margin to stretch to avoid content overlapping
        $mpdf->setAutoBottomMargin = 'stretch'; // Set pdf bottom margin to stretch to avoid content overlapping
        // PDF header content
        $mpdf->SetHTMLHeader('<div class="pdf-header">
                           
                      </div>');
        // PDF footer content
        $mpdf->SetHTMLFooter('<div class="pdf-footer">
                      
                      </div>');

        $mpdf->WriteHTML($stylesheet,1); // Writing style to pdf
        $mpdf->WriteHTML($content); // Writing html to pdf
        //$mpdf->Output('bill.pdf','D'); // For Download
        $nomfichierserveur = __DIR__."/../../../web/save/pdf/bill-".date('YmdHis').".pdf";




        $mpdf->Output($nomfichierserveur, 'F');//enregistrer sur serveur

        $response = new Response();

        $response->headers->set('Content-Type', 'application/pdf');

        return $response;
    }
}