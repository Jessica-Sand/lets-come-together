<?php

namespace ContainerNhLk1mM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCookieJwtProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\CookieJwtProvider' shared autowired service.
     *
     * @return \App\Service\CookieJwtProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mercure/src/Jwt/TokenProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Service/CookieJwtProvider.php';

        return $container->privates['App\\Service\\CookieJwtProvider'] = new \App\Service\CookieJwtProvider();
    }
}
