<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HelloWorldController extends Controller
{
    public function helloWorld()
    {
        return new Response('<html><body>Hello World !</body></html>');
    }

    /**
     *  @Route("/hello", name="hello_world")
     */
    public function helloWorld2()
    {
        return new Response('<html><body>Hello World !</body></html>');
    }

    /**
     * Matches /bonjour/*
     * @Route("/bonjour/{nom}", name="bonjour")
     */
    public function bonjour($nom)
    {
        return $this->render(
            'HelloWorld/helloWorld.html.twig',['nom' => $nom, 'title' => __FUNCTION__,]
        );
    }
}
