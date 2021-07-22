<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/v1", name="api_v1_")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/users", name="users_list", methods={"GET"})
     */
    public function list(UserRepository $userRepository): Response
    {
        return $this->json($userRepository->findAllActive(), 200, [], [
                'groups' => 'User',
            ]);
    }

    /**
     * @Route("/users/{id}", name="users_show", methods={"GET"})
     */
    public function show($username, UserRepository $userRepository): Response
    {
        return $this->json($userRepository->findOneBy(['pseudo' => $username]), 200, [], [
            'groups' => 'User'
        ]);
    }
}
