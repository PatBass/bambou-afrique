<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Specialitylist
 *
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
     * @var Image
     *
     * @ORM\OneToOne(targetEntity="MainBundle\Entity\Image", cascade={"persist"})
     */
    private $image;


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
}
