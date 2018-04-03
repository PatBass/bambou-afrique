<?php
namespace AFMP\InvoiceBundle\Form\Handler;

/**
 * Form handler
 */
class InvoiceHandler
{
    private $req;
    private $entityManager;
    private $invoiceManager;

    /**
     * Constructor
     * @param Request        $request
     * @param EntityManager  $entityManager
     * @param InvoiceManager $invoiceManager
     */
    public function __construct($request, $entityManager, $invoiceManager)
    {
        $this->req = $request;
        $this->entityManager = $entityManager;
        $this->invoiceManager = $invoiceManager;
    }

    /**
     * Check form validity
     * @param Form $form
     * @return Invoice
     */
    public function process($form)
    {
        if ($this->req->getMethod() == 'POST') {
            $form->bind($this->req);
            if ($form->isValid()) {
                return $this->onSuccess($form->getData()); 
            }
        }

        return false;
    }
    
    /**
     * Persist entity
     * @param Invoice $data
     * @return Invoice
     */
    protected function onSuccess($data)
    {
        // Convert TTC <=> HT
        foreach ($data->getLines() as $ln) {
            $ht = round($ln->getAmount() / (1 + ($ln->getTax() / 100)), 2);
            $ln->setAmount($ht);
        }

        // Add total TTC to invoice entity
        $total = $this->invoiceManager->getTotalLines($data->getLines());
        $data->setAmount($total['ttc']);
        $this->entityManager->persist($data);
        $this->entityManager->flush();

        if ($data->getUrlpdf()) {
            $this->invoiceManager->generate($data);
        }

        return $data;
    }
}