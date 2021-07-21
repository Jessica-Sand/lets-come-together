<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/users", name="users_list", methods={"GET"})
     */
    public function list(UserRepository $userRepository): Response
    {
        // return $this->json($userRepository->findAll(), 200, [], [
        //     'groups' => 'User'
        // ]);

        return $this->json($userRepository->findAllActive(), 200, [], [
                'groups' => 'User',
            ]);
    }

    /**
     * @Route("/users/{username}", name="users", methods={"GET"})
     */
    public function show($username, UserRepository $userRepository): Response
    {
        $currentUser = $userRepository->findOneBy(['pseudo' => $username]);
        dd($currentUser->getGenres());
        return $this->json($userRepository->findOneBy(['pseudo' => $username]), 200, [], [
            'groups' => 'User'
        ]);
    }
}
