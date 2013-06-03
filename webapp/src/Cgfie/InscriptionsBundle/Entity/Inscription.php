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
     * @ORM\ManyToOne(targetEntity="Course")
     * @ORM\JoinColumn(name="course_id", referencedColumnName="id", nullable = false)
     **/
     private $course;       

    /**
     * @ORM\ManyToOne(targetEntity="CgfieEntity")
     * @ORM\JoinColumn(name="entity_id", referencedColumnName="id", nullable = false)
     **/
     private $cgfie_entity;       

    /**
     * @ORM\ManyToOne(targetEntity="CgfieUsers")
     * @ORM\JoinColumn(name="teacher_id", referencedColumnName="id", nullable = false)
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
     * @var array users
     * @ORM\OneToMany(targetEntity="InscriptionUsers", mappedBy = "Inscription", cascade={"all"})
     */
    protected $users;    


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


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add users
     *
     * @param \Cgfie\InscriptionsBundle\Entity\InscriptionUsers $users
     * @return Inscription
     */
    public function addUser(\Cgfie\InscriptionsBundle\Entity\InscriptionUsers $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \Cgfie\InscriptionsBundle\Entity\InscriptionUsers $users
     */
    public function removeUser(\Cgfie\InscriptionsBundle\Entity\InscriptionUsers $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
}
