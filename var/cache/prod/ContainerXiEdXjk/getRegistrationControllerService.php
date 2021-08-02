<?php

namespace ContainerXiEdXjk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistrationControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\RegistrationController' shared autowired service.
     *
     * @return \App\Controller\RegistrationController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\RegistrationController'] = $instance = new \App\Controller\RegistrationController(($container->privates['App\\Repository\\LocationRepository'] ?? $container->load('getLocationRepositoryService')), ($container->privates['App\\Repository\\GenreRepository'] ?? $container->load('getGenreRepositoryService')), ($container->privates['App\\Repository\\InstrumentRepository'] ?? $container->load('getInstrumentRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\RegistrationController', $container));

        return $instance;
    }
}
