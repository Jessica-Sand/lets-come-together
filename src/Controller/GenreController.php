<?php

namespace App\Controller;

use App\Repository\StyleRepository;
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
    public function list(StyleRepository $styleRepository): Response
    {
        return $this->json($styleRepository->findAll(), 200, [], [
            'groups' => 'Genres'
        ]);
    }

    /**
     * @Route("/genres/{id}", name="genres_users")
     */
    public function show($id, StyleRepository $styleRepository): Response
    {
        return $this->json($styleRepository->findOneBy(['id' => $id]), 200, [], [
            'groups' => 'Genres_User'
        ]);
    }
}
