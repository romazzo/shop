<?php


namespace Shop\CatalogBundle\Controller;


use Shop\CatalogBundle\ShopCatalogBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller{

    public function listAction(){
        $categoryRepo = $this->getDoctrine()->getRepository('ShopCatalogBundle:Category');
        $categories = $categoryRepo->findAll();
        //return new Response('this');
        return $this->render('ShopCatalogBundle:Category:list.html.twig', [
            'categories' => $categories
        ]);
    }

    public function viewAction($id){
        return new Response('view');
        // return $this->render('ShopCatalogBundle:Default:cart.html.twig');
    }
} 