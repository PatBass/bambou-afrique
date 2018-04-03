<?php
namespace InvoiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Comptabilite controller
 *
 * @author Patrick BASSOUKISSA <patrickbassoukissa@gmail.com>
 */
class ComptabiliteController extends Controller
{
    /**
     * Listing des encaissements
     * @return Response
     */
    public function encasementAction()
    {
        $get = $this->getRequest()->query;

        $d1 = !$get->get('d1') ? new \DateTime(date('Y').'-01-01') : new \DateTime($get->get('d1'));
        $d2 = !$get->get('d2') ? new \DateTime(date('Y').'-12-31') : new \DateTime($get->get('d2'));
        $query = $get->get('query') ? $get->get('query') : null;

        $entityManager = $this->getDoctrine()->getManager();
        $payments = $entityManager->getRepository('InvoiceBundle:Payment')->search($d1, $d2, $query);

        return $this->render('InvoiceBundle:Comptabilite:encasement.html.twig', array(
            'd1'       => $d1,
            'd2'       => $d2,
            'query'    => $query,
            'username' => $get->get('username'),
            'secret'   => $get->get('secret'),
            'payments' => $payments
        ));
    }

    /**
     * Download factures
     * @return 
     */
    public function downloadInvoicesAction()
    {
        $post = $this->getRequest()->request;
        $urls = array();
        // Securized tricks
        foreach ($post->get('files') as $file) {
            $basename = basename($file);
            $urltmp = 'uploads/invoices/'.$basename;
            if (!in_array($urltmp, $urls)) {
                $urls[] = 'uploads/invoices/'.$basename;
            }
        }

        ob_start();
        $zipfile = 'uploads/'.microtime().'_temp.zip';
        $zip = new \Archive_Zip($zipfile);
        $zip->create($urls);
        $content = file_get_contents($zipfile);
        unlink($zipfile);

        $response = new Response($content);
        $response->headers->set('Content-Type', 'application/x-zip');
        $response->headers->set('Content-Disposition', 'attachment; filename=factures.zip');

        return $response;
    }
}