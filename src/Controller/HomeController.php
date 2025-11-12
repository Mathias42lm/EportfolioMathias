<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/fr/homefr.html.twig', [
            'controller_name' => 'HomeController',
            'langue' => 'fr',
        ]);
    }

    #[Route('/fr', name: 'app_frhome')]
    public function homefr(): Response
    {
        return $this->render('home/fr/homefr.html.twig', [
            'controller_name' => 'HomeController',
            'langue' => 'fr',
        ]);
    }

    #[Route('/base', name: 'app_frbase')]
    public function basefr(): Response
    {
        return $this->render('home/fr/basefr.html.twig', [
            'controller_name' => 'HomeController',
            'langue' => 'fr',
        ]);
    }

    #[Route('/en', name: 'app_enhome')]
    public function homeen(): Response
    {
        return $this->render('home/en/homeen.html.twig', [
            'controller_name' => 'HomeController',
            'langue' => 'en',
        ]);
    }
    #[Route('/en/base', name: 'app_enbase')]
    public function baseen(): Response
    {
        return $this->render('home/en/baseen.html.twig', [
            'controller_name' => 'HomeController',
            'langue' => 'en',
        ]);
    }
}
