<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WController extends AbstractController
{
    /**
     * @Route("/w", name="w")
     */
    public function index()
    {
        return $this->render('w/index.html.twig', [
            'controller_name' => 'WController',
        ]);
    }
}
