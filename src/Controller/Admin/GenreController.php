<?php

namespace App\Controller\Admin;

use App\Repository\GenreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/genre", name="admin_genre_")
 */
class GenreController extends AbstractController
{
    /**
     * @Route("/list", name="list")
     */
    public function list(GenreRepository $genreRepository): Response
    {
        return $this->render('admin/genre/list.html.twig', [
            'genres' => $genreRepository->findAll(),
        ]);
    }

    /**
     * @Route("/add", name="add")
     */
    public function add(): Response
    {
        return $this->render('admin/genre/add.html.twig');
    }

    /**
     * @Route("/show", name="show")
     */
    public function show(): Response
    {
        return $this->render('admin/genre/show.html.twig');
    }

    /**
     * @Route("/edit", name="edit")
     */
    public function edit(): Response
    {
        return $this->render('admin/genre/edit.html.twig');
    }

    /**
     * @Route("/delete", name="delete")
     */
    public function delete(): Response
    {
        return $this->render('admin/genre/delete.html.twig');
    }
}
