<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ChronosController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render('pages/show.html.twig', [
            'title' => 'Chronos'
        ]);
    }
}