<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TremmaController extends AbstractController
{
    #[Route('/tremma', name: 'tremma')]
    public function index(): Response
    {
        return $this->render('tremma/index.html.twig', [
            'controller_name' => 'TremmaController',
        ]);
    }
}
