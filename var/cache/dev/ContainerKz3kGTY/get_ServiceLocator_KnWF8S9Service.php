<?php

namespace ContainerKz3kGTY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KnWF8S9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KnWF8S9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KnWF8S9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\BoardController::delete' => ['privates', '.service_locator.o05YJ10', 'get_ServiceLocator_O05YJ10Service', true],
            'App\\Controller\\BoardController::edit' => ['privates', '.service_locator.o05YJ10', 'get_ServiceLocator_O05YJ10Service', true],
            'App\\Controller\\BoardController::index' => ['privates', '.service_locator.0EhAcWq', 'get_ServiceLocator_0EhAcWqService', true],
            'App\\Controller\\BoardController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\BoardController::show' => ['privates', '.service_locator._ci19II', 'get_ServiceLocator_Ci19IIService', true],
            'App\\Controller\\CardController::delete' => ['privates', '.service_locator..6SvVxo', 'get_ServiceLocator__6SvVxoService', true],
            'App\\Controller\\CardController::edit' => ['privates', '.service_locator..6SvVxo', 'get_ServiceLocator__6SvVxoService', true],
            'App\\Controller\\CardController::index' => ['privates', '.service_locator.XMvI1C7', 'get_ServiceLocator_XMvI1C7Service', true],
            'App\\Controller\\CardController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CardController::show' => ['privates', '.service_locator.yWKRIBu', 'get_ServiceLocator_YWKRIBuService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.HT4rftb', 'get_ServiceLocator_HT4rftbService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\StepController::delete' => ['privates', '.service_locator.4sSJBxJ', 'get_ServiceLocator_4sSJBxJService', true],
            'App\\Controller\\StepController::edit' => ['privates', '.service_locator.4sSJBxJ', 'get_ServiceLocator_4sSJBxJService', true],
            'App\\Controller\\StepController::index' => ['privates', '.service_locator.Gl2VDE7', 'get_ServiceLocator_Gl2VDE7Service', true],
            'App\\Controller\\StepController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\StepController::show' => ['privates', '.service_locator.vFPpsTO', 'get_ServiceLocator_VFPpsTOService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\BoardController:delete' => ['privates', '.service_locator.o05YJ10', 'get_ServiceLocator_O05YJ10Service', true],
            'App\\Controller\\BoardController:edit' => ['privates', '.service_locator.o05YJ10', 'get_ServiceLocator_O05YJ10Service', true],
            'App\\Controller\\BoardController:index' => ['privates', '.service_locator.0EhAcWq', 'get_ServiceLocator_0EhAcWqService', true],
            'App\\Controller\\BoardController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\BoardController:show' => ['privates', '.service_locator._ci19II', 'get_ServiceLocator_Ci19IIService', true],
            'App\\Controller\\CardController:delete' => ['privates', '.service_locator..6SvVxo', 'get_ServiceLocator__6SvVxoService', true],
            'App\\Controller\\CardController:edit' => ['privates', '.service_locator..6SvVxo', 'get_ServiceLocator__6SvVxoService', true],
            'App\\Controller\\CardController:index' => ['privates', '.service_locator.XMvI1C7', 'get_ServiceLocator_XMvI1C7Service', true],
            'App\\Controller\\CardController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CardController:show' => ['privates', '.service_locator.yWKRIBu', 'get_ServiceLocator_YWKRIBuService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.HT4rftb', 'get_ServiceLocator_HT4rftbService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\StepController:delete' => ['privates', '.service_locator.4sSJBxJ', 'get_ServiceLocator_4sSJBxJService', true],
            'App\\Controller\\StepController:edit' => ['privates', '.service_locator.4sSJBxJ', 'get_ServiceLocator_4sSJBxJService', true],
            'App\\Controller\\StepController:index' => ['privates', '.service_locator.Gl2VDE7', 'get_ServiceLocator_Gl2VDE7Service', true],
            'App\\Controller\\StepController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\StepController:show' => ['privates', '.service_locator.vFPpsTO', 'get_ServiceLocator_VFPpsTOService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\BoardController::delete' => '?',
            'App\\Controller\\BoardController::edit' => '?',
            'App\\Controller\\BoardController::index' => '?',
            'App\\Controller\\BoardController::new' => '?',
            'App\\Controller\\BoardController::show' => '?',
            'App\\Controller\\CardController::delete' => '?',
            'App\\Controller\\CardController::edit' => '?',
            'App\\Controller\\CardController::index' => '?',
            'App\\Controller\\CardController::new' => '?',
            'App\\Controller\\CardController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\StepController::delete' => '?',
            'App\\Controller\\StepController::edit' => '?',
            'App\\Controller\\StepController::index' => '?',
            'App\\Controller\\StepController::new' => '?',
            'App\\Controller\\StepController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\BoardController:delete' => '?',
            'App\\Controller\\BoardController:edit' => '?',
            'App\\Controller\\BoardController:index' => '?',
            'App\\Controller\\BoardController:new' => '?',
            'App\\Controller\\BoardController:show' => '?',
            'App\\Controller\\CardController:delete' => '?',
            'App\\Controller\\CardController:edit' => '?',
            'App\\Controller\\CardController:index' => '?',
            'App\\Controller\\CardController:new' => '?',
            'App\\Controller\\CardController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\StepController:delete' => '?',
            'App\\Controller\\StepController:edit' => '?',
            'App\\Controller\\StepController:index' => '?',
            'App\\Controller\\StepController:new' => '?',
            'App\\Controller\\StepController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
