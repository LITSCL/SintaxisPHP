<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/casa']], [], [], []],
    'animal' => [['nombre'], ['_controller' => 'App\\Controller\\HomeController::animal'], [], [['variable', '/', '[^/]++', 'nombre', true], ['text', '/animal']], [], [], []],
    'animales' => [[], ['_controller' => 'App\\Controller\\HomeController::animales'], [], [['text', '/animales']], [], [], []],
    'pelicula' => [['nombre'], ['nombre' => 'Django', '_controller' => 'App\\Controller\\HomeController::pelicula'], [], [['variable', '/', '[^/]++', 'nombre', true], ['text', '/pelicula']], [], [], []],
    'persona' => [['nombre', 'apellido', 'edad'], ['nombre' => 'Daniel', 'apellido' => 'Alvarez', 'edad' => '24', '_controller' => 'App\\Controller\\HomeController::persona'], ['nombre' => '[a-zA-Z]+', 'apellido' => '[a-zA-Z]+', 'edad' => '[0-9]+'], [['variable', '/', '[0-9]+', 'edad', true], ['variable', '/', '[a-zA-Z]+', 'apellido', true], ['variable', '/', '[a-zA-Z]+', 'nombre', true], ['text', '/persona']], [], [], []],
    'redirigir' => [[], ['_controller' => 'App\\Controller\\HomeController::redirigir'], [], [['text', '/redirigir']], [], [], []],
    'plantilla' => [[], ['_controller' => 'App\\Controller\\HomeController::plantilla'], [], [['text', '/plantilla']], [], [], []],
    'variable' => [[], ['_controller' => 'App\\Controller\\HomeController::variable'], [], [['text', '/variable']], [], [], []],
    'utilizando_include' => [[], ['_controller' => 'App\\Controller\\HomeController::utilizandoInclude'], [], [['text', '/utilizando-include']], [], [], []],
    'filtros' => [[], ['_controller' => 'App\\Controller\\HomeController::filtros'], [], [['text', '/filtros']], [], [], []],
    'juego' => [[], ['_controller' => 'App\\Controller\\JuegoController::index'], [], [['text', '/juego']], [], [], []],
    'juego_formulario_crear_juego' => [[], ['_controller' => 'App\\Controller\\JuegoController::formularioCrearJuego'], [], [['text', '/juego/formulario-crear-juego']], [], [], []],
    'juego_crear_juego' => [[], ['_controller' => 'App\\Controller\\JuegoController::crearJuego'], [], [['text', '/juego/crear-juego']], [], [], []],
    'juego_formulario_abstraido' => [[], ['_controller' => 'App\\Controller\\JuegoController::formularioAbstraido'], [], [['text', '/juego/formulario-abstraido']], [], [], []],
    'juego_validar_correo' => [['correo'], ['_controller' => 'App\\Controller\\JuegoController::validarCorreo'], [], [['variable', '/', '[^/]++', 'correo', true], ['text', '/juego/validar-correo']], [], [], []],
    'juego_save' => [[], ['_controller' => 'App\\Controller\\JuegoController::save'], [], [['text', '/juego/save']], [], [], []],
    'juego_find' => [['id'], ['_controller' => 'App\\Controller\\JuegoController::find'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/juego/find']], [], [], []],
    'juego_find_all' => [[], ['_controller' => 'App\\Controller\\JuegoController::findAll'], [], [['text', '/juego/find-all']], [], [], []],
    'juego_find_mejorado' => [['id'], ['_controller' => 'App\\Controller\\JuegoController::findMejorado'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/juego/find-mejorado']], [], [], []],
    'juego_get_all' => [[], ['_controller' => 'App\\Controller\\JuegoController::getAll'], [], [['text', '/juego/get-all']], [], [], []],
    'juego_update' => [['id'], ['_controller' => 'App\\Controller\\JuegoController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/juego/update']], [], [], []],
    'juego_delete' => [['id'], ['_controller' => 'App\\Controller\\JuegoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/juego/delete']], [], [], []],
    'juego_custom_query' => [[], ['_controller' => 'App\\Controller\\JuegoController::customQuery'], [], [['text', '/juego/custom-query']], [], [], []],
];