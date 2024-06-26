<?php

namespace ContainerPYWgv6m;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YWKRIBuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yWKRIBu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yWKRIBu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'card' => ['privates', '.errored..service_locator.yWKRIBu.App\\Entity\\Card', NULL, 'Cannot autowire service ".service_locator.yWKRIBu": it needs an instance of "App\\Entity\\Card" but this type has been excluded in "config/services.yaml".'],
        ], [
            'card' => 'App\\Entity\\Card',
        ]);
    }
}
