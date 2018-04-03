<?php
namespace AFMP\InvoiceBundle\Form\Handler;

/**
 * Search process
 *
 * @author Mikael SERREAU <mikael@squareeyes.fr>
 */
class SearchHandler
{
    private $req;

    /**
     * Constructor
     * @param Request $request
     */
    public function __construct($request)
    {
        $this->req = $request;
    }

    /**
     * Check validity
     * @param Form $form
     * @return array
     */
    public function process($form)
    {
        if ($this->req->getMethod() == 'POST') {
            $form->bind($this->req);
            if ($form->isValid()) {
                $data = $form->getData();

                return $data;
            }
        }

        return false;
    }
}