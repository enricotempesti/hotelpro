<?php

namespace Hotel\Bundle\RoomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\MediaBundle\Model\MediaInterface;

/**
 * camere
 *
 * @ORM\Table(name="camere")
 * @ORM\Entity(repositoryClass="Hotel\Bundle\RoomsBundle\Entity\camereRepository")
 */
class camere
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="numerocamera", type="integer")
     */
    private $numerocamera;

    /**
     * @var string
     *
     * @ORM\Column(name="tipocamera", type="string", length=255)
     */
    private $tipocamera;

    /**
     * @var \Application\Sonata\MediaBundle\Entity\Media
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"}, fetch="LAZY")
     */
    protected $media1;

    /**
     * @var \Application\Sonata\MediaBundle\Entity\Media
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"}, fetch="LAZY")
     */
    protected $media2;

    /**
     * @var \Application\Sonata\MediaBundle\Entity\Media
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"}, fetch="LAZY")
     */
    protected $media3;
    
    /**
     * @var \Application\Sonata\MediaBundle\Entity\Media
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"}, fetch="LAZY")
     */
    protected $media;


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
     * Set numerocamera
     *
     * @param integer $numerocamera
     * @return camere
     */
    public function setNumerocamera($numerocamera)
    {
        $this->numerocamera = $numerocamera;

        return $this;
    }

    /**
     * Get numerocamera
     *
     * @return integer 
     */
    public function getNumerocamera()
    {
        return $this->numerocamera;
    }

    /**
     * Set tipocamera
     *
     * @param string $tipocamera
     * @return camere
     */
    public function setTipocamera($tipocamera)
    {
        $this->tipocamera = $tipocamera;

        return $this;
    }

    /**
     * Get tipocamera
     *
     * @return string 
     */
    public function getTipocamera()
    {
        return $this->tipocamera;
    }

    /**
     * @param MediaInterface $media1
     */
    public function setMedia1(MediaInterface $media1)
    {
        $this->media1 = $media1;
    }

    /**
     * @return MediaInterface
     */
    public function getMedia1()
    {
        return $this->media1;
    }

    /**
     * @param MediaInterface $media2
     */
    public function setMedia2(MediaInterface $media2)
    {
        $this->media2 = $media2;
    }

    /**
     * @return MediaInterface
     */
    public function getMedia2()
    {
        return $this->media2;
    }
    
        /**
     * @param MediaInterface $media3
     */
    public function setMedia3(MediaInterface $media3)
    {
        $this->media3 = $media3;
    }

    /**
     * @return MediaInterface
     */
    public function getMedia3()
    {
        return $this->media3;
    }
    
    /**
     * @param MediaInterface $media
     */
    public function setMedia(MediaInterface $media)
    {
        $this->media = $media;
    }

    /**
     * @return MediaInterface
     */
    public function getMedia()
    {
        return $this->media;
    }
}
