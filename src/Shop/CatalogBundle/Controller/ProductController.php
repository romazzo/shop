<?php


namespace Shop\CatalogBundle\Controller;


use Shop\CatalogBundle\Entity\Image;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class ProductController extends Controller{

    public function listAction(){
        $productRepo = $this->getDoctrine()->getRepository('ShopCatalogBundle:Product');
        $products = $productRepo->findAll();
        return $this->render('ShopCatalogBundle:Product:list.html.twig', [
            'products' => $products
        ]);
    }

    public function viewAction($id, Request $request){
        $productRepo = $this->getDoctrine()->getRepository('ShopCatalogBundle:Product');
        $product = $productRepo->find($id);

        if(!$product){
            throw $this->createNotFoundException('Product is not found');
        }
        $em = $this->getDoctrine()->getManager();

        $productDescriptionRepo = $this->getDoctrine()->getRepository('ShopCatalogBundle:ProductDescription');
        $productDescription = $productDescriptionRepo->find($id);
        //var_dump($productDescriptions);

        $imageRepo = $em->getRepository(Image::class);
        $images = $imageRepo->findLastImages($product, 5);
        //dump($images);
        return $this->render('ShopCatalogBundle:Product:view.html.twig', [
            'product' => $product,
            'productDescription' => $productDescription,
            'images' => $images
            //'products' => $products
        ]);
    }






} 