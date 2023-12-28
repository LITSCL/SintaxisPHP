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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/casa' => [[['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/animales' => [[['_route' => 'animales', '_controller' => 'App\\Controller\\HomeController::animales'], null, null, null, false, false, null]],
        '/redirigir' => [[['_route' => 'redirigir', '_controller' => 'App\\Controller\\HomeController::redirigir'], null, null, null, false, false, null]],
        '/plantilla' => [[['_route' => 'plantilla', '_controller' => 'App\\Controller\\HomeController::plantilla'], null, null, null, false, false, null]],
        '/variable' => [[['_route' => 'variable', '_controller' => 'App\\Controller\\HomeController::variable'], null, null, null, false, false, null]],
        '/utilizando-include' => [[['_route' => 'utilizando_include', '_controller' => 'App\\Controller\\HomeController::utilizandoInclude'], null, null, null, false, false, null]],
        '/filtros' => [[['_route' => 'filtros', '_controller' => 'App\\Controller\\HomeController::filtros'], null, null, null, false, false, null]],
        '/juego' => [[['_route' => 'juego', '_controller' => 'App\\Controller\\JuegoController::index'], null, null, null, false, false, null]],
        '/juego/formulario-crear-juego' => [[['_route' => 'juego_formulario_crear_juego', '_controller' => 'App\\Controller\\JuegoController::formularioCrearJuego'], null, null, null, false, false, null]],
        '/juego/crear-juego' => [[['_route' => 'juego_crear_juego', '_controller' => 'App\\Controller\\JuegoController::crearJuego'], null, ['POST' => 0], null, false, false, null]],
        '/juego/formulario-abstraido' => [[['_route' => 'juego_formulario_abstraido', '_controller' => 'App\\Controller\\JuegoController::formularioAbstraido'], null, null, null, false, false, null]],
        '/juego/save' => [[['_route' => 'juego_save', '_controller' => 'App\\Controller\\JuegoController::save'], null, null, null, false, false, null]],
        '/juego/find-all' => [[['_route' => 'juego_find_all', '_controller' => 'App\\Controller\\JuegoController::findAll'], null, null, null, false, false, null]],
        '/juego/get-all' => [[['_route' => 'juego_get_all', '_controller' => 'App\\Controller\\JuegoController::getAll'], null, null, null, false, false, null]],
        '/juego/custom-query' => [[['_route' => 'juego_custom_query', '_controller' => 'App\\Controller\\JuegoController::customQuery'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/animal/([^/]++)(*:184)'
                .'|/pe(?'
                    .'|licula(?:/([^/]++))?(*:218)'
                    .'|rsona(?:/([a-zA-Z]+)(?:/([a-zA-Z]+)(?:/([0-9]+))?)?)?(*:279)'
                .')'
                .'|/juego/(?'
                    .'|validar\\-correo/([^/]++)(*:322)'
                    .'|find(?'
                        .'|/([^/]++)(*:346)'
                        .'|\\-mejorado/([^/]++)(*:373)'
                    .')'
                    .'|update/([^/]++)(*:397)'
                    .'|delete/([^/]++)(*:420)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        184 => [[['_route' => 'animal', '_controller' => 'App\\Controller\\HomeController::animal'], ['nombre'], null, null, false, true, null]],
        218 => [[['_route' => 'pelicula', 'nombre' => 'Django', '_controller' => 'App\\Controller\\HomeController::pelicula'], ['nombre'], null, null, false, true, null]],
        279 => [[['_route' => 'persona', 'nombre' => 'Daniel', 'apellido' => 'Alvarez', 'edad' => '24', '_controller' => 'App\\Controller\\HomeController::persona'], ['nombre', 'apellido', 'edad'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        322 => [[['_route' => 'juego_validar_correo', '_controller' => 'App\\Controller\\JuegoController::validarCorreo'], ['correo'], null, null, false, true, null]],
        346 => [[['_route' => 'juego_find', '_controller' => 'App\\Controller\\JuegoController::find'], ['id'], null, null, false, true, null]],
        373 => [[['_route' => 'juego_find_mejorado', '_controller' => 'App\\Controller\\JuegoController::findMejorado'], ['id'], null, null, false, true, null]],
        397 => [[['_route' => 'juego_update', '_controller' => 'App\\Controller\\JuegoController::update'], ['id'], null, null, false, true, null]],
        420 => [
            [['_route' => 'juego_delete', '_controller' => 'App\\Controller\\JuegoController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
