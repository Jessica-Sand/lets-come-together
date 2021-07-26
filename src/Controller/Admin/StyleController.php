<?php

namespace App\Controller\Admin;

use App\Entity\Style;
use App\Form\Type\StyleType;
use App\Repository\StyleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("style", name="admin_style_", requirements={"index" = "\d+"})
 * @IsGranted("ROLE_ADMIN")
 */
class StyleController extends AbstractController
{
    /**
     * @Route("/list", name="list")
     */
    public function list(StyleRepository $styleRepository): Response
    {
        return $this->render('admin/style/list.html.twig', [
            'genres' => $styleRepository->findAll(),
        ]);
    }

    /**
     * @Route("/add", name="add")
     * @return void
     */
    public function add(Request $request): Response
    {
        $style = new Style();

        $form = $this->createForm(StyleType::class, $style);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $em->persist($style);
            $em->flush();

            // Flash message
            $this->addFlash('info', 'Le style de musique ' . $style->getName() . ' a bien été créée');
            return $this->redirectToRoute('admin_style_list');
        }

        return $this->render('admin/style/add.html.twig', [
            'form' => $form->createView(),
        ]);  
    }

    /**
     * @Route("/{id}", name="show")
     * @return void
     */
    public function show(int $id, StyleRepository $styleRepository)
    {
        $style = $styleRepository->find($id);

        return $this->render('admin/style/show.html.twig', [
            'genre' =>$style
        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit")
     * @return void
     */
    public function edit(Style $style, Request $request): Response
    {
        $form = $this->createForm(StyleType::class, $style);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash('success', 'Le style de musique ' . $style->getName() . ' a bien été mis à jour');
            return $this->redirectToRoute('admin_style_show', ['id' => $style->getId()]);
        }
        return $this->render('admin/style/edit.html.twig', [
            'form' => $form->createView(),
            'genre' => $style
        ]);
    }

    /**
     * @Route("/delete", name="delete")
     * @return void
     */
    public function delete(int $id, StyleRepository $styleRepository, Request $request)
    {
        $submittedToken = $request->get('token');

        if ($this->isCsrfTokenValid('delete-style', $submittedToken)) {
            $styleToDelete = $styleRepository->find($id);
            $styleName = $styleToDelete->getName();
            if ($styleToDelete  === null) {
                throw $this->createNotFoundException('La ressource demandée n\'existe pas');
            }

            $em = $this->getDoctrine()->getManager();
            $em->remove($styleToDelete);
            $em->flush();

            $this->addFlash('success', 'Le style musicale ' . $styleName . ' a bien été supprimée');
            return $this->redirectToRoute('admin_style_list');
        } else {
            return new Response('Action interdite', 403);
        }
    }
}