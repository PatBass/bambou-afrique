<?php
namespace AFMP\InvoiceBundle\Services;

use AFMP\InvoiceBundle\Entity\Invoice;
use AFMP\InvoiceBundle\Entity\InvoiceLine;
use AFMP\LicenceBundle\Entity\Licence;

/**
 * Invoice manager
 *
 * @author Mikael SERREAU <mikael@squareeyes.fr>
 */
class InvoiceManager
{
    private $entityManager;
    private $twig;
    private $mailer;

    /**
     * Constructor
     * @param EntityManager  $entityManager
     * @param Twig           $twig
     * @param MailingService $mailer
     */
    public function __construct($entityManager, $twig, $mailer)
    {
        $this->entityManager = $entityManager;
        $this->twig = $twig;
        $this->mailer = $mailer;
    }

    /**
     * Create draft invoice for filing
     * @param LicenceFile $licencefile
     * @return LicenceFile with invoice
     */
    public function createDraftInvoiceForFiling($licencefile)
    {
        if (count($licencefile->getInvoices()) == 0) {
            $licence = $licencefile->getLicence();
            $invoice = new Invoice();
            foreach ($licence->getLicenceproducts() as $key => $licenceProduct) {
                $product = $licenceProduct->getProduct();
                $invoiceline = new InvoiceLine();
                $invoiceline->setAmount($product->getPrice());
                $invoiceline->setTax($product->getTax());
                $invoiceline->setLibelle($product->getTitle());
                $invoiceline->setOrder($key);
                $invoiceline->setQuantity(1);
                $invoiceline->setInvoice($invoice);
                $invoice->addLine($invoiceline);
            }
            $total = $this->getTotalLines($invoice->getLines());
            $invoice->setAmount($total['ttc']);
            $invoice->setClient($licencefile->getCustomer());
            $invoice->setLicencefile($licencefile);
            $licencefile->addInvoice($invoice);

            $this->entityManager->persist($licencefile);
            $this->entityManager->flush();
        }

        return $licencefile;
    }

    /**
     * Get sum of amount
     * @param ArrayCollection $invoices
     * @return float
     */
    public function getTotal($invoices)
    {
        $total = 0;
        foreach ($invoices as $invoice) {
            $total += $invoice->getAmount();
        }

        return $total;
    }

    /**
     * Get num of next invoice
     * @return int
     */
    public function getNextNumber()
    {
        $total = $this->entityManager->getRepository('AFMPInvoiceBundle:Invoice')->countTotalInvoices();
        $total++;

        return $total;
    }

    /**
     * Get total for invoice lines
     * @param ArrayCollection $lines
     * @param boolean         $product
     * @return array
     */
    public function getTotalLines($lines, $product = false)
    {
        $total = array('ht' => 0, 'ttc' => 0, 'tva' => 0);
        foreach ($lines as $line) {
            $ttht = $product ? $line->getPrice() : $line->getAmount() * $line->getQuantity();
            $ttc = round($ttht + ($ttht * ($line->getTax() / 100)), 2);
            $total['ht'] += $ttht;
            $total['tva'] += round(($ttht * ($line->getTax() / 100)), 2);
            $total['ttc'] += $ttc;
        }

        return $total;
    }

    /**
     * Get total payment for invoice
     * @param Invoice $invoice
     * @return float
     */
    public function getTotalPayment(Invoice $invoice)
    {
        $total = 0;
        foreach ($invoice->getPayments() as $payment) {
            $total += $payment->getAmount();
        }

        return $total;
    }

    /**
     * Generate invoice pdf
     * @param Invoice $invoice
     * @return string url
     */
    public function generate(Invoice $invoice)
    {
        if ($invoice->getAmount() == 0 || !is_object($invoice->getClient())) {
            return false;
        }

        if (!$invoice->getNumber()) {
            $number = $this->entityManager->getRepository('AFMPInvoiceBundle:Invoice')->countTotalInvoices() + 1;
            $nbZero = 5 - strlen($number);
            for ($zero = 1; $zero <= $nbZero; $zero++) { 
                $number = '0'.$number;
            }
            $invoice->setNumber($number);
        } else {
            $number = $invoice->getNumber();
        }
        $invoice->setInvoicedate(new \DateTime());

        ob_start();
        $url = 'uploads/invoices/AFMP'.$number.'.pdf';
        $content = $this->twig->render('AFMPInvoiceBundle:PDF:invoice.pdf.twig', array(
            'invoice' => $invoice,
            'total'   => $this->getTotalLines($invoice->getLines())
        ));
        $html2pdf = new \AFMP\InvoiceBundle\Services\HTML2PDF('P', 'A4', 'fr', true, 'UTF-8', array(10, 3, 10, 0));
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($content);
        $html2pdf->Output($url, "F");

        $invoice->setUrlpdf($url);
        $this->entityManager->persist($invoice);
        $this->entityManager->flush();
        if (count($invoice->getClient()->getUsers()) > 0 || $invoice->getLicencefile()->getLicence()->getCode() =='PERMIS_ALLEGE')  {
            $this->mailer->sendInvoiceEditionMail($invoice);
        }

        return true;
    }

    /**
     * Generate devis PDF
     * @param Licence $licence
     * @return PDF
     */
    public function getDevis($licence)
    {
        ob_start();
        $lines = array();
        foreach ($licence->getLicenceproducts() as $lp) {
            $lines[] = $lp->getProduct();
        }
        $content = $this->twig->render('AFMPInvoiceBundle:PDF:devis.pdf.twig', array(
            'licence' => $licence,
            'total'   => $this->getTotalLines($lines, true)
        ));
        $html2pdf = new \AFMP\InvoiceBundle\Services\HTML2PDF('P', 'A4', 'fr', true, 'UTF-8', array(10, 3, 10, 0));
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($content);

        return $html2pdf->Output();
    }

    /**
     * Toggle status complete payment for invoice
     * @param Invoice $invoice
     * @return Invoice
     */
    public function toggleCompletPayment($invoice)
    {
        $this->entityManager->refresh($invoice);
        $totalPayments = $this->getTotalPayment($invoice);
        if ($totalPayments >= $invoice->getAmount()) {
            $invoice->setCompletpayment(1);
        } else {
            $invoice->setCompletpayment(0);
        }
        $this->entityManager->persist($invoice);
        $this->entityManager->flush();

        return $invoice;
    }
}