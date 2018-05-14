<?php


namespace Shop\CatalogBundle\Controller;


use Shop\CatalogBundle\Form\ImageType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Image;

class ImageController extends Controller{


    public function loadAction(Request $request){


        return $this->render('ShopCatalogBundle:Product:list.html.twig');
    }
} 