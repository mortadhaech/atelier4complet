<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/classroom' => [[['_route' => 'app_classroom', '_controller' => 'App\\Controller\\ClassroomController::index'], null, null, null, false, false, null]],
        '/getclass' => [[['_route' => 'getclass', '_controller' => 'App\\Controller\\ClassroomController::list'], null, null, null, false, false, null]],
        '/Ajoutclass' => [[['_route' => 'Ajoutclass', '_controller' => 'App\\Controller\\ClassroomController::Ajout'], null, null, null, false, false, null]],
        '/club' => [[['_route' => 'app_club', '_controller' => 'App\\Controller\\ClubController::index'], null, null, null, false, false, null]],
        '/AjoutClub' => [[['_route' => 'AjoutClub', '_controller' => 'App\\Controller\\ClubController::Ajout'], null, null, null, false, false, null]],
        '/getClub' => [[['_route' => 'getClub', '_controller' => 'App\\Controller\\ClubController::list'], null, null, null, false, false, null]],
        '/student' => [[['_route' => 'app_student', '_controller' => 'App\\Controller\\StudentController::index'], null, null, null, false, false, null]],
        '/Ajoutstudent' => [[['_route' => 'Ajoutstudent', '_controller' => 'App\\Controller\\StudentController::Ajout'], null, null, null, false, false, null]],
        '/getstudent' => [[['_route' => 'getstudent', '_controller' => 'App\\Controller\\StudentController::list'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/edit(?'
                    .'|text/([^/]++)/([^/]++)(*:37)'
                    .'|student/([^/]++)/([^/]++)(*:69)'
                .')'
                .'|/delete(?'
                    .'|class/([^/]++)(*:101)'
                    .'|Club/([^/]++)(*:122)'
                    .'|Student/([^/]++)(*:146)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:186)'
                    .'|wdt/([^/]++)(*:206)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:252)'
                            .'|router(*:266)'
                            .'|exception(?'
                                .'|(*:286)'
                                .'|\\.css(*:299)'
                            .')'
                        .')'
                        .'|(*:309)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        37 => [[['_route' => 'edittext', '_controller' => 'App\\Controller\\ClassroomController::toedit'], ['id', 'name'], null, null, false, true, null]],
        69 => [[['_route' => 'editstudent', '_controller' => 'App\\Controller\\StudentController::toedit'], ['id', 'name'], null, null, false, true, null]],
        101 => [[['_route' => 'deleteclass', '_controller' => 'App\\Controller\\ClassroomController::delete'], ['id'], null, null, false, true, null]],
        122 => [[['_route' => 'deleteClub', '_controller' => 'App\\Controller\\ClubController::delete'], ['id'], null, null, false, true, null]],
        146 => [[['_route' => 'deleteStudent', '_controller' => 'App\\Controller\\StudentController::delete'], ['id'], null, null, false, true, null]],
        186 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        206 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        252 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        266 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        286 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        299 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        309 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
