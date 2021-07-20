<?php

namespace App\Controller;

use App\Repository\InstrumentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
     * @Route("/instruments/{name}", name="instruments_users", methods={"GET"})
     */
    public function show($name, InstrumentRepository $instrumentRepository): Response
    {
        return $this->json($instrumentRepository->findOneBy(["name" => $name]), 200, [], [
            'groups' => 'instruments_users'
        ]);
    }
}
