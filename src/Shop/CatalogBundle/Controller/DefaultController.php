<?php

namespace Shop\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function listAction(){
        return new Response('this');

    }

    public function viewAction($id){
        return new Response('view');

    }
}
