<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('First page created');
    }

    /**
     * @Route("/news/{slug}")
     * @param string $slug
     *
     * @return Response
     */
    public function show($slug)
    {
        $comments = ['Item 1', 'Item 2', 'Item 3'];

        return $this->render('article/show.html.twig', [
            'title' => ucfirst(str_replace('-', ' ', $slug)),
            'comments'  => $comments
        ]);
    }
}