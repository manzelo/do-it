<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class HomeController extends AbstractController {


    /**
     * Homepage du site
     * 
     * @Route("/", name="eyrolles_home", methods="GET")
     */
    public function index() {
        
        return new Response('Hello World');
       
    }


}
