<?php

namespace App\Controller;

use App\Repository\GenreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/v1", name="api_v1_")
 */
class GenreController extends AbstractController
{
    /**
     * @Route("/genres", name="genres")
     */
    public function list(GenreRepository $genreRepository): Response
    {
        return $this->json($genreRepository->findAll(), 200, [], [
            'groups' => 'Genres'
        ]);
    }

    /**
     * @Route("/genres/{name}", name="genres_users")
     */
    public function show($name, GenreRepository $genreRepository): Response
    {
        return $this->json($genreRepository->findOneBy(['name' => $name]), 200, [], [
            'groups' => 'Genres_User'
        ]);
    }
}
