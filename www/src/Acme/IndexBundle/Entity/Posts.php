<?php
namespace Acme\IndexBundle\Entity;
use Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle;
use Doctrine\ORM\Mapping as ORM;  


/**
 * @ORM\Entity
 * @ORM\Table(name="posts")
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
     * @ORM\Column(type="text")
     */
    protected $post;

  
     /**
     * @ORM\Column(type="datetime",name="create_date")
     */
     protected $createDate;
     
      /**
     * @ORM\ManyToOne(targetEntity="Users", inversedBy="posts")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
     protected $user_id;
     
    /**
     * @ORM\OneToMany(targetEntity="comments", mappedBy="posts")
     */
    protected $comments;
    
    

    public function __construct()
    {
        $this->comments = new ArrayCollection();
    }
         

     public function getId()
     {return $this->id;}

     public function setPost($post)
     {
         $this->post = $post;
     }
     
     public function getPost()
     {
         return $this->post;
     }
     
     public function setCreareDate($date)
     {
         $this->createDate = $date;
     }
     
     public function getCreareDate()
     {
         return $this->createDate;
     }
     
     public function setUserId($user_id)
     {
         $this->user_id = $user_id;
     } 
     
     public function getUserId()
     {
         return $this->user_id;
     }
     
     
     public function getComments()
     {
         return $this->comments;
     }
}