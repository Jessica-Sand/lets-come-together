<?php

namespace App\Controller;

use App\Entity\Channel;
use App\Repository\ChannelRepository;
use App\Repository\MessageRepository;
use App\Service\CookieJwtProvider;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Response as BrowserKitResponse;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\WebLink\Link;

/**
 * @Route("/api/v1", name="api_v1_")
 */
class ChannelController extends AbstractController
{
    /**
     * @Route("/channel/{id}", name="channel_id", requirements={"id"="\d+"}, methods={"GET"})
     */
    public function getChannelMessages($id, ChannelRepository $channelRepository, MessageRepository $messageRepository): Response
    {

        $messages = $messageRepository->findAll(['channel_id' => $id]);

        return $this->json($messages, 200, [], [
            'groups' => 'channel'
        ]);
    }

    /**
     * @Route("/channel", name="channel", methods={"POST"})
     */
    public function getChannels(ChannelRepository $channelRepository, Request $request, EntityManagerInterface $em): Response
    {
        // $channels = $channelRepository->findAll();
        
        // return $this->render('channel/index.html.twig', [
        //     'channels' => $channels ?? [],
        // ]);

        $data = \json_decode($request->getContent(), true); // deserialize the data posted and recovered
        
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

        return $this->json($channel->getId(), 200, []);
    }

    // /**
    //  * @Route("/chat/{user}", name="chat", requirements={"id"="\d+"})
    //  */
    // public function chat(Request $request, Channel $channel, MessageRepository $messageRepository, CookieJwtProvider $cookieJwtProvider): Response
    // {
    //     $messages = $messageRepository->findBy([
    //         'channel' => $channel
    //     ], ['created_at' => 'ASC']);

    //     $hubUrl = $this->getParameter('mercure.default_hub'); // Mercure automatically define this parameter
    //     $this->addLink($request, new Link('mercure', $hubUrl));

    //      $response = $this->render('channel/chat.html.twig', [
    //         'channel' => $channel,
    //         'messages' => $messages
    //     ]);
        
    //     $response->headers->setCookie(
    //         Cookie::create(
    //             'mercureAuthorization',
    //             $cookieJwtProvider($channel),
    //             new \DateTime('+1day'),
    //             '/.well-known/mercure'
    //         )
    //     );
    //     return $response;
    // }

    
}   