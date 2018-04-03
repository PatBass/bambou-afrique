<?php
namespace AFMP\InvoiceBundle\Form\Handler;

/**
 * Form handler
 */
class PaymentHandler
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
     * @return Payment
     */
    public function process($form)
    {
        if ($this->req->getMethod() == 'POST') {
            $form->bind($this->req);
            $data = $this->req->request->get('afmp_invoicebundle_paymenttype');
            if ($form->isValid() && $data['type']) {
                return $this->onSuccess($form->getData(), $data['type']); 
            }
        }

        return false;
    }
    
    /**
     * Persist entity
     * @param Payment $data
     * @param string  $type
     * @return Payment
     */
    protected function onSuccess($data, $type)
    {
        $data->setCash(0);
        $data->setCheck(0);
        $data->setCreditcard(0);
        $data->setBankwire(0);

        switch ($type) {
            case 'cash':
                $data->setCash(1);
                break;
            case 'check':
                $data->setCheck(1);
                break;
            case 'creditcard':
                $data->setCreditcard(1);
                break;
            case 'bankwire':
                $data->setBankwire(1);
                break;
        }

        $this->entityManager->persist($data);
        $this->entityManager->flush();
        $this->invoiceManager->toggleCompletPayment($data->getInvoice());

        return $data;
    }
}