<?php

namespace Cgfie\InscriptionsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * InscriptionUsers
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class InscriptionUsers
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
     * @ORM\OneToOne(targetEntity="Inscription")
     * @ORM\JoinColumn(name="inscription_id", referencedColumnName="id")
     **/
     private $inscription;       

    /**
     * @ORM\OneToOne(targetEntity="CgfieUsers")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     **/
     private $user;       

    /**
     * @var integer
     *
     * @ORM\Column(name="assiduity", type="integer")
     * @Assert\NotBlank 
     */
    private $assiduity;          

    /**
     * @var integer
     *
     * @ORM\Column(name="accreditation", type="integer")
     * @Assert\NotBlank 
     */
    private $accreditation;              

    /**
     * @var integer
     *
     * @ORM\Column(name="qualification", type="integer")
     * @Assert\NotBlank 
     */
    private $qualification;                  




    /**
     * Set assiduity
     *
     * @param integer $assiduity
     * @return InscriptionUsers
     */
    public function setAssiduity($assiduity)
    {
        $this->assiduity = $assiduity;

        return $this;
    }

    /**
     * Get assiduity
     *
     * @return integer 
     */
    public function getAssiduity()
    {
        return $this->assiduity;
    }

    /**
     * Set accreditation
     *
     * @param integer $accreditation
     * @return InscriptionUsers
     */
    public function setAccreditation($accreditation)
    {
        $this->accreditation = $accreditation;

        return $this;
    }

    /**
     * Get accreditation
     *
     * @return integer 
     */
    public function getAccreditation()
    {
        return $this->accreditation;
    }

    /**
     * Set qualification
     *
     * @param integer $qualification
     * @return InscriptionUsers
     */
    public function setQualification($qualification)
    {
        $this->qualification = $qualification;

        return $this;
    }

    /**
     * Get qualification
     *
     * @return integer 
     */
    public function getQualification()
    {
        return $this->qualification;
    }

    /**
     * Set inscription
     *
     * @param \Cgfie\InscriptionsBundle\Entity\Inscription $inscription
     * @return InscriptionUsers
     */
    public function setInscription(\Cgfie\InscriptionsBundle\Entity\Inscription $inscription = null)
    {
        $this->inscription = $inscription;

        return $this;
    }

    /**
     * Get inscription
     *
     * @return \Cgfie\InscriptionsBundle\Entity\Inscription 
     */
    public function getInscription()
    {
        return $this->inscription;
    }

    /**
     * Set user
     *
     * @param \Cgfie\InscriptionsBundle\Entity\CgfieUsers $user
     * @return InscriptionUsers
     */
    public function setUser(\Cgfie\InscriptionsBundle\Entity\CgfieUsers $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Cgfie\InscriptionsBundle\Entity\CgfieUsers 
     */
    public function getUser()
    {
        return $this->user;
    }
}
