<?php

namespace Cgfie\InscriptionsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * CgfieUsers
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Cgfie\InscriptionsBundle\Entity\CgfieUsersRepository")
 */
class CgfieUsers
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
     * @ORM\Column(name="lastname", type="string", length=100)
     * @Assert\NotBlank     
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname2", type="string", length=100)
     * @Assert\NotBlank     
     */
    private $lastname2;

    /**
     * @var string
     *
     * @ORM\Column(name="employee_number", type="string", length=100)
     * @Assert\NotBlank     
     */
    private $employee_number;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     * @Assert\Email
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="email_ipn", type="string", length=100)
     * @Assert\NotBlank
     * @Assert\Email
     */
    private $email_ipn;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=10)
     * @Assert\NotBlank     
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", length=50)
     * @Assert\NotBlank     
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=10)
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
     * @return CgfieUsers
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
     * Set lastname
     *
     * @param string $lastname
     * @return CgfieUsers
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    
        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set lastname2
     *
     * @param string $lastname2
     * @return CgfieUsers
     */
    public function setLastname2($lastname2)
    {
        $this->lastname2 = $lastname2;
    
        return $this;
    }

    /**
     * Get lastname2
     *
     * @return string 
     */
    public function getLastname2()
    {
        return $this->lastname2;
    }

    /**
     * Set employee_number
     *
     * @param string $employeeNumber
     * @return CgfieUsers
     */
    public function setEmployeeNumber($employeeNumber)
    {
        $this->employee_number = $employeeNumber;
    
        return $this;
    }

    /**
     * Get employee_number
     *
     * @return \int 
     */
    public function getEmployeeNumber()
    {
        return $this->employee_number;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return CgfieUsers
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set email_ipn
     *
     * @param string $emailIpn
     * @return CgfieUsers
     */
    public function setEmailIpn($emailIpn)
    {
        $this->email_ipn = $emailIpn;
    
        return $this;
    }

    /**
     * Get email_ipn
     *
     * @return string 
     */
    public function getEmailIpn()
    {
        return $this->email_ipn;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return CgfieUsers
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    
        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set level
     *
     * @param string $level
     * @return CgfieUsers
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

    /**
     * Set type
     *
     * @param string $type
     * @return CgfieUsers
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
}
