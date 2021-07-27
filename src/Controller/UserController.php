<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
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
    public function edit(User $user, Request $request, SerializerInterface $serializer, ValidatorInterface $validator)
    {
       $jsonData = $request->getContent();

       $user = $serializer->deserialize($jsonData, User::class, 'json', [AbstractNormalizer::OBJECT_TO_POPULATE => $user]);

       $errors = $validator->validate($user);

       if(count($errors) == 0) {
           // no error we can saved it in the entity
           $this->getDoctrine()->getManager()->flush();

           return $this->json([
               'message' => 'Le compte à bien été mis à jour'
           ]);
        }

        // if error
        return $this->json([
            'errors' => (string) $errors
        ], 400);
    }
}