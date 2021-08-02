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
        '/' => [[['_route' => 'admin_home', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, false, false, null]],
        '/add' => [[['_route' => 'admin_add', '_controller' => 'App\\Controller\\Admin\\AdminController::add'], null, null, null, false, false, null]],
        '/list' => [[['_route' => 'admin_list', '_controller' => 'App\\Controller\\Admin\\AdminController::list'], null, null, null, false, false, null]],
        '/distance' => [[['_route' => 'admin_app_admin_admin_distanceeee', '_controller' => 'App\\Controller\\Admin\\AdminController::distanceeee'], null, null, null, false, false, null]],
        '/instrument/list' => [[['_route' => 'admin_instrument_list', '_controller' => 'App\\Controller\\Admin\\InstrumentController::list'], null, null, null, false, false, null]],
        '/instrument/add' => [[['_route' => 'admin_instrument_add', '_controller' => 'App\\Controller\\Admin\\InstrumentController::add'], null, null, null, false, false, null]],
        '/style/list' => [[['_route' => 'admin_style_list', '_controller' => 'App\\Controller\\Admin\\StyleController::list'], null, null, null, false, false, null]],
        '/style/add' => [[['_route' => 'admin_style_add', '_controller' => 'App\\Controller\\Admin\\StyleController::add'], null, null, null, false, false, null]],
        '/user/list' => [[['_route' => 'admin_user_list', '_controller' => 'App\\Controller\\Admin\\UserController::list'], null, null, null, false, false, null]],
        '/request/list' => [[['_route' => 'admin_request_list', '_controller' => 'App\\Controller\\Admin\\UserRequestController::list'], null, null, null, false, false, null]],
        '/api/v1/availabilities' => [[['_route' => 'api_v1_availabilities', '_controller' => 'App\\Controller\\AvailabilityController::list'], null, null, null, false, false, null]],
        '/api/v1/cities' => [[['_route' => 'api_v1_cities', '_controller' => 'App\\Controller\\CityController::list'], null, null, null, false, false, null]],
        '/api/v1/departments' => [[['_route' => 'api_v1_departments', '_controller' => 'App\\Controller\\DepartmentController::list'], null, null, null, false, false, null]],
        '/api/v1/genders' => [[['_route' => 'api_v1_genders', '_controller' => 'App\\Controller\\GenderController::list'], null, null, null, false, false, null]],
        '/api/v1/instruments' => [[['_route' => 'api_v1_instruments', '_controller' => 'App\\Controller\\InstrumentController::list'], null, ['GET' => 0], null, false, false, null]],
        '/message' => [[['_route' => 'message', '_controller' => 'App\\Controller\\MessageController::sendMessage'], null, ['POST' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['POST' => 0], null, false, false, null]],
        '/api/v1/contact' => [[['_route' => 'api_v1_contact', '_controller' => 'App\\Controller\\RequestUserController::contact'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/api/v1/styles' => [[['_route' => 'api_v1_styles', '_controller' => 'App\\Controller\\StyleController::list'], null, null, null, false, false, null]],
        '/api/v1/users' => [[['_route' => 'api_v1_users_list', '_controller' => 'App\\Controller\\UserController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/advanced-search' => [[['_route' => 'api_v1__advanced_search', '_controller' => 'App\\Controller\\UserController::advancedSearch'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/search' => [[['_route' => 'api_v1_search', '_controller' => 'App\\Controller\\UserController::Search'], null, ['GET' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
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
                .')'
                .'|/([^/]++)/edit(*:148)'
                .'|/(\\d+)(*:162)'
                .'|/instrument/(?'
                    .'|(\\d+)(*:190)'
                    .'|([^/]++)/edit(*:211)'
                    .'|(\\d+)/delete(*:231)'
                .')'
                .'|/style/(?'
                    .'|(\\d+)(*:255)'
                    .'|(\\d+)/edit(*:273)'
                    .'|(\\d+)/delete(*:293)'
                .')'
                .'|/user/([^/]++)/(?'
                    .'|edit(*:324)'
                    .'|status(*:338)'
                .')'
                .'|/request/([^/]++)(*:364)'
                .'|/api/v1/(?'
                    .'|availabilities/([^/]++)(*:406)'
                    .'|cities/([^/]++)(*:429)'
                    .'|departments/([^/]++)(*:457)'
                    .'|genders/([^/]++)(*:481)'
                    .'|instruments/([^/]++)(*:509)'
                    .'|styles/([^/]++)(*:532)'
                    .'|users/(?'
                        .'|([^/]++)(?'
                            .'|(*:560)'
                        .')'
                        .'|(\\d+)(*:574)'
                    .')'
                .')'
                .'|/channel/(\\d+)(*:598)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:634)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        148 => [[['_route' => 'admin_edit', '_controller' => 'App\\Controller\\Admin\\AdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        162 => [[['_route' => 'admin_delete', '_controller' => 'App\\Controller\\Admin\\AdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        190 => [[['_route' => 'admin_instrument_show', '_controller' => 'App\\Controller\\Admin\\InstrumentController::show'], ['id'], null, null, false, true, null]],
        211 => [[['_route' => 'admin_instrument_edit', '_controller' => 'App\\Controller\\Admin\\InstrumentController::edit'], ['id'], null, null, false, false, null]],
        231 => [[['_route' => 'admin_instrument_delete', '_controller' => 'App\\Controller\\Admin\\InstrumentController::delete'], ['id'], null, null, false, false, null]],
        255 => [[['_route' => 'admin_style_show', '_controller' => 'App\\Controller\\Admin\\StyleController::show'], ['id'], null, null, false, true, null]],
        273 => [[['_route' => 'admin_style_edit', '_controller' => 'App\\Controller\\Admin\\StyleController::edit'], ['id'], null, null, false, false, null]],
        293 => [[['_route' => 'admin_style_delete', '_controller' => 'App\\Controller\\Admin\\StyleController::delete'], ['id'], null, null, false, false, null]],
        324 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], null, null, false, false, null]],
        338 => [[['_route' => 'admin_user_status_change', '_controller' => 'App\\Controller\\Admin\\UserController::statusChange'], ['id'], null, null, false, false, null]],
        364 => [[['_route' => 'admin_request_delete', '_controller' => 'App\\Controller\\Admin\\UserRequestController::delete'], ['id'], null, null, false, true, null]],
        406 => [[['_route' => 'api_v1_availabilities_users', '_controller' => 'App\\Controller\\AvailabilityController::show'], ['id'], null, null, false, true, null]],
        429 => [[['_route' => 'api_v1_cities_users', '_controller' => 'App\\Controller\\CityController::show'], ['id'], null, null, false, true, null]],
        457 => [[['_route' => 'api_v1_departments_users', '_controller' => 'App\\Controller\\DepartmentController::show'], ['id'], null, null, false, true, null]],
        481 => [[['_route' => 'api_v1_genders_users', '_controller' => 'App\\Controller\\GenderController::show'], ['id'], null, null, false, true, null]],
        509 => [[['_route' => 'api_v1_instruments_users', '_controller' => 'App\\Controller\\InstrumentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        532 => [[['_route' => 'api_v1_styles_users', '_controller' => 'App\\Controller\\StyleController::show'], ['id'], null, null, false, true, null]],
        560 => [
            [['_route' => 'api_v1_users_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_v1_users_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
        ],
        574 => [[['_route' => 'api_v1_users_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        598 => [[['_route' => 'channel', '_controller' => 'App\\Controller\\ChannelController::chat'], ['id'], null, null, false, true, null]],
        634 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
