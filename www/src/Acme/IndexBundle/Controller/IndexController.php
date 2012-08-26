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
        $posts =  $this->getDoctrine()
            ->getRepository('AcmeIndexBundle:Posts')
            ->findAll();     
                                                                                               
        return $this->render('AcmeIndexBundle:Index:index.html.twig',array('posts'=>$posts));
    }
    
    public function showAction($id)
    {
        $posts =  $this->getDoctrine()
            ->getRepository('AcmeIndexBundle:Posts')
            ->findById($id); 
        
         return $this->render('AcmeIndexBundle:Index:show.html.twig',array('posts'=>$posts));    
    }

}