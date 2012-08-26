<?php

namespace Acme\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Acme\IndexBundle\Entity\Users;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class IndexController extends Controller
{

  /**
  * @Route("/{name}/", name="profile")
  * @Template()
  */
  public function indexAction($name) {
    $user = $this->getDoctrine()
            ->getRepository('AcmeIndexBundle:Users')
            ->findByName($name);
    return $this->render('AcmeUserBundle:Index:index.html.twig', array(
      'name' => $user->getName(),
      'login' => $user->getLogin(),
      'email' => $user->getEmail()
    ));
  }
    

}