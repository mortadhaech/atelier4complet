<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_classroom' => [[], ['_controller' => 'App\\Controller\\ClassroomController::index'], [], [['text', '/classroom']], [], [], []],
    'getclass' => [[], ['_controller' => 'App\\Controller\\ClassroomController::list'], [], [['text', '/getclass']], [], [], []],
    'Ajoutclass' => [[], ['_controller' => 'App\\Controller\\ClassroomController::Ajout'], [], [['text', '/Ajoutclass']], [], [], []],
    'edittext' => [['id', 'name'], ['_controller' => 'App\\Controller\\ClassroomController::toedit'], [], [['variable', '/', '[^/]++', 'name', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/edittext']], [], [], []],
    'deleteclass' => [['id'], ['_controller' => 'App\\Controller\\ClassroomController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteclass']], [], [], []],
    'app_club' => [[], ['_controller' => 'App\\Controller\\ClubController::index'], [], [['text', '/club']], [], [], []],
    'AjoutClub' => [[], ['_controller' => 'App\\Controller\\ClubController::Ajout'], [], [['text', '/AjoutClub']], [], [], []],
    'deleteClub' => [['id'], ['_controller' => 'App\\Controller\\ClubController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteClub']], [], [], []],
    'getClub' => [[], ['_controller' => 'App\\Controller\\ClubController::list'], [], [['text', '/getClub']], [], [], []],
    'app_student' => [[], ['_controller' => 'App\\Controller\\StudentController::index'], [], [['text', '/student']], [], [], []],
    'Ajoutstudent' => [[], ['_controller' => 'App\\Controller\\StudentController::Ajout'], [], [['text', '/Ajoutstudent']], [], [], []],
    'getstudent' => [[], ['_controller' => 'App\\Controller\\StudentController::list'], [], [['text', '/getstudent']], [], [], []],
    'deleteStudent' => [['id'], ['_controller' => 'App\\Controller\\StudentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteStudent']], [], [], []],
    'editstudent' => [['id', 'name'], ['_controller' => 'App\\Controller\\StudentController::toedit'], [], [['variable', '/', '[^/]++', 'name', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/editstudent']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
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
];
