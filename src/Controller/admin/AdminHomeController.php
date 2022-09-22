<?php

namespace App\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminHomeController extends AbstractController
{
    //Page d'accueil
    /**
     * @Route("/", name="home")
     */
    //Creating home function
    public function home()
    {
        //Return to my twig
        return $this->render('admin/home.html.twig');
    }
}