<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
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
        return new Response('Future page to show the article: ' . $slug);
    }
}