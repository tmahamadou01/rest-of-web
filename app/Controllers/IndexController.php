<?php

namespace App\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class IndexController{

    private $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function index(RequestInterface $request, ResponseInterface $response){
        $this->container->view->render($response, 'pages/index.twig');
    }
}