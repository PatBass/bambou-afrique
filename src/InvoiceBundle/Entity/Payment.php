<?php
namespace AFMP\InvoiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Payment
 *
 * @ORM\Table(name="PAYMENT")
 * @ORM\Entity(repositoryClass="AFMP\InvoiceBundle\Repositories\PaymentRepository")
 */
class Payment
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
     * @var \DateTime
     *
     * @ORM\Column(name="paymentdate", type="date", nullable=false)
     */
    private $paymentdate;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="identifier", type="string", length=255, nullable=true)
     */
    private $identifier;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cash", type="boolean", nullable=true)
     */
    private $cash;

    /**
     * @var boolean
     *
     * @ORM\Column(name="invoicecheck", type="boolean", nullable=true)
     */
    private $check;

    /**
     * @var boolean
     *
     * @ORM\Column(name="creditcard", type="boolean", nullable=true)
     */
    private $creditcard;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bankwire", type="boolean", nullable=true)
     */
    private $bankwire;

    /**
    * @var Invoice
    *
    * @ORM\ManyToOne(targetEntity="Invoice", inversedBy="payments")
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
        $this->paymentdate = new \DateTime();
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
     * @return Payment
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
     * Set identifier
     *
     * @param string $identifier
     * @return Payment
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;

        return $this;
    }

    /**
     * Get identifier
     *
     * @return string 
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Set cash
     *
     * @param boolean $cash
     * @return Payment
     */
    public function setCash($cash)
    {
        $this->cash = $cash;

        return $this;
    }

    /**
     * Get cash
     *
     * @return boolean 
     */
    public function getCash()
    {
        return $this->cash;
    }

    /**
     * Set check
     *
     * @param boolean $check
     * @return Payment
     */
    public function setCheck($check)
    {
        $this->check = $check;

        return $this;
    }

    /**
     * Get check
     *
     * @return boolean 
     */
    public function getCheck()
    {
        return $this->check;
    }

    /**
     * Set creditcard
     *
     * @param boolean $creditcard
     * @return Payment
     */
    public function setCreditcard($creditcard)
    {
        $this->creditcard = $creditcard;

        return $this;
    }

    /**
     * Get creditcard
     *
     * @return boolean 
     */
    public function getCreditcard()
    {
        return $this->creditcard;
    }

    /**
     * Set bankwire
     *
     * @param boolean $bankwire
     * @return Payment
     */
    public function setBankwire($bankwire)
    {
        $this->bankwire = $bankwire;

        return $this;
    }

    /**
     * Get bankwire
     *
     * @return boolean 
     */
    public function getBankwire()
    {
        return $this->bankwire;
    }

    /**
     * Set invoice
     *
     * @param \AFMP\InvoiceBundle\Entity\Invoice $invoice
     * @return Payment
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
     * Set paymentdate
     *
     * @param \DateTime $paymentdate
     * @return Payment
     */
    public function setPaymentdate($paymentdate)
    {
        $this->paymentdate = $paymentdate;

        return $this;
    }

    /**
     * Get paymentdate
     *
     * @return \DateTime 
     */
    public function getPaymentdate()
    {
        return $this->paymentdate;
    }
}
