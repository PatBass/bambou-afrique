<?php
namespace AFMP\InvoiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Invoice
 *
 * @ORM\Table(name="INVOICE")
 * @ORM\Entity(repositoryClass="AFMP\InvoiceBundle\Repositories\InvoiceRepository")
 */
class Invoice
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
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="urlpdf", type="string", length=255, nullable=true)
     */
    private $urlpdf;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=30, nullable=true)
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="clientfirstname", type="string", length=255, nullable=true)
     */
    private $clientfirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="clientlastname", type="string", length=255, nullable=true)
     */
    private $clientlastname;

    /**
    * @var AFMP\ClientBundle\Entity\Address
    *
    * @ORM\ManyToOne(targetEntity="AFMP\ClientBundle\Entity\Address", cascade={"persist"})
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="refaddress", referencedColumnName="id")
    * })
    */
    private $clientaddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="invoicedate", type="date", nullable=true)
     */
    private $invoicedate;

    /**
     * @var integer
     *
     * @ORM\Column(name="completpayment", type="integer", nullable=false)
     */
    private $completpayment;

    /**
    * @var AFMP\ClientBundle\Entity\UserInfo
    *
    * @ORM\ManyToOne(targetEntity="AFMP\ClientBundle\Entity\UserInfo", inversedBy="invoices")
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="refclient", referencedColumnName="id")
    * })
    */
    private $client;

    /**
    * @var AFMP\FilingBundle\Entity\LicenceFile
    *
    * @ORM\ManyToOne(targetEntity="AFMP\FilingBundle\Entity\LicenceFile", inversedBy="invoices")
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="reffile", referencedColumnName="id")
    * })
    */
    private $licencefile;

    /**
     * @ORM\OneToMany(targetEntity="AFMP\InvoiceBundle\Entity\Payment", mappedBy="invoice", cascade={"persist", "remove"})
     * @ORM\OrderBy({ "paymentdate" = "DESC", "id" = "DESC" })
     */
    private $payments;

    /**
     * @ORM\OneToMany(targetEntity="AFMP\InvoiceBundle\Entity\InvoiceLine", mappedBy="invoice", cascade={"persist", "remove"})
     * @ORM\OrderBy({ "order" = "ASC" })
     */
    private $lines;

    /**
     * Constructeur
     */
    public function __construct()
    {
        $this->payments = new ArrayCollection();
        $this->lines = new ArrayCollection();
        $this->invoicedate = new \DateTime();
        $this->completpayment = 0;
    }

    /**
     * Check if invoice can be removable
     * @return boolean
     */
    public function isRemovable()
    {
        if ($this->getNumber() || count($this->getPayments()) > 0) {
            return false;
        }

        return true;
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
     * @return Invoice
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
     * Set licencefile
     *
     * @param \AFMP\FilingBundle\Entity\LicenceFile $licencefile
     * @return Invoice
     */
    public function setLicencefile(\AFMP\FilingBundle\Entity\LicenceFile $licencefile = null)
    {
        $this->licencefile = $licencefile;

        return $this;
    }

    /**
     * Get licencefile
     *
     * @return \AFMP\FilingBundle\Entity\LicenceFile 
     */
    public function getLicencefile()
    {
        return $this->licencefile;
    }

    /**
     * Add payments
     *
     * @param \AFMP\InvoiceBundle\Entity\Payment $payments
     * @return Invoice
     */
    public function addPayment(\AFMP\InvoiceBundle\Entity\Payment $payments)
    {
        $this->payments[] = $payments;

        return $this;
    }

    /**
     * Remove payments
     *
     * @param \AFMP\InvoiceBundle\Entity\Payment $payments
     */
    public function removePayment(\AFMP\InvoiceBundle\Entity\Payment $payments)
    {
        $this->payments->removeElement($payments);
    }

    /**
     * Get payments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * Add lines
     *
     * @param \AFMP\InvoiceBundle\Entity\InvoiceLine $lines
     * @return Invoice
     */
    public function addLine(\AFMP\InvoiceBundle\Entity\InvoiceLine $lines)
    {
        $this->lines[] = $lines;

        return $this;
    }

    /**
     * Remove lines
     *
     * @param \AFMP\InvoiceBundle\Entity\InvoiceLine $lines
     */
    public function removeLine(\AFMP\InvoiceBundle\Entity\InvoiceLine $lines)
    {
        $this->lines->removeElement($lines);
    }

    /**
     * Get lines
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLines()
    {
        return $this->lines;
    }

    /**
     * Set urlpdf
     *
     * @param string $urlpdf
     * @return Invoice
     */
    public function setUrlpdf($urlpdf)
    {
        $this->urlpdf = $urlpdf;

        return $this;
    }

    /**
     * Get urlpdf
     *
     * @return string 
     */
    public function getUrlpdf()
    {
        return $this->urlpdf;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Invoice
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set invoicedate
     *
     * @param \DateTime $invoicedate
     * @return Invoice
     */
    public function setInvoicedate($invoicedate)
    {
        $this->invoicedate = $invoicedate;

        return $this;
    }

    /**
     * Get invoicedate
     *
     * @return \DateTime 
     */
    public function getInvoicedate()
    {
        return $this->invoicedate;
    }

    /**
     * Set completpayment
     *
     * @param integer $completpayment
     * @return Invoice
     */
    public function setCompletpayment($completpayment)
    {
        $this->completpayment = $completpayment;

        return $this;
    }

    /**
     * Get completpayment
     *
     * @return integer 
     */
    public function getCompletpayment()
    {
        return $this->completpayment;
    }

    /**
     * Set number
     *
     * @param string $number
     * @return Invoice
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set user
     *
     * @param \AFMP\UserBundle\Entity\User $user
     * @return Invoice
     */
    public function setUser(\AFMP\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AFMP\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Invoice
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Invoice
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set address
     *
     * @param \AFMP\ClientBundle\Entity\Address $address
     * @return Invoice
     */
    public function setAddress(\AFMP\ClientBundle\Entity\Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \AFMP\ClientBundle\Entity\Address 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set client
     *
     * @param \AFMP\ClientBundle\Entity\UserInfo $client
     * @return Invoice
     */
    public function setClient(\AFMP\ClientBundle\Entity\UserInfo $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \AFMP\ClientBundle\Entity\UserInfo 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set clientfirstname
     *
     * @param string $clientfirstname
     * @return Invoice
     */
    public function setClientfirstname($clientfirstname)
    {
        $this->clientfirstname = $clientfirstname;

        return $this;
    }

    /**
     * Get clientfirstname
     *
     * @return string 
     */
    public function getClientfirstname()
    {
        return $this->clientfirstname;
    }

    /**
     * Set clientlastname
     *
     * @param string $clientlastname
     * @return Invoice
     */
    public function setClientlastname($clientlastname)
    {
        $this->clientlastname = $clientlastname;

        return $this;
    }

    /**
     * Get clientlastname
     *
     * @return string 
     */
    public function getClientlastname()
    {
        return $this->clientlastname;
    }

    /**
     * Set clientaddress
     *
     * @param \AFMP\ClientBundle\Entity\Address $clientaddress
     * @return Invoice
     */
    public function setClientaddress(\AFMP\ClientBundle\Entity\Address $clientaddress = null)
    {
        $this->clientaddress = $clientaddress;

        return $this;
    }

    /**
     * Get clientaddress
     *
     * @return \AFMP\ClientBundle\Entity\Address 
     */
    public function getClientaddress()
    {
        return $this->clientaddress;
    }
}
