<?php
namespace AFMP\InvoiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;
use AFMP\InvoiceBundle\Form\Type\SearchType;
use AFMP\InvoiceBundle\Entity\Invoice;
use AFMP\InvoiceBundle\Entity\InvoiceLine;
use AFMP\InvoiceBundle\Form\Type\InvoiceType;

/**
 * Manage invoices
 *
 * @author Patrick BASSOUKISSA <patrickbassoukissa@gmail.com>
 */
class InvoiceController extends Controller
{
    /**
     * Display invoices
     * @return Response
     */
    public function listingAction()
    {
        $form = $this->get('form.factory')->create(new SearchType());
        $get = $this->getRequest()->query;
        $payed = $get->get('payed') ? true : false;
        $entityManager = $this->getDoctrine()->getManager();
        $invoices = $entityManager->getRepository('AFMPInvoiceBundle:Invoice')->search(array(), $payed);
        $total = $this->get('afmp.invoice_manager')->getTotal($invoices);

        return $this->render('AFMPInvoiceBundle:Invoice:listing.html.twig', array(
            'form'     => $form->createView(),
            'invoices' => $invoices,
            'total'    => $total,
            'payed'    => $payed
        ));
    }

    /**
     * Create a new Invoice
     * @return Redirect
     */
    public function createDraftAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $invoice = $entityManager->getRepository('InvoiceBundle:Invoice')->findDraftInvoice();
        if (!$invoice) {
            $invoice = new Invoice();
        }
        $entityManager->persist($invoice);
        $entityManager->flush();

        return $this->redirect($this->generateUrl('InvoiceBundle_show', array('id' => $invoice->getId())));
    }

    /**
     * Display invoice
     * @param Invoice $invoice
     * @ParamConverter("invoice", options={"mapping": {"id": "id"}, "repository_method": "findOneById"})
     * @return Response
     */
    public function showAction(Invoice $invoice)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $form = $this->get('form.factory')->create(new InvoiceType($entityManager), $invoice);
        $totalPayment = $this->get('afmp.invoice_manager')->getTotalPayment($invoice);

        if ($this->get('afmpinvoice.invoice.form.handler')->process($form)) {
            $this->get('session')->getFlashBag()->set('message', 'Votre facture a bien été modifiée.');

            return $this->redirect($this->generateUrl('AFMPInvoiceBundle_show', array(
                'id' => $invoice->getId()
            )));
        }

        return $this->render('AFMPInvoiceBundle:Invoice:show.html.twig', array(
            'invoice'       => $invoice,
            'form'          => $form->createView(),
            'total_payment' => $totalPayment
        ));
    }

    /**
     * Add invoice line
     * @param Invoice $invoice
     * @ParamConverter("invoice", options={"mapping": {"id": "id"}, "repository_method": "findOneById"})
     * @return Redirect
     */
    public function addLineAction(Invoice $invoice)
    {
        $line = new InvoiceLine();
        $line->setOrder(count($invoice->getLines()) + 1);
        $line->setInvoice($invoice);
        $invoice->addLine($line);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($invoice);
        $entityManager->flush();

        return $this->redirect($this->generateUrl('AFMPInvoiceBundle_show', array(
            'id' => $invoice->getId()
        )));
    }

    /**
     * Remove invoice line
     * @param InvoiceLine $line 
     * @return Redirect
     */
    public function removeLineAction(InvoiceLine $line)
    {
        $invoice = $line->getInvoice();
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($line);
        $entityManager->flush();
        $total = $this->get('afmp.invoice_manager')->getTotalLines($invoice->getLines());
        $invoice->setAmount($total['ttc']);
        $entityManager->persist($invoice);
        $entityManager->flush();
        if ($invoice->getUrlpdf()) {
            $this->get('afmp.invoice_manager')->generate($invoice);
        }

        return $this->redirect($this->generateUrl('AFMPInvoiceBundle_show', array(
            'id' => $invoice->getId()
        )));
    }

    /**
     * Sort invoice line
     * @return Response
     */
    public function sortLinesAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $post = $this->getRequest()->request;
        foreach ($post->get('reflines') as $key => $refln) {
            $line = $entityManager->getRepository('AFMPInvoiceBundle:InvoiceLine')->findOneById($refln);
            if ($line) {
                $line->setOrder($key + 1);
                $entityManager->persist($line);
            }
        }
        $entityManager->flush();

        return new Response(1);
    }

    /**
     * Remove invoice in project
     * @param Invoice $invoice
     * @ParamConverter("invoice", options={"mapping": {"id": "id"}, "repository_method": "findOneById"})
     * @return Redirect
     */
    public function removeAction(Invoice $invoice)
    {
        if ($invoice->isRemovable()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($invoice);
            $entityManager->flush();
            $this->get('session')->getFlashBag()->set('message', 'La facture en projet a bien été supprimée.');

            return $this->redirect($this->generateUrl('AFMPInvoiceBundle_listing'));
        } 
        $this->get('session')->getFlashBag()->set('error', 'La facture n\'est pas supprimée car elle est déjà éditée ou des encaissements ont déjà été effectués.');
            
        return $this->redirect($this->generateUrl('AFMPInvoiceBundle_show', array(
            'id' => $invoice->getId()
        )));
    }

    /**
     * Generate invoice PDF
     * @param Invoice $invoice
     * @ParamConverter("invoice", options={"mapping": {"id": "id"}, "repository_method": "findOneById"})
     * @return Redirect
     */
    public function generateAction(Invoice $invoice)
    {
        if ($this->get('afmp.invoice_manager')->generate($invoice)) {
            $this->get('session')->getFlashBag()->set('message', 'Votre facture vien d\'être générée. Vous pouvez la télécharger.');
        } else {
            $this->get('session')->getFlashBag()->set('error', 'Pour confirmer et générer la facture, la facture doit être supérieur à 0€ et être rattachée à un client.');
        }

        $get = $this->getRequest()->query;
        if ($get->get('refsession')) {
            return $this->redirect($this->generateUrl('AFMPSchoolBundle_session_detail', array(
                'id' => $get->get('refsession')
            )));
        }

        return $this->redirect($this->generateUrl('AFMPInvoiceBundle_show', array(
            'id' => $invoice->getId()
        )));
    }

    /**
     * Display PDF
     * @param Invoice $invoice
     * @ParamConverter("invoice", options={"mapping": {"id": "id"}, "repository_method": "findOneById"})
     * @return Application/PDF
     */
    public function downloadAction(Invoice $invoice)
    {
        $url = $invoice->getUrlpdf();
        if ($url && file_exists($url)) {
            $response = new Response(file_get_contents($url));
            $response->headers->set('Content-Type', 'application/pdf');

            return $response;
        }

        throw $this->createNotFoundException();
    }

    /**
     * Download searched invoives
     * @return application/zip
     */
    public function downloadSearchAction()
    {
        $post = $this->getRequest()->request;
        $urls = array();
        // Securized tricks
        foreach ($post->get('files') as $file) {
            $basename = basename($file);
            $urls[] = 'uploads/invoices/'.$basename;
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
