<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DashboardControllerPhpController extends AbstractController
{
    /**
     * @Route("/", name="dashboard")
     */
    public function dashboard()

    {
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'Hello Nasza super stronka!',
        ]);
    }
}
