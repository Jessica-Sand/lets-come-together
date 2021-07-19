<?php

namespace App\Controller\Admin;

use App\Entity\Genre;
use App\Form\Type\GenreType;
use App\Repository\GenreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/genre", name="admin_genre_", requirements={"index" = "\d+"})
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
     * @return void
     */
    public function add(Request $request): Response
    {
        $genre = new Genre();

        $form = $this->createForm(GenreType::class, $genre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // dd($genre);
            $em = $this->getDoctrine()->getManager();

            $em->persist($genre);
            $em->flush();

            // Flash message
            $this->addFlash('info', 'Le style de musique ' . $genre->getName() . ' a bien été créée');
            return $this->redirectToRoute('admin_genre_list');
        }

        return $this->render('admin/genre/add.html.twig', [
            'form' => $form->createView(),
        ]);  
    }

    /**
     * @Route("/{id}", name="show")
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
