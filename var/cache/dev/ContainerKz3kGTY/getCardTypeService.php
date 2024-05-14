<?php

namespace ContainerKz3kGTY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCardTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\CardType' shared autowired service.
     *
     * @return \App\Form\CardType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/CardType.php';

        return $container->privates['App\\Form\\CardType'] = new \App\Form\CardType();
    }
}