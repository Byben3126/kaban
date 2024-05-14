<?php

namespace ContainerKz3kGTY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStepControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\StepController' shared autowired service.
     *
     * @return \App\Controller\StepController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/StepController.php';

        $container->services['App\\Controller\\StepController'] = $instance = new \App\Controller\StepController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\StepController', $container));

        return $instance;
    }
}
