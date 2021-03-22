<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/introduction/{name?}", name="introduction")
     */
    public function introduction(Request $request) {
        $name = $request->get('name');
        return $this->render('home/introduction.html.twig', [
            'name' => $name
        ]);    
    }
}
