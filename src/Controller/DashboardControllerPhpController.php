<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DashboardControllerPhpController extends AbstractController
{
    /**
     * @Route("/", name="Nasza super stronka")
     */
    public function index()
    {
        return $this->render('dashboard_controller_php/index.html.twig', [
            'controller_name' => 'Hello Nasza super stronka!',
        ]);
    }
}
