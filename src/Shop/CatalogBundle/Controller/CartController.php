<?php


namespace Shop\CatalogBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;


class CartController extends Controller{


    public function cartAction(Request $request, $id){
        $session = $request->getSession();

        $cartRepo = $this->getDoctrine()->getRepository('ShopCatalogBundle:Product');
        $cart = $cartRepo->find($id);
        if(!$cart){
            throw $this->createNotFoundException('Cart is not found');
        }



        $productos = array();

        if ($session->has('producto')) {
            $productos = $session->get('producto');
            array_push($productos, [
                'id' => $cart->getId(),
                'product_name' => $cart->getName(),
                'product_image' => $cart->getImage(),
                'product_price' => $cart->getPrice()]);
            $session->set('producto', $productos);
        }else{
            $test = array([
                'id' => $cart->getId(),
                'product_name' => $cart->getName(),
                'product_image' => $cart->getImage(),
                'product_price' => $cart->getPrice()
            ]);

            $session->set('producto', $test);
        }
        $productos = $session->get('producto');




         return $this->render('ShopCatalogBundle:Cart:cart.html.twig', [
            'cart' => $cart,
            'productos' => $productos
        ]);
    }


} 