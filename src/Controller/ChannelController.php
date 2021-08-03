<?php

namespace App\Controller;

use App\Entity\Channel;
use App\Repository\ChannelRepository;
use App\Repository\MessageRepository;
use App\Service\CookieJwtProvider;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Response as BrowserKitResponse;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\WebLink\Link;

class ChannelController extends AbstractController
{
    /**
     * @Route("/channel", name="channel")
     */
    public function getChannels(ChannelRepository $channelRepository): Response
    {
        // $channels = $channelRepository->findAll();
        
        // return $this->render('channel/index.html.twig', [
        //     'channels' => $channels ?? [],
        // ]);

        return $this->json($channelRepository->findAll(), 200, [], [
            'groups' => 'message'
        ]);
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

    /**
     * @Route("/channel/{id}", name="channel", requirements={"id"="\d+"})
     */
    public function chat($id, ChannelRepository $channelRepository): Response
    {
        return $this->json($channelRepository->findOneBy(['id' => $id]), 200, [], [
            'groups' => 'channel'
        ]);
    }
}   