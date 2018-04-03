<?php
namespace AFMP\InvoiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use AFMP\InvoiceBundle\Entity\Invoice;
use AFMP\InvoiceBundle\Entity\Payment;
use AFMP\InvoiceBundle\Form\Type\PaymentType;

/**
 * Payment controller
 *
 * @author Mikael SERREAU <mikael@squareeyes.fr>
 */
class PaymentController extends Controller
{
    /**
     * Display and add payment for invoice
     * @param Invoice $invoice
     * @ParamConverter("invoice", options={"mapping": {"id": "id"}, "repository_method": "findOneById"})
     * @return Response
     */
    public function displayInvoicePaymentAction(Invoice $invoice)
    {
        $totalPayment = $this->get('afmp.invoice_manager')->getTotalPayment($invoice);
        $payment = new Payment();
        $payment->setInvoice($invoice);
        $form = $this->get('form.factory')->create(new PaymentType(), $payment);
        if ($this->get('afmpinvoice.payment.form.handler')->process($form)) {
            $this->get('session')->getFlashBag()->set('message', 'L\'encaissement a bien été ajouté.');

            return $this->redirect($this->generateUrl('AFMPInvoiceBundle_payment_show', array(
                'id' => $invoice->getId()
            )));
        }

        return $this->render('AFMPInvoiceBundle:Payment:show.html.twig', array(
            'invoice'       => $invoice,
            'total_payment' => $totalPayment,
            'form'          => $form->createView()
        ));
    }

    /**
     * Remove payment
     * @param Payment $payment
     * @return Response
     */
    public function removeAction(Payment $payment)
    {
        $invoice = $payment->getInvoice();
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($payment);
        $entityManager->flush();

        $this->get('afmp.invoice_manager')->toggleCompletPayment($invoice);

        if ($redirect = $this->get('request')->query->get('redirect')) {
            return $this->redirect($redirect);
        }

        return $this->redirect($this->generateUrl('AFMPInvoiceBundle_payment_show', array(
            'id' => $invoice->getId()
        )));
    }
}