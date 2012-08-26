<?php

namespace Acme\IndexBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\IndexBundle\Entity\Posts;
use Symfony\Component\HttpFoundation\Request;
use Acme\IndexBundle\Form\Type\MainFormType;

class IndexController extends Controller
{
    
    public function indexAction()
    {

        $post = new Posts();
        $post->setPost('asd');
        $post->setUserId(1);
        $post->setCreareDate(new \DateTime("now"));
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($post);
        $em->flush();

        return new Response('Created product id '.$post->getId());
    }

}