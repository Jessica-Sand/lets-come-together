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
     * @Route("/instruments/{id}", name="instruments_users", methods={"GET"})
     */
    public function show($id, InstrumentRepository $instrumentRepository): Response
    {
        return $this->json($instrumentRepository->findOneBy(["id" => $id]), 200, [], [
            'groups' => 'instruments_users'
        ]);
    }

    /**
     * @Route("/instruments", name="instruments", methods={"GET"})
     */
    public function base(InstrumentRepository $instrumentRepository)
    {
        $allInstruments = [];

        $instruments = $instrumentRepository->findAll();
        
        foreach($instruments as$key => $currentInstrument ) {
            $icon = $currentInstrument->getIcon();
            $path = $_ENV['UPLOAD_FOLDER'] . '/' . $icon;
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

            $allInstruments[$key] = [
                'id' => $currentInstrument->getId(),
                'name' => $currentInstrument->getName(),
                'icon' => $base64
            ];
        }
        return $this->json($allInstruments);
    }
}
