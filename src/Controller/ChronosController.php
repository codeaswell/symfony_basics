<?php

namespace App\Controller;

use App\Services\RandomNumberFetcher;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ChronosController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function index(string $bite)
    {
        dump($bite); // return "ma super bite" from service.yaml
        return $this->render('pages/show.html.twig', [
            'title' => 'Chronos',
        ]);
    }

    /**
     * @Route("/login", name="app_login")
     */
    public function login()
    {
        return $this->render('pages/login.html.twig', [
            'title' => 'Veuillez vous authentifier',
        ]);
    }

    /**
     * @Route("/random-number", name="app_random_number", methods={"POST"})
     *
     * @param RandomNumberFetcher $randomNumberFetcher
     *
     * @return JsonResponse
     */
    public function getRandomNumber(RandomNumberFetcher $randomNumberFetcher)
    {
        return new JsonResponse(['randomNumber' => $randomNumberFetcher::getRandomNumber()]);
    }
}