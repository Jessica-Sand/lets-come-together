<?php

namespace App\Controller;

use App\Repository\InstrumentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/v1", name="api_v1_")
 */
class InstrumentController extends AbstractController
{
    /**
     * @Route("/instruments", name="instruments", methods={"GET"})
     */
    public function list(InstrumentRepository $instrumentRepository): Response
    {
        return $this->json($instrumentRepository->findAll(), 200, [], [
            'groups' => 'instruments'
        ]);
    }

    /**
     * @Route("/instruments/{id}", name="instruments_users", methods={"GET"})
     */
    public function show($id, InstrumentRepository $instrumentRepository): Response
    {
        return $this->json($instrumentRepository->findOneBy(["id" => $id]), 200, [], [
            'groups' => 'instruments_users'
        ]);
    }
}
