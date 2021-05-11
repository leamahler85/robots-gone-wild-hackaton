<?php

namespace App\Controller;

use Symfony\Component\HttpClient\HttpClient;

class SeriousController extends AbstractController
{
    public function startSerious()
    {
        return $this->twig->render('Serious/serious-start.html.twig');
    }

    public function endSerious()
    {
        return $this->twig->render('Serious/serious-end.html.twig');
    }
}