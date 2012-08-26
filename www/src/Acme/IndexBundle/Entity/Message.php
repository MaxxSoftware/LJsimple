<?php
namespace Acme\IndexBundle\Entity;
use Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle;

class Message
{
    protected $fname;
    protected $mname;
    protected $lname;
    protected $email;
    protected $bday;
    
    public function getFname()
    {
        return $this->fname;
    }
    public function setFname($fname)
    {
        $this->fname = $fname;
    }

    public function getMname()
    {
        return $this->mname;
    }
    public function setMname($mname)
    {
        $this->mname = $mname;
    }


    public function getlname()
    {
        return $this->lname;
    }
    public function setLname($lname)
    {
        $this->mname = $lname;
    }  
    
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }  

    public function getBday()
    {
        return $this->bday;
    }
    public function setbday(\DateTime $bday = null)
    {
        $this->bday = $bday;
    }
    
    public function getArray()
    {
        $array = array(
            'Last name'     => $this->getFname(),
            'First name'    => $this->getFname(),
            'Middle name'   => $this->getMname(),
            'email'         => $this->getEmail(),
            'Date of birth' => $this->getBday()->format('d.m.Y')
        );
        return $array;
    }
}