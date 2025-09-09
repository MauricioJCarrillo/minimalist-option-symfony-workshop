<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return new Response('This is the index page.');
    }
}

