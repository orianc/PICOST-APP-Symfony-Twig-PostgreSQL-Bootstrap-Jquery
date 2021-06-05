<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutPicostController extends AbstractController
{
    /**
     * @Route("/about/picost", name="about_picost")
     */
    public function index(): Response
    {
        return $this->render('about_picost/index.html.twig', [
            'controller_name' => 'AboutPicostController',
        ]);
    }
}
