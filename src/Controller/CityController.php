<?php

namespace App\Controller;

use App\Repository\CityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/v1", name="api_v1_")
 */
class CityController extends AbstractController
{
    /**
     * @Route("/cities", name="cities")
     */
    public function list(CityRepository $cityRepository): Response
    {
        return $this->json($cityRepository->findAll(), 200, [], [
            'groups' => 'cities'
        ]);
    }

    /**
     * @Route("/cities/{id}", name="cities_users")
     */
    public function show($id, CityRepository $cityRepository): Response
    {
        return $this->json($cityRepository->findOneBy(['id' => $id]),
        200, [], [
            'groups' => 'cities_user'
        ]);
    }
}