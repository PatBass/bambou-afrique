<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * AccueilCasa
 *
 * @Vich\Uploadable
 * @ORM\Table(name="accueil_casa")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\AccueilCasaRepository")
 */
class AccueilCasa
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
     * @ORM\Column(name="nomCasaImage", type="string", length=255)
     */
    private $nomCasaImage;

    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="nomCasaImage")
     * @var File
     */
    private $fichierCasaAccueil;

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
     * Set nomCasaImage
     *
     * @param string $nomCasaImage
     *
     * @return AccueilCasa
     */
    public function setNomCasaImage($nomCasaImage)
    {
        $this->nomCasaImage = $nomCasaImage;

        return $this;
    }

    /**
     * Get nomCasaImage
     *
     * @return string|null
     */
    public function getNomCasaImage()
    {
        return $this->nomCasaImage;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $fichierCasaAccueil
     * @return AccueilCasa
     * @throws \Exception
     */
    public function setFichierCasaAccueil(File $fichierCasaAccueil = null)
    {
        $this->fichierCasaAccueil = $fichierCasaAccueil;

        if ($fichierCasaAccueil) {
            $this->updatedAt = new \DateTimeImmutable();
        }

        return $this;
    }

    /**
     * Get fichierCasaAccueil
     *
     * @return File|null
     */
    public function getFichierCasaAccueil()
    {
        return $this->fichierCasaAccueil;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return AccueilCasa
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
     * @return AccueilCasa
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
     * @return AccueilCasa
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
