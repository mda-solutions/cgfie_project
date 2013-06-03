<?php

namespace Cgfie\InscriptionsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Inscription
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Inscription
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @ORM\OneToOne(targetEntity="Course")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     **/
     private $course;       

    /**
     * @ORM\OneToOne(targetEntity="CgfieEntity")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     **/
     private $cgfie_entity;       

    /**
     * @ORM\OneToOne(targetEntity="CgfieUsers")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     **/
     private $teacher;    

    /**
     * @var date
     *
     * @ORM\Column(name="begin_date", type="date")
     * @Assert\NotBlank     
     */
    private  $begin_date;

    /**
     * @var date
     *
     * @ORM\Column(name="end_date", type="date")
     * @Assert\NotBlank     
     */
    private $end_date;                  


    /**
     * Set begin_date
     *
     * @param \DateTime $beginDate
     * @return Inscription
     */
    public function setBeginDate($beginDate)
    {
        $this->begin_date = $beginDate;

        return $this;
    }

    /**
     * Get begin_date
     *
     * @return \DateTime 
     */
    public function getBeginDate()
    {
        return $this->begin_date;
    }

    /**
     * Set end_date
     *
     * @param \DateTime $endDate
     * @return Inscription
     */
    public function setEndDate($endDate)
    {
        $this->end_date = $endDate;

        return $this;
    }

    /**
     * Get end_date
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Set course
     *
     * @param \Cgfie\InscriptionsBundle\Entity\Course $course
     * @return Inscription
     */
    public function setCourse(\Cgfie\InscriptionsBundle\Entity\Course $course = null)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return \Cgfie\InscriptionsBundle\Entity\Course 
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set cgfie_entity
     *
     * @param \Cgfie\InscriptionsBundle\Entity\CgfieEntity $cgfieEntity
     * @return Inscription
     */
    public function setCgfieEntity(\Cgfie\InscriptionsBundle\Entity\CgfieEntity $cgfieEntity = null)
    {
        $this->cgfie_entity = $cgfieEntity;

        return $this;
    }

    /**
     * Get cgfie_entity
     *
     * @return \Cgfie\InscriptionsBundle\Entity\CgfieEntity 
     */
    public function getCgfieEntity()
    {
        return $this->cgfie_entity;
    }

    /**
     * Set teacher
     *
     * @param \Cgfie\InscriptionsBundle\Entity\CgfieUsers $teacher
     * @return Inscription
     */
    public function setTeacher(\Cgfie\InscriptionsBundle\Entity\CgfieUsers $teacher = null)
    {
        $this->teacher = $teacher;

        return $this;
    }

    /**
     * Get teacher
     *
     * @return \Cgfie\InscriptionsBundle\Entity\CgfieUsers 
     */
    public function getTeacher()
    {
        return $this->teacher;
    }


}
