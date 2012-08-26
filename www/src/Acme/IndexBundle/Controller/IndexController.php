<?php

namespace Acme\IndexBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\IndexBundle\Entity\Posts;
use Acme\IndexBundle\Entity\Users;
use Acme\IndexBundle\Entity\Comments;
use Symfony\Component\HttpFoundation\Request;
use Acme\IndexBundle\Form\Type\MainFormType;

class IndexController extends Controller
{
    
    public function indexAction()
    {

        $post = new Posts();
        $em =  $this->getDoctrine()->getEntityManager(); 
        
        $posts = $this->getDoctrine()
        ->getRepository('AcmeIndexBundle:Posts')
        ->find(1);

        $user = $posts->getUser()->getName();
       /* $post->setPost('asd');
        $post->setUserId(1);
        $post->setCreareDate(new \DateTime("now"));
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($post);
        $em->flush();                                       */
        print_r($posts);
        return $this->render('AcmeIndexBundle:Index:index.html.twig', array('name' => serialize($posts)));
       // return new Response('Created product id '.$post->getId());
    }

}