<?php

namespace App\Controller;

use App\Entity\Channel;
use App\Entity\Message;
use App\Repository\UserRepository;
use App\Repository\ChannelRepository;
use App\Repository\MessageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Mercure\Update;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @Route("/api/v1", name="api_v1_")
 */
class MessageController extends AbstractController
{
    /**
     * @Route("/message", name="message", methods={"POST"})
     */
    public function sendMessage(UserRepository $userRepository, Request $request, ChannelRepository $channelRepository, SerializerInterface $serializer, EntityManagerInterface $em, HubInterface $publisher): JsonResponse
    {
        $data = \json_decode($request->getContent(), true); // deserialize the data posted and recovered
        if (empty($content = $data['content'])) {
            throw new AccessDeniedHttpException('No data sent');
        }
        
        // finding a channel name concatenate with the ids of 2 users
        // $data['channel'] = >  $data['senderId'] + $data['receiverId'] exemple : 12 ou 21
        //     $data['channel'] = >  idSender+idReceiver
        //     $data['channel'] = >  idReceiver+idSender
        $channel = $channelRepository->findByUsers($data['senderId'],$data['receiverId']);

        if (!$channel) { // if there is no channel with this name
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
        $author = $userRepository->find($data['senderId']);
        $message->setAuthor($author); // give them the name of the current user 

        $em->persist($message);
        $em->flush(); // saved it in the DB
       

        $jsonMessage = $serializer->serialize($message, 'json', [
            'groups' => ['message'] // serialize the response before to send it
        ]);

        $update = new Update( // creation of a new update
            sprintf('http://ec2-52-54-175-183.compute-1.amazonaws.com/api/v1/channel/%d', // the topic with the id of the channel
                $channel->getId()),
                $jsonMessage, // pass the serializer message in content value
        );
        try {
            $publisher->publish($update); // the Publisher is an invokable service. You can publish the update directly like this
    
        } catch (\Exception $e) {
            dd($e);
        }
    
        
        return new JsonResponse( // return the response
            $jsonMessage,
            Response::HTTP_OK,
            [],
            true);
    }

    /**
     * @Route("/message/{author_id}", name="author_message", methods={"GET"})
     */
    public function getAllMessage($author_id, MessageRepository $messageRepository)
    {
        $messages = $messageRepository->findBy(['author' => $author_id]);

        return $this->json($messages, 200, [], [
            'groups' => 'message'
        ]);
    }

    /**
     * @Route("/message/channel/{author_id}", name="author_channel_message", methods={"GET"})
     */
    public function getAllChannelMessage($author_id, MessageRepository $messageRepository)
    {
        $messages = $messageRepository->findByAuthor($author_id);

        return $this->json($messages, 200, [], [
            'groups' => 'message'
        ]);
    }
}