<?php

namespace AFMP\InvoiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvoiceLine
 *
 * @ORM\Table(name="INVOICE_LINE")
 * @ORM\Entity
 */
class InvoiceLine
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var decimal
     *
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $amount;

    /**
     * @var decimal
     *
     * @ORM\Column(name="tax", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $tax;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=true)
     */
    private $libelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="lineorder", type="integer", nullable=false)
     */
    private $order;

    /**
     * @var Invoice
     *
     * @ORM\ManyToOne(targetEntity="Invoice", inversedBy="lines")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="refinvoice", referencedColumnName="id")
     * })
     */
    private $invoice;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->quantity = 1;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set amount
     *
     * @param string $amount
     * @return InvoiceLine
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set tax
     *
     * @param string $tax
     * @return InvoiceLine
     */
    public function setTax($tax)
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * Get tax
     *
     * @return string 
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Set invoice
     *
     * @param \AFMP\InvoiceBundle\Entity\Invoice $invoice
     * @return InvoiceLine
     */
    public function setInvoice(\AFMP\InvoiceBundle\Entity\Invoice $invoice = null)
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Get invoice
     *
     * @return \AFMP\InvoiceBundle\Entity\Invoice 
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return InvoiceLine
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set order
     *
     * @param integer $order
     * @return InvoiceLine
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return integer 
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return InvoiceLine
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}
