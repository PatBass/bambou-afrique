<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Astuce
 *
 * @Vich\Uploadable
 * @ORM\Table(name="astuce")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\AstuceRepository")
 */
class Astuce
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
     * @ORM\Column(name="nomImageAstuce", type="string", length=255, nullable=true)
     */
    private $nomImageAstuce;

    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="nomImageAstuce")
     * @var File
     */
    private $fichierImageAstuce;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
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
     * Set nomImageAstuce
     *
     * @param string $nomImageAstuce
     *
     * @return Astuce
     */
    public function setNomImageAstuce($nomImageAstuce)
    {
        $this->nomImageAstuce = $nomImageAstuce;

        return $this;
    }

    /**
     * Get nomImageAstuce
     *
     * @return string|null
     */
    public function getNomImageAstuce()
    {
        return $this->nomImageAstuce;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $fichierImageAstuce
     * @return Astuce
     * @throws \Exception
     */
    public function setFichierImageAstuce(File $fichierImageAstuce = null)
    {
        $this->fichierImageAstuce = $fichierImageAstuce;

        if ($fichierImageAstuce) {
            $this->updatedAt = new \DateTimeImmutable();
        }

        return $this;
    }

    /**
     * Get fichierImageAstuce
     *
     * @return string
     */
    public function getFichierImageAstuce()
    {
        return $this->fichierImageAstuce;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Astuce
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
     * @return Astuce
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

