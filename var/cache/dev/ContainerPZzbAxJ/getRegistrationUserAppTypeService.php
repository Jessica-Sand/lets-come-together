<?php

namespace ContainerPZzbAxJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistrationUserAppTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\RegistrationUserAppType' shared autowired service.
     *
     * @return \App\Form\RegistrationUserAppType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/RegistrationUserAppType.php';

        return $container->privates['App\\Form\\RegistrationUserAppType'] = new \App\Form\RegistrationUserAppType(($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')));
    }
}
