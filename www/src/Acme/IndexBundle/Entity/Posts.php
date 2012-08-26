<?php
namespace Acme\IndexBundle\Entity;
use Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle;
use Doctrine\ORM\Mapping as ORM;  
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Collections\ArrayCollection;


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
     

     protected $user_id; 
     
      /**
     * @ORM\ManyToOne(targetEntity="Users", inversedBy="posts")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
     protected $user;
     
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
     
     public function getUser()
     {
         return $this->user;
     }
    
     public function getPostsListWIthUserName($em)
     {
        $query = $em->createQuery('
                SELECT p.*, count(c.id), u.name, u.login 
                FROM AcmeIndexBundle:Posts p
                JOIN p.user u ON p.user_id = u.id
                JOIN p.comments c ON p.id = c.post_id'
                );
        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;  
            } 
     }

}