<?php

namespace UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;
use UserBundle\Validator\Constraints as BambouAssert;
use JMS\Serializer\Annotation\Exclude;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var Address
     *
     * @ORM\OneToMany(targetEntity="Address", mappedBy="user", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     *
     *
     *
     */
    protected $addresses;

    /**
     * @ORM\OneToMany(targetEntity="MainBundle\Entity\Commande", mappedBy="idutilisateur", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    protected $commandes;

    /**
     * @var string
     *
     * @ORM\Column(name="maidenname", type="string", length=30, nullable=true)
     * @Assert\Length(
     *     min=3,
     *     max=30,
     *     minMessage="Votre nom de jeune fille est trop court.",
     *     maxMessage="Votre nom de jeune fille est trop long.",
     *     groups={"Profile"}
     * )
     */
    protected $maidenname;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=3, nullable=true)
     */
    protected $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=50, nullable=true)
     * @Assert\Length(
     *     min=3,
     *     max=50,
     *     minMessage="Votre prénom est trop court.",
     *     maxMessage="Votre prénom est trop long."
     * )
     */
    protected $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=50, nullable=true)
     * @Assert\Length(
     *     min=3,
     *     max=50,
     *     minMessage="Votre nom est trop court.",
     *     maxMessage="Votre nom est trop long."
     * )
     */
    protected $lastname;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date", nullable=true)
     * @Assert\NotBlank(message="Veuillez renseigner votre date de naissance.", groups={"Profile"})
     * @Assert\DateTime()
     */
    protected $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="birthcity", type="string", length=40, nullable=true)
     * @Assert\NotBlank(message="Veuillez renseigner votre ville de naissance.", groups={"Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=40,
     *     minMessage="Le nom de votre ville de naissance est trop court.",
     *     maxMessage="Le nom de votre ville de naissance est trop long.",
     *     groups={"Profile"}
     * )
     */
    protected $birthcity;

    /**
     * @var string
     *
     * @ORM\Column(name="birthzipcode", type="string", length=5, nullable=true)
     * @Assert\NotBlank(message="Veuillez renseigner le code postal de votre ville de naissance.", groups={"Profile"})
     * @Assert\Length(
     *     min=2,
     *     max=5,
     *     minMessage="Le code postal de votre ville de naissance est trop court.",
     *     maxMessage="Le code postal de votre ville de naissance est trop long.",
     *     groups={"Profile"}
     * )
     */
    protected $birthzipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="birthcountry", type="string", length=40, nullable=true)
     * @Assert\NotBlank(message="Veuillez renseigner votre pays de naissance.", groups={"Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=40,
     *     minMessage="Le nom de votre pays de naissance est trop court.",
     *     maxMessage="Le nom de votre pays de naissance est trop long.",
     *     groups={"Profile"}
     * )
     */
    protected $birthcountry;

    /**
     * @var string
     *
     * @ORM\Column(name="nationality", type="string", length=30, nullable=true)
     * @Assert\NotBlank(message="Veuillez renseigner votre nationalité.", groups={"Profile"})
     */
    protected $nationality;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=14, nullable=true)
     * @Assert\NotBlank(message="Veuillez renseigner votre numéro de téléphone.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=10,
     *     max=14,
     *     minMessage="Votre numéro de téléphone est trop court.",
     *     maxMessage="Votre numéro de téléphone est trop long.",
     *     groups={"Registration", "Profile"}
     * )
     * @BambouAssert\isPhoneNumber
     */
    protected $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="passwordUncrypted", type="string", length=255, nullable=true)
     */
    private $passwordUncrypted;

    /**
     * @var string
     *
     * @ORM\Column(name="debug", type="text", nullable=true)
     */
    protected $debug;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->commandes = new ArrayCollection();
        $this->addresses = new ArrayCollection();
    }

    /**
     * toString
     * @return String
     */
    public function __toString()
    {
        return (string) $this->id;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set passwordUncrypted
     *
     * @param string $passwordUncrypted
     *
     * @return User
     */
    public function setPasswordUncrypted($passwordUncrypted)
    {
        $this->passwordUncrypted = $passwordUncrypted;

        return $this;
    }

    /**
     * Get passwordUncrypted
     *
     * @return string
     */
    public function getPasswordUncrypted()
    {
        return $this->passwordUncrypted;
    }

    /**
     * Set debug
     *
     * @param string $debug
     *
     * @return User
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;

        return $this;
    }

    /**
     * Get debug
     *
     * @return string
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Set maidenname
     *
     * @param string $maidenname
     *
     * @return User
     */
    public function setMaidenname($maidenname)
    {
        $this->maidenname = $maidenname;

        return $this;
    }

    /**
     * Get maidenname
     *
     * @return string
     */
    public function getMaidenname()
    {
        return $this->maidenname;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
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
     *
     * @return User
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
     * Set birthday
     *
     * @param \DateTime $birthday
     *
     * @return User
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set birthcity
     *
     * @param string $birthcity
     *
     * @return User
     */
    public function setBirthcity($birthcity)
    {
        $this->birthcity = $birthcity;

        return $this;
    }

    /**
     * Get birthcity
     *
     * @return string
     */
    public function getBirthcity()
    {
        return $this->birthcity;
    }

    /**
     * Set birthzipcode
     *
     * @param string $birthzipcode
     *
     * @return User
     */
    public function setBirthzipcode($birthzipcode)
    {
        $this->birthzipcode = $birthzipcode;

        return $this;
    }

    /**
     * Get birthzipcode
     *
     * @return string
     */
    public function getBirthzipcode()
    {
        return $this->birthzipcode;
    }

    /**
     * Set birthcountry
     *
     * @param string $birthcountry
     *
     * @return User
     */
    public function setBirthcountry($birthcountry)
    {
        $this->birthcountry = $birthcountry;

        return $this;
    }

    /**
     * Get birthcountry
     *
     * @return string
     */
    public function getBirthcountry()
    {
        return $this->birthcountry;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     *
     * @return User
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set address
     *
     * @param \UserBundle\Entity\Address $address
     *
     * @return User
     */
    public function setAddress(\UserBundle\Entity\Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \UserBundle\Entity\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Add commande
     *
     * @param \MainBundle\Entity\Commande $commande
     *
     * @return User
     */
    public function addCommande(\MainBundle\Entity\Commande $commande)
    {
        $this->commandes[] = $commande;

        return $this;
    }

    /**
     * Remove commande
     *
     * @param \MainBundle\Entity\Commande $commande
     */
    public function removeCommande(\MainBundle\Entity\Commande $commande)
    {
        $this->commandes->removeElement($commande);
    }

    /**
     * Get commandes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommandes()
    {
        return $this->commandes;
    }

    /**
     * Add address
     *
     * @param \UserBundle\Entity\Address $address
     *
     * @return User
     */
    public function addAddress(\UserBundle\Entity\Address $address)
    {
        $this->addresses[] = $address;

        return $this;
    }

    /**
     * Remove address
     *
     * @param \UserBundle\Entity\Address $address
     */
    public function removeAddress(\UserBundle\Entity\Address $address)
    {
        $this->addresses->removeElement($address);
    }

    /**
     * Get addresses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAddresses()
    {
        return $this->addresses;
    }
}
