<?php
namespace App\Service;

use App\Entity\Channel;
use Lcobucci\JWT\Builder;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\Mercure\Jwt\TokenProviderInterface;

class CookieJwtProvider implements TokenProviderInterface
{
    public function getJWT() : string
    {
        return 'unEsuperEJWTEquiEsertEaErien';
    }

    // private string $key;

    // public function __construct(string $secret)
    // {
    //     $this->key = $secret;
    // }

    // public function __invoke(Channel $channel): string
    // {
    //     $signer = new Sha256();
    //     return (new Builder())
    //         ->withClaim('mercure', ['subscribe' => [sprintf('http://astrochat.com/channel/%s', $channel->getId())]]) // Attention le claim est différent qu'avec le JWTProvider. Ici on précise le topic privé que l'on souhaite avec le droit "d'accès"
    //         ->getToken($signer, new Key($this->key))
    //         ->__toString()
    //         ;
    // }
}