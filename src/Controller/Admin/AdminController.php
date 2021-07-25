<?php

namespace App\Controller\Admin;

use App\Entity\Instrument;
use App\Repository\GenreRepository;
use App\Repository\InstrumentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin", name="admin_")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="list")
     */
    public function index(GenreRepository $genreRepository, InstrumentRepository $instrumentRepository): Response
    {
        return $this->render('admin/layout.html.twig', [
            'genres' => $genreRepository,
            'instruments' => $instrumentRepository
        ]);
    }

    
}
