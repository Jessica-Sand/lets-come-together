<?php

namespace App\Controller;

use App\Entity\Channel;
use App\Entity\Message;
use App\Repository\ChannelRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Mercure\PublisherInterface;
use Symfony\Component\Mercure\Update;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class MessageController extends AbstractController
{
    /**
     * @Route("/message", name="message", methods={"POST"})
     */
    public function sendMessage(Request $request, ChannelRepository $channelRepository, SerializerInterface $serializer, EntityManagerInterface $em, PublisherInterface $publisher): JsonResponse
    {
        $data = \json_decode($request->getContent(), true); // deserialize the data posted and recovered
        if (empty($content = $data['content'])) {
            throw new AccessDeniedHttpException('No data sent');
        }

        // $data['channel'] = >  $data['senderId'] + $data['receiverId'] ex 12 ou 21
            // $data['channel'] = >  idSender+idReceiver
            // $data['channel'] = >  idReceiver+idSender
        $channel = $channelRepository->findByUsers($data['senderId'],$data['receiverId']);

        if (!$channel) {
             // need to create a channel
             $channel = new Channel();
             $channel->setName("".$data['senderId'].$data['receiverId']); 
             $em->persist($channel);
            $em->flush(); // saved it in the DB  
            //throw new AccessDeniedHttpException('Message have to be sent on a specific channel');
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

        $update = new Update( // creation of a new update
            sprintf('http://localhost:8080/message', // the topic with the id of the channel
                $channel->getId()),
                $jsonMessage, // pass the serializer message in content value
                true // update private
        );
        $publisher($update); // the Publisher is an invokable service. You can publish the update directly like this

        return new JsonResponse( // return the response
            $jsonMessage,
            Response::HTTP_OK,
            [],
            true);
    }
}
