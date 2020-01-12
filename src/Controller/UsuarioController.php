<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UsuarioController extends AbstractController
{
    /**
     * @Route("/administracion/clientes", name="administracion_clientes")
     */
    public function clientesLista()
    {
        $em = $this->getDoctrine()->getManager();
        $arClientes = $em->getRepository('App:User')->findBy(array(''));

        return $this->render('usuario/cliente/lista.html.twig', [
        ]);
    }
}
