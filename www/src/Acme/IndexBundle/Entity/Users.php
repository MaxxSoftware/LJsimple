<?php
namespace Acme\IndexBundle\Entity;
use Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle;
use Doctrine\ORM\Mapping as ORM;  


/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class Posts
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string",length=100, unique="true")
     */
    protected $login;

    
     /**
     * @ORM\Column(type="string",length=100, unique="true")
     */
     protected $email;
     
     
     /**
     * @ORM\Column(type="string",length=255)
     */
     protected $name;     
  
     /**
     * @ORM\Column(type="string",length=255)
     */
     protected $password;
     
     
     /**
     * @ORM\OneToMany(targetEntity="posts", mappedBy="users")
     */
    protected $posts;
    
    

    public function __construct()
    {
        $this->posts = new ArrayCollection();
    }
         

     public function getId()
     {return $this->id;}

     public function setLogin($login)
     {
         $this->login = $login;
     }
     
     public function getLogin()
     {
         return $this->login;
     }
     
     public function setName($name)
     {
         $this->login = $name;
     }
     
     public function getName()
     {
         return $this->name;
     }     
     
     public function setEmail($email)
     {
         $this->email = $email;
     }
     
     public function getEmail()
     {
         return $this->email;
     }
     
     public function setPassword($password)
     {
         $this->password = md5($password);
     } 
     
     public function getPosts()
     {
         return $this->posts;
     }
}