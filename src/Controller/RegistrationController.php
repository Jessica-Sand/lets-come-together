<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/register", name="app_register", methods={"POST"})
     */
    public function register(Request $request, UserPasswordHasherInterface $passwordHasher, SerializerInterface $serializer, ValidatorInterface $validator): Response
    {

        $JsonData = $request->getContent();
        $user = $serializer->deserialize($JsonData, User::class, 'json');
        $errors = $validator->validate($user);
        if (count($errors) > 0) {
            return $this->json(
                [
                    'message' => 'Erreur lors de l\'envoi du formulaire'
                ],
                500
            );
        }else{
            $user->setPassword($passwordHasher->hashPassword($user, $user->getPassword()));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->json(
                [
                    'message' => 'L\'utilisateur ' . $user->getPseudo() . 'à bien été créer'
                ],
                201
            );
        }
    }
}
