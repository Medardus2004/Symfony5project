<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return new Response('<h1>Willkommen TMT GmbH & Co. KG - Team</h1>');
    }

    /**
     * @Route("/introduction", name="introduction")
     */
    public function introduction() {
        return new Response('<h1>Willkommen TMT GmbH & Co. KG</h1>');
    }
}
