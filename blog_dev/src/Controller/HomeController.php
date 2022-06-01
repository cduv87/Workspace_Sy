<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {

    /**
     *  @Route("/",name="app_home")
     */
    public function index():Response {
        $a = "Accueil";
        return $this->render("home/index.html.twig", ["titre" => $a]);
    }

    /**
     *  @Route("/blog",name="blog")
     */
    public function blog():Response {
        return $this->render("home/blog.html.twig");
    }

       /**
     *  @Route("/contact",name="contact")
     */
    public function contact():Response {
        return $this->render("home/contact.html.twig");
    }

       /**
     *  @Route("/apropos",name="apropos")
     */
    public function apropos():Response {
        return $this->render("home/apropos.html.twig");
    }

}