<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CkeditorController extends AbstractController
{
    /**
     * @Route("/ckeditor", name="ckeditor")
     */
    public function index()
    {
        return $this->render('ckeditor/index.html.twig', [
            'controller_name' => 'CkeditorController',
        ]);
    }
}
