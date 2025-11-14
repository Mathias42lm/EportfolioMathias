<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    // Partie du site en français
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

    #[Route('/cv', name: 'app_frcv')]
    public function cvfr(): Response
    {
        return $this->render('home/fr/cvfr.html.twig', [
            'controller_name' => 'HomeController',
            'langue' => 'fr',
        ]);
    }

    #[Route('/contact', name: 'app_frcontact')]
    public function contactfr(): Response
    {
        return $this->render('home/fr/contactfr.html.twig', [
            'controller_name' => 'HomeController',
            'langue' => 'fr',
        ]);
    }

    #[Route('/login', name: 'app_frlogin')]
    public function loginfr(): Response
    {
        return $this->render('home/fr/loginfr.html.twig', [
            'controller_name' => 'HomeController',
            'langue' => 'fr',
        ]);
    }

    // Partie du site en anglais

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

    #[Route('/en/contact', name: 'app_encontact')]
    public function contacten(): Response
    {
        return $this->render('home/en/contacten.html.twig', [
            'controller_name' => 'HomeController',
            'langue' => 'en',
        ]);
    }

    #[Route('/en/cv', name: 'app_encv')]
    public function cven(): Response
    {
        return $this->render('home/en/cven.html.twig', [
            'controller_name' => 'HomeController',
            'langue' => 'en',
        ]);
    }

    #[Route('/en/login', name: 'app_enlogin')]
    public function loginen(): Response
    {
        return $this->render('home/en/loginen.html.twig', [
            'controller_name' => 'HomeController',
            'langue' => 'en',
        ]);
    }
}