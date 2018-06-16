<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * AccueilFes
 *
 * @Vich\Uploadable
 * @ORM\Table(name="accueil_fes")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\AccueilFesRepository")
 */
class AccueilFes
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
     * @ORM\Column(name="nomFesImage", type="string", length=255)
     */
    private $nomFesImage;

    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="nomFesImage")
     * @var File
     */
    private $fichierFesAccueil;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text", nullable=true)
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;


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
     * Set nomFesImage
     *
     * @param string $nomFesImage
     *
     * @return AccueilFes
     */
    public function setNomFesImage($nomFesImage)
    {
        $this->nomFesImage = $nomFesImage;

        return $this;
    }

    /**
     * Get nomFesImage
     *
     * @return string|null
     */
    public function getNomFesImage()
    {
        return $this->nomFesImage;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $fichierFesAccueil
     * @return AccueilFes
     * @throws \Exception
     */
    public function setFichierFesAccueil(File $fichierFesAccueil = null)
    {
        $this->fichierFesAccueil = $fichierFesAccueil;

        if ($fichierFesAccueil) {
            $this->updatedAt = new \DateTimeImmutable();
        }

        return $this;
    }

    /**
     * Get fichierFesAccueil
     *
     * @return File|null
     */
    public function getFichierFesAccueil()
    {
        return $this->fichierFesAccueil;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return AccueilFes
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return AccueilFes
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

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return AccueilFes
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
}

