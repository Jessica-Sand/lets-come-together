<?php

namespace App\Controller;

use App\Entity\Message;
use App\Repository\ChannelRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class MessageController extends AbstractController
{
    /**
     * @Route("/message", name="message", methods={"POST"})
     */
    public function sendMessage(Request $request, ChannelRepository $channelRepository, SerializerInterface $serializer, EntityManagerInterface $em): JsonResponse
    {
        $data = \json_decode($request->getContent(), true); // deserialize the data posted and recovered
        if (empty($content = $data['content'])) {
            throw new AccessDeniedHttpException('No data sent');
        }

        $channel = $channelRepository->findOneBy([
            'id' => $data['channel'] // try to find which channel the message comes from 
        ]);
        if (!$channel) {
            throw new AccessDeniedHttpException('Message have to be sent on a specific channel');
        }

        $message = new Message(); // after validation, create the new message
        $message->setContent($content);
        $message->setChannel($channel);
        $message->setAuthor($this->getUser()); // give them the name of the current user 

        $em->persist($message);
        $em->flush(); // saved it in the DB

        $jsonMessage = $serializer->serialize($message, 'json', [
            'groups' => ['message'] // serialize the response before to send it
        ]);

        return new JsonResponse( // return the response
            $jsonMessage,
            Response::HTTP_OK,
            [],
            true);
    }
}
