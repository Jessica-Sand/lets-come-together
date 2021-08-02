<?php
namespace App\Service\Mercure;

use Lcobucci\JWT\Builder;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key;
use Symfony\Component\Mercure\Jwt\TokenProviderInterface;

class JwtProvider implements TokenProviderInterface
{
   
    public function getJWT() : string
    {
        return 'unEsuperEJWTEquiEsertEaErien';
    }
/*
    public function __invoke(): string
    {
        $signer = new Sha256();

        return (new Builder())
            ->withClaim('mercure', ['publish' => ['*']])
            ->getToken($signer, new Key($this->key))
            ->__toString();
    }
    */
}
