<?php

namespace Cgfie\InscriptionsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Course
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Course
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     * @Assert\NotBlank 
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="mode", type="string", length=50)
     * @Assert\NotBlank 
     */
    private $mode;

    /**
     * @var string
     *
     * @ORM\Column(name="cur", type="string", length=100)
     * @Assert\NotBlank 
     */
    private $cur;

    /**
     * @var integer
     *
     * @ORM\Column(name="hours", type="integer")
     * @Assert\NotBlank 
     */
    private $hours;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100)
     * @Assert\NotBlank 
     */
    private $type;


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
     * Set name
     *
     * @param string $name
     * @return Course
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set mode
     *
     * @param string $mode
     * @return Course
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    
        return $this;
    }

    /**
     * Get mode
     *
     * @return string 
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Set cur
     *
     * @param string $cur
     * @return Course
     */
    public function setCur($cur)
    {
        $this->cur = $cur;
    
        return $this;
    }

    /**
     * Get cur
     *
     * @return string 
     */
    public function getCur()
    {
        return $this->cur;
    }

    /**
     * Set hours
     *
     * @param integer $hours
     * @return Course
     */
    public function setHours($hours)
    {
        $this->hours = $hours;
    
        return $this;
    }

    /**
     * Get hours
     *
     * @return integer 
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Course
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get hours
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }    

    public function __toString()
    {
        return ($this->getName() == null) ? '' : $this->getName();
    }
}
