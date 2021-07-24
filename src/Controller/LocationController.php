<?php

namespace App\Controller;

use App\Repository\LocationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/v1", name="api_v1_")
 */
class LocationController extends AbstractController
{
    /**
     * @Route("/locations", name="locations")
     */
    public function list(LocationRepository $locationRepository): Response
    {
        return $this->json($locationRepository->findAll(), 200, [], [
            'groups' => 'Locations'
        ]);
    }

    /**
     * @Route("/locations/{id}", name="locations_users")
     */
    public function show($id, LocationRepository $locationRepository): Response
    {
        return $this->json($locationRepository->findOneBy(['id' => $id]), 200, [], [
            'groups' => 'Locations_Users'
        ]);
    }
}
