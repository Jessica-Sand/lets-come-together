<?php

namespace ContainerXiEdXjk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_FormDebugService extends App_KernelProdContainer
{
    /*
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'App\\Form\\Type', 3 => 'Symfony\\Bridge\\Doctrine\\Form\\Type'], [0 => 'App\\Form\\RegistrationFormType', 1 => 'App\\Form\\RegistrationUserAppType', 2 => 'App\\Form\\Type\\GenreType', 3 => 'App\\Form\\Type\\InstrumentType', 4 => 'App\\Form\\Type\\UserType', 5 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 6 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 7 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 8 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType', 9 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($container->privates['debug.file_link_formatter'] ?? ($container->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:form');
        $instance->setDescription('Display form type information');

        return $instance;
    }
}
