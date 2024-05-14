<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/board' => [[['_route' => 'app_board_index', '_controller' => 'App\\Controller\\BoardController::index'], null, ['GET' => 0], null, true, false, null]],
        '/board/new' => [[['_route' => 'app_board_new', '_controller' => 'App\\Controller\\BoardController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/card' => [[['_route' => 'app_card_index', '_controller' => 'App\\Controller\\CardController::index'], null, ['GET' => 0], null, true, false, null]],
        '/card/new' => [[['_route' => 'app_card_new', '_controller' => 'App\\Controller\\CardController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/step' => [[['_route' => 'app_step_index', '_controller' => 'App\\Controller\\StepController::index'], null, ['GET' => 0], null, true, false, null]],
        '/step/new' => [[['_route' => 'app_step_new', '_controller' => 'App\\Controller\\StepController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/board/([^/]++)(?'
                    .'|(*:220)'
                    .'|/edit(*:233)'
                    .'|(*:241)'
                .')'
                .'|/card/([^/]++)(?'
                    .'|(*:267)'
                    .'|/edit(*:280)'
                    .'|(*:288)'
                .')'
                .'|/step/([^/]++)(?'
                    .'|(*:314)'
                    .'|/edit(*:327)'
                    .'|(*:335)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        220 => [[['_route' => 'app_board_show', '_controller' => 'App\\Controller\\BoardController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        233 => [[['_route' => 'app_board_edit', '_controller' => 'App\\Controller\\BoardController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        241 => [[['_route' => 'app_board_delete', '_controller' => 'App\\Controller\\BoardController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        267 => [[['_route' => 'app_card_show', '_controller' => 'App\\Controller\\CardController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        280 => [[['_route' => 'app_card_edit', '_controller' => 'App\\Controller\\CardController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        288 => [[['_route' => 'app_card_delete', '_controller' => 'App\\Controller\\CardController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        314 => [[['_route' => 'app_step_show', '_controller' => 'App\\Controller\\StepController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        327 => [[['_route' => 'app_step_edit', '_controller' => 'App\\Controller\\StepController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        335 => [
            [['_route' => 'app_step_delete', '_controller' => 'App\\Controller\\StepController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
