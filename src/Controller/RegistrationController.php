<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Repository\InstrumentRepository;
use App\Repository\DepartmentRepository;
use App\Repository\StyleRepository;
use App\Repository\UserRepository;
use App\Service\Mailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class RegistrationController extends AbstractController
{
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @Route("/register", name="app_register", methods={"POST"})
     */
    public function register(Request $request, UserPasswordHasherInterface $passwordHasher, SerializerInterface $serializer, ValidatorInterface $validator): Response
    {
        // recuperation of the UserData
        $JsonData = $request->getContent();

        $user = $serializer->deserialize($JsonData, User::class, 'json');
        $errors = $validator->validate($user);
        if (count($errors) > 0) {
            return $this->json(
                [
                    'message' => $errors
                ],
                500
            );
        }else{
            // dd($user);
            $user->setPassword($passwordHasher->hashPassword($user, $user->getPassword()));
            $user->setEmailToken($this->generateToken());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            $this->mailer->sendEmail($user->getEmail(), $user->getEmailToken());
        
            return $this->json(
                [
                    'message' => 'Votre compte à bien été créé'
                ],
                201
            );
             
            
        }
    }

    /**
     * @return string
     */
    private function generateToken()
    {
        $token = openssl_random_pseudo_bytes(16);
        
        return bin2hex($token);
    }

    /**
     * @route("/confirm-account/{token}", name="confirm-account")
     *
     * @return void
     */
    public function confirmAccount($token, UserRepository $userRepository)
    {
        $user = $userRepository->findOneBy(['EmailToken' => $token]);

        if($user){
            $user->setEmailToken(null);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

            return $this->redirect('https://symfony.com/doc/2.6/cookbook/routing/redirect_trailing_slash.html');
        }
    }
}
