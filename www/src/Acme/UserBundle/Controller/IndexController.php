<?php

namespace Acme\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Acme\IndexBundle\Entity\Users;
use Acme\IndexBundle\Entity\Posts;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class IndexController extends Controller
{

  /**
  * @Route("/{login}/", name="profile")
  * @Template()
  */
  public function indexAction($login) {
    $user = $this->getDoctrine()
            ->getRepository('AcmeIndexBundle:Users')
            ->findOneByLogin($login);
    if ($user) {
      $lastPost = $this->findLastPost($user->getId());
      if ($lastPost) {
        $lastPost = $lastPost[0]->getTitle();
      } else {
        $lastPost = '';
      }
      return $this->render('AcmeUserBundle:Index:index.html.twig', array(
        'name' => $user->getName(),
        'login' => $user->getLogin(),
        'email' => $user->getEmail(),
        'num_post' => $this->findNumberUserPosts($user->getId()),
        'last_post' => $lastPost,
      ));
    } else {
      return $this->render('AcmeUserBundle:Index:nouser.html.twig');
    }
  }

  protected function findNumberUserPosts($id){
    $query = $this->getDoctrine()->getEntityManager()
                  ->createQuery('SELECT COUNT(p.id) FROM AcmeIndexBundle:Posts p WHERE p.user=:id')->setParameter('id', $id);
    try {
        $num = $query->getSingleResult();
        return $num[1];
    } catch (\Doctrine\ORM\NoResultException $e) {
        return null;
    }
  }

  protected function findLastPost($id){
    $repository = $this->getDoctrine()
        ->getRepository('AcmeIndexBundle:Posts');
    $query = $repository->createQueryBuilder('p')
        ->where('p.user = :id')
        ->setParameter('id', $id)
        ->orderBy('p.createDate', 'DESC')
        ->setFirstResult( 0 )
        ->setMaxResults( 1 )
        ->getQuery();

    return $post = $query->getResult();
  }

}