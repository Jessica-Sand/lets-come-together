<?php

namespace ContainerPZzbAxJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMercure_Hub_Default_TraceableService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'mercure.hub.default.traceable' shared service.
     *
     * @return \Symfony\Component\Mercure\Debug\TraceableHub
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mercure/src/HubInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mercure/src/Debug/TraceableHub.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mercure/src/Hub.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mercure/src/Jwt/TokenProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mercure/src/Jwt/FactoryTokenProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mercure/src/Jwt/TokenFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mercure/src/Jwt/LcobucciFactory.php';

        $a = new \Symfony\Component\Mercure\Jwt\LcobucciFactory($container->getEnv('MERCURE_JWT_SECRET'), 'hmac.sha256');

        return $container->privates['mercure.hub.default.traceable'] = new \Symfony\Component\Mercure\Debug\TraceableHub(new \Symfony\Component\Mercure\Hub($container->getEnv('MERCURE_PUBLISH_URL'), new \Symfony\Component\Mercure\Jwt\FactoryTokenProvider($a, [], [0 => '*']), $a, $container->getEnv('MERCURE_PUBLISH_URL'), ($container->privates['.debug.http_client'] ?? $container->get_Debug_HttpClientService())), ($container->privates['debug.stopwatch'] ?? ($container->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }
}