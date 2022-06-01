<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Controller extends AbstractController {

    /**
     *  @Route("/",name="app_home")
     */
    public function index():Response {
        $a = "Bucket-List";
        return $this->render("home/home.html.twig", ["titre" => $a]);
    }


}