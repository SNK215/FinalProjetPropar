<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetController extends AbstractController
{
    /**
     * @Route("/index", name="app_index")
     */
    public function index(): Response
    {
        return $this->render('projet/index.html.twig', [
            'controller_name' => 'ProjetController',
        ]);
    }

     /**
     * @Route("/profile/home", name="app_home")
     */
    public function home(): Response
    {
        return $this->render('projet/home.html.twig', [
            'controller_name' => 'ProjetController',
        ]);
    }

    /**
     * @Route("/profile/operation", name="app_operation")
     */
    public function listOperation(): Response
    {
        return $this->render('projet/listOperation.html.twig', [
            'controller_name' => 'ProjetController',
        ]);
    }
}
