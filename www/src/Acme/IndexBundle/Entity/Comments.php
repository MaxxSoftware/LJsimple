<?php
namespace Acme\IndexBundle\Entity;
use Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle;
use Doctrine\ORM\Mapping as ORM;  


/**
 * @ORM\Entity
 * @ORM\Table(name="comments")
 */
class Comments
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
    protected $comment;

    
      /**
     * @ORM\ManyToOne(targetEntity="Users", inversedBy="comments")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
     protected $user_id;
     
      /**
     * @ORM\ManyToOne(targetEntity="Posts", inversedBy="comments")
     * @ORM\JoinColumn(name="post_id", referencedColumnName="id")
     */
     protected $post_id;
    
    

    public function __construct()
    {
        $this->posts = new ArrayCollection();
    }
         

     public function getId()
     {return $this->id;}

     public function setComment($comment)
     {
         $this->comment = $comment;
     }
     
     public function getComment()
     {
         return $this->comment;
     }
     
     public function getUserId()
     {
         return $this->user_id;
     }
     
     public function getPostId()
     {
         return $this->post_id;
     }
}