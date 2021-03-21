<?php

echo '<p>Hallo Welt</p>';
#use App\Kernel;
#use Symfony\Component\Dotenv\Dotenv;
#use Symfony\Component\ErrorHandler\Debug;
#use Symfony\Component\HttpFoundation\Request;

#require dirname(__DIR__).'/vendor/autoload.php';

#(new Dotenv())->bootEnv(dirname(__DIR__).'/.env');

#if ($_SERVER['APP_DEBUG']) {
#    umask(0000);

#    Debug::enable();
#}

#$kernel = new Kernel($_SERVER['APP_ENV'], (bool) $_SERVER['APP_DEBUG']);
#$request = Request::createFromGlobals();
#$response = $kernel->handle($request);
#$response->send();
#$kernel->terminate($request, $response);


// src/Controller/LuckyController.php
#namespace App\Controller;

#use Symfony\Component\HttpFoundation\Response;

#class LuckyController
#{
#    public function number(): Response
#    {
 #       $number = random_int(0, 100);

  #      return new Response(
   #         '<html><body>Lucky number: '.$number.'</body></html>'
    #    );
    #}
#}

