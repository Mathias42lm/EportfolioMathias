<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    private function getTheme(Request $request): string
    {
        return $request->getSession()->get('theme', 'light');
    }
    
    
    //Route de base en français
    #[Route('/', name: 'app_home')]
    public function index(Request $request): Response
    {
        return $this->render('home/fr/homefr.html.twig', [
            'langue' => 'fr',
            'theme' => $this->getTheme($request),
        ]);
    }

    // Changement de thème
    #[Route('/theme/{theme}', name: 'app_change_theme', requirements: ['theme' => 'light|dark|fun'])]
    public function changeTheme(Request $request, string $theme): Response
    {
        $request->getSession()->set('theme', $theme);
        $referer = $request->headers->get('referer');
        return $this->redirect($referer ?: '/');
    }

    // Partie du site en français
    #[Route('/photofr', name: 'app_frphoto')]
    public function photofr(Request $request): Response
    {
        return $this->render('home/fr/photofr.html.twig', [
            'langue' => 'fr',
            'theme' => $this->getTheme($request),
        ]);
    }

    #[Route('/base', name: 'app_frbase')]
    public function basefr(Request $request): Response
    {
        return $this->render('home/fr/basefr.html.twig', [
            'langue' => 'fr',
            'theme' => $this->getTheme($request),
        ]);
    }

    #[Route('/cv', name: 'app_frcv')]
    public function cvfr(Request $request): Response
    {
        return $this->render('home/fr/cvfr.html.twig', [
            'langue' => 'fr',
            'theme' => $this->getTheme($request),
        ]);
    }

    #[Route('/contact', name: 'app_frcontact')]
    public function contactfr(Request $request): Response
    {
        return $this->render('home/fr/contactfr.html.twig', [
            'langue' => 'fr',
            'theme' => $this->getTheme($request),
        ]);
    }

    #[Route('/login', name: 'app_frlogin')]
    public function loginfr(Request $request): Response
    {
        return $this->render('home/fr/loginfr.html.twig', [
            'langue' => 'fr',
            'theme' => $this->getTheme($request),
        ]);
    }

    // Partie du site en anglais

    #[Route('/en', name: 'app_enhome')]
    public function homeen(Request $request): Response
    {
        return $this->render('home/en/homeen.html.twig', [
            'langue' => 'en',
            'theme' => $this->getTheme($request),
        ]);
    }

    #[Route('/en/contact', name: 'app_encontact')]
    public function contacten(Request $request): Response
    {
        return $this->render('home/en/contacten.html.twig', [
            'langue' => 'en',
            'theme' => $this->getTheme($request),
        ]);
    }

    #[Route('/en/cv', name: 'app_encv')]
    public function cven(Request $request): Response
    {
        return $this->render('home/en/cven.html.twig', [
            'langue' => 'en',
            'theme' => $this->getTheme($request),
        ]);
    }

    #[Route('/en/login', name: 'app_enlogin')]
    public function loginen(Request $request): Response
    {
        return $this->render('home/en/loginen.html.twig', [
            'langue' => 'en',
            'theme' => $this->getTheme($request),
        ]);
    }
    #[Route('/en/photo', name: 'app_enphoto')]
    public function photoen(Request $request): Response
    {
        return $this->render('home/en/photoen.html.twig', [
            'langue' => 'en',
            'theme' => $this->getTheme($request),
        ]);
    }
}