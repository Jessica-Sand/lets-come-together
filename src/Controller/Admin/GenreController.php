<?php

namespace App\Controller\Admin;

use App\Entity\Genre;
use App\Form\Type\GenreType;
use App\Repository\GenreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("genre", name="admin_genre_", requirements={"index" = "\d+"})
 * @IsGranted("ROLE_ADMIN")
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
     * @return void
     */
    public function show(int $id, GenreRepository $genreRepository)
    {
        $genre = $genreRepository->find($id);

        return $this->render('admin/genre/show.html.twig', [
            'genre' =>$genre
        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit")
     * @return void
     */
    public function edit(Genre $genre, Request $request): Response
    {
        $form = $this->createForm(GenreType::class, $genre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash('success', 'Le style de musique ' . $genre->getName() . ' a bien été mis à jour');
            return $this->redirectToRoute('admin_genre_show', ['id' => $genre->getId()]);
        }
        return $this->render('admin/genre/edit.html.twig', [
            'form' => $form->createView(),
            'genre' => $genre
        ]);
    }

    /**
     * @Route("/delete", name="delete")
     * @return void
     */
    public function delete(int $id, GenreRepository $genreRepository, Request $request)
    {
        $submittedToken = $request->get('token');

        if ($this->isCsrfTokenValid('delete-genre', $submittedToken)) {
            $genreToDelete = $genreRepository->find($id);
            $genreName = $genreToDelete->getName();
            if ($genreToDelete  === null) {
                throw $this->createNotFoundException('La ressource demandée n\'existe pas');
            }

            $em = $this->getDoctrine()->getManager();
            $em->remove($genreToDelete);
            $em->flush();

            $this->addFlash('success', 'Le style musicale ' . $genreName . ' a bien été supprimée');
            return $this->redirectToRoute('admin_genre_list');
        } else {
            return new Response('Action interdite', 403);
        }
    }
}