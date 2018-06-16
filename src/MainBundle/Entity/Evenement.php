<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Evenement
 *
 * @Vich\Uploadable
 * @ORM\Table(name="evenement")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\EvenementRepository")
 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomImageEvenement", type="string", length=255)
     */
    private $nomImageEvenement;

    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="nomImageEvenement")
     * @var File
     */
    private $fichierEvenement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateModif", type="datetime", nullable=true)
     */
    private $dateModif;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text", nullable=true)
     */
    private $texte;


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
     * Set nomImageEvenement
     *
     * @param string $nomImageEvenement
     *
     * @return Evenement
     */
    public function setNomImageEvenement($nomImageEvenement)
    {
        $this->nomImageEvenement = $nomImageEvenement;

        return $this;
    }

    /**
     * Get nomImageEvenement
     *
     * @return string
     */
    public function getNomImageEvenement()
    {
        return $this->nomImageEvenement;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $fichierEvenement
     * @return Evenement
     * @throws \Exception
     */
    public function setFichierEvenement(File $fichierEvenement = null)
    {
        $this->fichierEvenement = $fichierEvenement;

        if ($fichierEvenement) {
            $this->dateModif = new \DateTimeImmutable();
        }

        return $this;
    }

    /**
     * Get fichierEvenement
     *
     * @return string|null
     */
    public function getFichierEvenement()
    {
        return $this->fichierEvenement;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Evenement
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set dateModif
     *
     * @param \DateTime $dateModif
     *
     * @return Evenement
     */
    public function setDateModif($dateModif)
    {
        $this->dateModif = $dateModif;

        return $this;
    }

    /**
     * Get dateModif
     *
     * @return \DateTime
     */
    public function getDateModif()
    {
        return $this->dateModif;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Evenement
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return Evenement
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }
}

