<?php

namespace App\Controller;

use App\Repository\LocationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LocationController extends AbstractController
{
    /**
     * @Route("/locations", name="locations")
     */
    public function index(LocationRepository $locationRepository): Response
    {
        return $this->json($locationRepository->findAll(), 200, [], [
            'groups' => 'Locations'
        ]);
    }

    /**
     * @Route("/locations/{name}", name="locations_users")
     */
    public function show($name, LocationRepository $locationRepository): Response
    {
        return $this->json($locationRepository->findOneBy(['name' => $name]), 200, [], [
            'groups' => 'Locations_Users'
        ]);
    }
}
