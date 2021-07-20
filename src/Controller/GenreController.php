<?php

namespace App\Controller;

use App\Repository\GenreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GenreController extends AbstractController
{
    /**
     * @Route("/genres", name="genre")
     */
    public function list(GenreRepository $genreRepository): Response
    {
        return $this->json([$genreRepository->findAll()], 200, [], [
            'groups' => 'Genres'
        ]);
    }
}
