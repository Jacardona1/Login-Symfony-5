<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EmpleadoController extends AbstractController
{
    /**
     * @Route("/empleado", name="empleado")
     */
    public function index()
    {
        return $this->render('empleado/index.html.twig', [
            'controller_name' => 'EmpleadoController',
        ]);
    }
}
