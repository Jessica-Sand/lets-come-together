<?php

namespace App\Controller\Admin;

use App\Entity\Instrument;
use App\Form\Type\InstrumentType;
use App\Repository\InstrumentRepository;
use App\Service\ImageUploader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

/**
 * @Route("admin/instrument", name="admin_instrument_")
 */
class InstrumentController extends AbstractController
{
    /**
     * @Route("/list", name="list")
     */
    public function list(InstrumentRepository $instrumentRepository): Response
    {
        return $this->render('admin/instrument/list.html.twig', [
            'instruments' => $instrumentRepository->findAll(),
        ]);
    }

    /**
     * @Route("/add", name="add")
     * @return void
     */
    public function add(Request $request, ImageUploader $imageUploader)
    {
        $instrument = new Instrument();

        $form = $this->createForm(InstrumentType::class, $instrument);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // dd($instrument);

            $newFileName = $imageUploader->upload($form, 'icone');

            $instrument->setIcone($newFileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($instrument);
            $em->flush();
            
            $this->addFlash('sucess', 'Instrument ajouté avec succès');
            
            return $this->redirectToRoute('admin_instrument_list');
        }

        return $this->render('admin/instrument/add.html.twig', [
            'form' => $form->createView(),
        ]);  
    }

    /**
     * @Route("/{id}", name="show")
     * @return void
     */
    public function show(int $id, InstrumentRepository $instrumentRepository)
    {
        $instrument = $instrumentRepository->find($id);

        return $this->render('admin/instrument/show.html.twig', [
            'instrument' =>$instrument
        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit")
     * @return void
     */
    public function edit(Instrument $instrument, Request $request): Response
    {
        $form = $this->createForm(InstrumentType::class, $instrument);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash('success', 'Le style de musique ' . $instrument->getName() . ' a bien été mis à jour');
            return $this->redirectToRoute('admin_instrument_show', ['id' => $instrument->getId()]);
        }
        return $this->render('admin/instrument/edit.html.twig', [
            'form' => $form->createView(),
            'instrument' => $instrument
        ]);
    }

    /**
     * @Route("/delete", name="delete")
     * @return void
     */
    public function delete(int $id, InstrumentRepository $instrumentRepository, Request $request)
    {
        $submittedToken = $request->get('token');

        if ($this->isCsrfTokenValid('delete-instrument', $submittedToken)) {
            $instrumentToDelete = $instrumentRepository->find($id);
            $instrumentName = $instrumentToDelete->getName();
            if ($instrumentToDelete  === null) {
                throw $this->createNotFoundException('La ressource demandée n\'existe pas');
            }

            $em = $this->getDoctrine()->getManager();
            $em->remove($instrumentToDelete);
            $em->flush();

            $this->addFlash('success', 'Le style musicale ' . $instrumentName . ' a bien été supprimée');
            return $this->redirectToRoute('admin_instrument_list');
        } else {
            return new Response('Action interdite', 403);
        }
    }
}