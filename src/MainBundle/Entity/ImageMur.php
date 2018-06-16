<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * ImageMur
 *
 * @Vich\Uploadable
 * @ORM\Table(name="image_mur")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\ImageMurRepository")
 */
class ImageMur
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
     * @ORM\Column(name="nomImageMur", type="string", length=255)
     */
    private $nomImageMur;

    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="nomImageMur")
     * @var File
     */
    private $fichierImageMur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime", nullable=true)
     */
    private $updatedAt;


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
     * Set nomImageMur
     *
     * @param string $nomImageMur
     *
     * @return ImageMur
     */
    public function setNomImageMur($nomImageMur)
    {
        $this->nomImageMur = $nomImageMur;

        return $this;
    }

    /**
     * Get nomImageMur
     *
     * @return string|null
     */
    public function getNomImageMur()
    {
        return $this->nomImageMur;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $fichierImageMur
     * @return ImageMur
     * @throws \Exception
     */
    public function setFichierImageMur(File $fichierImageMur = null)
    {
        $this->fichierImageMur = $fichierImageMur;

        if ($fichierImageMur) {
            $this->updatedAt = new \DateTimeImmutable();
        }

        return $this;
    }

    /**
     * Get fichierImageMur
     *
     * @return File|null
     */
    public function getFichierImageMur()
    {
        return $this->fichierImageMur;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return ImageMur
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
}
