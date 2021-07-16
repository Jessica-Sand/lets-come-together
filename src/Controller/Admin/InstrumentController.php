<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/instrument", name="admin_instrument_")
 */
class InstrumentController extends AbstractController
{
    /**
     * @Route("/list", name="list")
     */
    public function list(): Response
    {
        return $this->render('admin/instrument/list.html.twig', [
            'controller_name' => 'InstrumentController',
        ]);
    }
}