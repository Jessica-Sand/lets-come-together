<?php

namespace App\EventListener;

use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationSuccessEvent;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\SerializerInterface;

class AuthenticationSuccessListener
{
    private $serializer;

    public function __construct(SerializerInterface $serializer)
    {
            $this->serializer = $serializer;
    }

	/**
    * @param AuthenticationSuccessEvent $event
    */
    public function onAuthenticationSuccessResponse(AuthenticationSuccessEvent $event)
    {
        $data = $event->getData();
        $user = $event->getUser();
        // dd($user);
        $currentUser = $this->serializer->serialize($user, 'json', [
            'groups' => 'User'
        ]);

        if (!$user instanceof UserInterface) {
            return;
        }

        $data['data'] = array(
            'informationsUser' => $currentUser,
        );

        $event->setData($data);
    }
}