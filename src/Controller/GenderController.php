<?php

namespace App\Controller;

use App\Repository\GenderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/v1", name="api_v1_")
 */
class GenderController extends AbstractController
{
    /**
     * @Route("/genders", name="genders")
     */
    public function list(GenderRepository $genderRepository): Response
    {
        return $this->json($genderRepository->findAll(), 200, [], [
            'groups' => 'gender',
        ]);
    }

    /**
     * @Route("/genders/{id}", name="genders_users")
     */
    public function show($id, GenderRepository $genderRepository): Response
    {
        return $this->json($genderRepository->findOneBy(['id' => $id]),
        200, [], [
            'groups' => 'genders_user'
        ]);
    }
}
