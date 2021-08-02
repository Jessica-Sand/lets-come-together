<?php

namespace ContainerBYCKP23;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInstrumentTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\Type\InstrumentType' shared autowired service.
     *
     * @return \App\Form\Type\InstrumentType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Type/InstrumentType.php';

        return $container->privates['App\\Form\\Type\\InstrumentType'] = new \App\Form\Type\InstrumentType();
    }
}
