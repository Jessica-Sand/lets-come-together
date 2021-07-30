<?php

namespace App\Controller;

use App\Entity\UserRequest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * @Route("/api/v1", name="api_v1_")
 */
class RequestUserController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request, SerializerInterface $serializer, ValidatorInterface $validator): Response
    {
        $jsonData = $request->getContent();

        $userRequest = $serializer->deserialize($jsonData, UserRequest::class, 'json');
        $errors = $validator->validate($userRequest);
        if (count($errors) > 0) {
            return $this->json(
                [
                    'message' => $errors
                ],
                500
            );
        }else{
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($userRequest);
            $entityManager->flush();
        
            return $this->json(
                [
                    'message' => 'La requête a bien été transmise'
                ],
                201
            );
             
            
        }
    }
}
