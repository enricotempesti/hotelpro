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
     * @var string
     *
     * @ORM\Column(name="fotocamera", type="string", length=255)
     */
    private $fotocamera;

    /**
     * @var string
     *
     * @ORM\Column(name="fotocamera1", type="string", length=255)
     */
    private $fotocamera1;

    /**
     * @var string
     *
     * @ORM\Column(name="fotocamera2", type="string", length=255)
     */
    private $fotocamera2;
    
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
     * Set fotocamera
     *
     * @param string $fotocamera
     * @return camere
     */
    public function setFotocamera($fotocamera)
    {
        $this->fotocamera = $fotocamera;

        return $this;
    }

    /**
     * Get fotocamera
     *
     * @return string 
     */
    public function getFotocamera()
    {
        return $this->fotocamera;
    }

    /**
     * Set fotocamera1
     *
     * @param string $fotocamera1
     * @return camere
     */
    public function setFotocamera1($fotocamera1)
    {
        $this->fotocamera1 = $fotocamera1;

        return $this;
    }

    /**
     * Get fotocamera1
     *
     * @return string 
     */
    public function getFotocamera1()
    {
        return $this->fotocamera1;
    }

    /**
     * Set fotocamera2
     *
     * @param string $fotocamera2
     * @return camere
     */
    public function setFotocamera2($fotocamera2)
    {
        $this->fotocamera2 = $fotocamera2;

        return $this;
    }

    /**
     * Get fotocamera2
     *
     * @return string 
     */
    public function getFotocamera2()
    {
        return $this->fotocamera2;
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
