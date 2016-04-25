<?php

namespace PracticaSIBundle\Controller;


use PracticaSIBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class ProductController extends Controller
{

    public function showCategoryAction(Request $request, $category)
    {
        $session = $request->getSession();
        $repository= $this->getDoctrine()->getRepository('PracticaSIBundle:Product');
        $products = $repository->findBy(array("category"=> $category));

        return $this->render('PracticaSIBundle:Default:productList.html.twig', array('products' => $products, 'active' => $session->get('active'), 'admin'=>$session->get('admin')));
    }


    public function showProductAction(Request $request, $idProduct)
    {
        $session = $request->getSession();
        $repository= $this->getDoctrine()->getRepository('PracticaSIBundle:Product');
        $product = $repository->findOneBy(array("id"=> $idProduct));

        return $this->render('PracticaSIBundle:Default:viewProduct.html.twig', array('product' => $product, 'active' => $session->get('active'), 'admin'=>$session->get('admin')));
    }
}