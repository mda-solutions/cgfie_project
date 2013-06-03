<?php

namespace Cgfie\InscriptionsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * CgfieEntity
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Cgfie\InscriptionsBundle\Entity\CgfieEntityRepository")
 */
class CgfieEntity
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
     * @ORM\Column(name="acronym", type="string", length=50)
     * @Assert\NotBlank  
     */
    private $acronym;

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", length=100)
     * @Assert\NotBlank  
     */
    private $level;

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
     * @return CgfieEntity
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
     * Set acronym
     *
     * @param string $acronym
     * @return CgfieEntity
     */
    public function setAcronym($acronym)
    {
        $this->acronym = $acronym;
    
        return $this;
    }

    /**
     * Get acronym
     *
     * @return string 
     */
    public function getAcronym()
    {
        return $this->acronym;
    }

    /**
     * Set level
     *
     * @param string $level
     * @return CgfieEntity
     */
    public function setLevel($level)
    {
        $this->level = $level;
    
        return $this;
    }

    /**
     * Get level
     *
     * @return string 
     */
    public function getLevel()
    {
        return $this->level;
    }

    public function  __toString()
    {
        return sprintf("%s - %s", $this->getAcronym(), $this->getName());
    }

}
