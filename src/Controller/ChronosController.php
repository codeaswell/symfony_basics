<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ChronosController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function index()
    {
        return $this->render('pages/show.html.twig', [
            'title' => 'Chronos'
        ]);
    }

    /**
     * @Route("/login", name="app_login")
     */
    public function login()
    {
        return $this->render('pages/login.html.twig', [
            'title' => 'Veuillez vous authentifier'
        ]);
    }
}