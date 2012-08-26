<?php

namespace Acme\IndexBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\IndexBundle\Entity\Message;
use Symfony\Component\HttpFoundation\Request;
use Acme\IndexBundle\Form\Type\MainFormType;

class IndexController extends Controller
{
    
    public function indexAction()
    {
        $name = "test";
        return $this->render('AcmeIndexBundle:Index:index.html.twig', array('name' => $name));
    }
    
    public function formAction(Request $request)
    {
        $message = new Message();
        
        $form = $this->createForm(new MainFormType(), $message);
            
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()){
                $message_is_send = $this->sendMessage($message);
                return $this->render('AcmeIndexBundle:Index:success.html.twig',array('message_send_result'=>$message_is_send));
            }
        else
            {
                return $this->render('AcmeIndexBundle:Index:form.html.twig',array('form' => $form->createView(),));
            }
        }            
            
        return $this->render('AcmeIndexBundle:Index:form.html.twig', array('form' => $form->createView(),));
    }
    
    private function sendMessage(Message $message)
    {
        $mailer = $this->get('mailer');

        $letter = \Swift_Message::newInstance()
            ->setSubject('New mail')
            ->setTo($message->getEmail())
            ->setFrom($message->getEmail())
            ->setBody($this->renderView('AcmeIndexBundle:Index:email.txt.twig', array('message' => $message->getArray())))
            ;
        $result = $mailer->send($letter);
        return $result;
    }
    
}