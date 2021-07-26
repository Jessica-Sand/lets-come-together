<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

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
    public function show($id, UserRepository $userRepository): Response
    {
        return $this->json($userRepository->findOneBy(['id' => $id]), 200, [], [
            'groups' => 'User'
        ]);
    }

    /**
     * @Route("/users/{id}/edit", name="users_edit", methods={"PUT|PATCH"})
     */
    public function edit($id, Request $request, SerializerInterface $serializer, ValidatorInterface $validator)
    {

    }
}