<?php

namespace PracticaSIBundle\Controller;

use PracticaSIBundle\Entity\Product;
use PracticaSIBundle\Entity\Category;
use PracticaSIBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;


class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        return $this->render('PracticaSIBundle:Default:index.html.twig', array('active' => $session->get('active'), 'admin'=> $session->get('admin')));
    }
    
    public function loginAction(Request $request)
    {
        $session = $request->getSession();
        if ($session->get('active')==0){
            return $this->render('PracticaSIBundle:Default:login.html.twig');
        }else{
            return $this->forward('PracticaSIBundle:Default:index');
        }

    }
    
    public function checkLoginAction(Request $request)
    {
        $session = $request->getSession();
        $username = $request->request->get('username');
        $pass = $request->request->get("password");
        $repository= $this->getDoctrine()->getRepository('PracticaSIBundle:User');

        $user =$repository->findOneBy(array('username'=> $username, 'pass'=> $pass));
        if (!$user){
            return $this->render('PracticaSIBundle:Default:login.html.twig');
        }else{
            $session->set('active', 1);
            $session->set('admin', $user->getAdmin());
            return $this->forward('PracticaSIBundle:Default:index');
        }

    }

    public function logoutAction(Request $request)
    {
        $session = $request->getSession();
        $session->set('active', 0);
        return $this->forward('PracticaSIBundle:Default:index');
    }

    public function singupAction(Request $request, $error = '')
    {
        $session = $request->getSession();
        $session->set('active', 0);
        return $this->render('PracticaSIBundle:Default:singup.html.twig', array('error'=>$error));
    }

    public function newUserAction(Request $request){
        $session = $request->getSession();
        $username = $request->request->get('username');
        $pass = $request->request->get('password');
        $passConfirm = $request->request->get('passwordConfirm');
        $email = $request->request->get('email');
        $creditCard = $request->request->get('creditCard');
        $repository= $this->getDoctrine()->getRepository('PracticaSIBundle:User');
        $user = $repository->findOneBy(array('username'=>$username));
        if($pass!=$passConfirm|| $user) {
            if ($pass!=$passConfirm)
                $error = "Las contraseñas introducidas no coinciden";
            elseif ($user)
                $error = "El usuario indicado ya existe";

            return $this->forward('PracticaSIBundle:Default:singup', array("error"=>$error));
        }else{
            $user = new User();
            $user->setAdmin(false);
            $user->setUsername($username);
            $user->setPass($pass);
            $user->setCreditCard($creditCard);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->forward('PracticaSIBundle:Default:login');
        }
    }
}
