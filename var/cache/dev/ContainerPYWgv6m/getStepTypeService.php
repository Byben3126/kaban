<?php

namespace ContainerPYWgv6m;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStepTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\StepType' shared autowired service.
     *
     * @return \App\Form\StepType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/StepType.php';

        return $container->privates['App\\Form\\StepType'] = new \App\Form\StepType();
    }
}
