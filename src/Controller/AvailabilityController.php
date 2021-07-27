<?php

namespace App\Controller;

use App\Repository\AvailabilityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/v1", name="api_v1_")
 */
class AvailabilityController extends AbstractController
{
    /**
     * @Route("/availabilities", name="availabilities")
     */
    public function list(AvailabilityRepository $availabilityRepository): Response
    {
        return $this->json($availabilityRepository->findAll(), 200, [], [
            'groups' => 'Availabilities'
        ]);
    }

    /**
     * @Route("/availabilities/{id}", name="availabilities_users")
     */
    public function show($id, AvailabilityRepository $availabilityRepository): Response
    {
        return $this->json($availabilityRepository->findOneBy(['id' => $id]),
        200, [], [
            'groups' => 'Availabilities_User'
        ]);
    }
}
