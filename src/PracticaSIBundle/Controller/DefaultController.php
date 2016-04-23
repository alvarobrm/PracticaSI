<?php

namespace PracticaSIBundle\Controller;

use PracticaSIBundle\Entity\Product;
use PracticaSIBundle\Entity\Category;
use PracticaSIBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;
use Symfony\Component\HttpFoundation\Session\Session;

Debug::enable();
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PracticaSIBundle:Default:index.html.twig');
    }
    
    public function loginAction(Request $request)
    {
        $session = $request->getSession();
        if ($session->get('active')==0){
            return $this->render('PracticaSIBundle:Default:login.html.twig');
        }else{
            return $this->render('PracticaSIBundle:Default:index.html.twig');
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
            return $this->render('PracticaSIBundle:Default:index.html.twig');
        }

    }
}
