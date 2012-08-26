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
     
     /**
     * @ORM\Column(type="string")
     */
     protected $title;
     
     
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
     
     public function setTitle($title)
     {
         $this->title = $title;
     }
     
     public function getTitle()
     {
         return $this->title;
     }     

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
     
     
     
     public function getComments()
     {
         return $this->comments;
     }
     
     public function getUser()
     {
         return $this->user;
     }
     
     public function setUser($user)
     {
         $this->user = $user;
     }
    
     public function getPostsListWIthUserName($em)
     {
        $query = $em->createQuery('
                SELECT p, u.name, u.login 
                FROM AcmeIndexBundle:Posts p
                JOIN p.user u 
                JOIN p.comments c 
                '
                );
        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;  
            } 
     }

}