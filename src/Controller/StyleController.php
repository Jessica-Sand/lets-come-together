<?php

namespace App\Controller;

use App\Repository\StyleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/v1", name="api_v1_")
 */
class StyleController extends AbstractController
{
    /**
     * @Route("/styles", name="styles")
     */
    public function list(StyleRepository $styleRepository): Response
    {
        return $this->json($styleRepository->findAll(), 200, [], [
            'groups' => 'styles'
        ]);
    }

    /**
     * @Route("/styles/{id}", name="styles_users")
     */
    public function show($id, StyleRepository $styleRepository): Response
    {
        return $this->json($styleRepository->findOneBy(['id' => $id]), 200, [], [
            'groups' => 'styles_User'
        ]);
    }
}
