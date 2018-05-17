<?php


namespace Shop\CatalogBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;


class CartController extends Controller{


    public function cartAction(Request $request, $id){
        
        $cartRepo = $this->getDoctrine()->getRepository('ShopCatalogBundle:Product');
        $cart = $cartRepo->find($id);
        if(!$cart){
            throw $this->createNotFoundException('Cart is not found');
        }
        
        $this->get('session')->set('shopping_cart', $cart);
        $shopping_cart = $session->get('shopping_cart');

        return $this->render('ShopCatalogBundle:Cart:cart.html.twig', [
            'cart' => $cart,
            'shopping_cart' => $shopping_cart
        ]);
    }


} 
