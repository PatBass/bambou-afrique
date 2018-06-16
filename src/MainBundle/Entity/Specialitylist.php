<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Specialitylist
 *
 * @Vich\Uploadable
 * @ORM\Table(name="specialitylist")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\SpecialitylistRepository")
 */
class Specialitylist
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="specialitylistName")
     * @var File
     */
    private $specialitylistFile;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $specialitylistName;

    /**
     * @var Image
     *
     * @ORM\OneToOne(targetEntity="MainBundle\Entity\Image", cascade={"persist"})
     */
    private $image;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
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
     * Set title
     *
     * @param string $title
     *
     * @return Specialitylist
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
     * Set image
     *
     * @param \MainBundle\Entity\Image $image
     *
     * @return Specialitylist
     */
    public function setImage(\MainBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \MainBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $specialitylist
     * @return Specialitylist
     * @throws \Exception
     */
    public function setSpecialitylistFile(File $specialitylist = null)
    {
        $this->specialitylistFile = $specialitylist;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($specialitylist) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTimeImmutable();
        }

        return $this;
    }

    /**
     * @return File|null
     */
    public function getSpecialitylistFile()
    {
        return $this->specialitylistFile;
    }

    /**
     * @param string $specialitylistName
     * @return Specialitylist
     */
    public function setSpecialitylistName($specialitylistName)
    {
        $this->specialitylistName = $specialitylistName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSpecialitylistName()
    {
        return $this->specialitylistName;
    }
}
