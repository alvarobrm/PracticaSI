<?php

namespace PracticaSIBundle\Controller;

use PracticaSIBundle\Entity\Product;
use PracticaSIBundle\Entity\Category;
use PracticaSIBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;

Debug::enable();
class DefaultController extends Controller
{
    public function indexAction()
    {
        
        return $this->render('PracticaSIBundle:Default:index.html.twig');
    }
    
    public function loginAction()
    {
        
        return $this->render('PracticaSIBundle:Default:login.html.twig');
    }
    
    public function checkLoginAction()
    {
        $request = Request::createFromGlobals();
        $username = $request->request->get('username');
        $pass = $request->request->get("pass");
        $repository= $this->getDoctrine()->getRepository('PracticaSIBundle:User');

        $user =$repository->findBy(array('username'=> $username));
        if (!$user || $user->getPass()== $pass){
            return $this->render('PracticaSIBundle:Default:login.html.twig');
        }else{
            return $this->render('PracticaSIBundle:Default:index.html.twig');
        }

    }
}
