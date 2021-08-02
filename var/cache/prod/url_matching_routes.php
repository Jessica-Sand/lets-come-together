<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin_home', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/add' => [[['_route' => 'admin_add', '_controller' => 'App\\Controller\\Admin\\AdminController::add'], null, null, null, false, false, null]],
        '/admin/list' => [[['_route' => 'admin_list', '_controller' => 'App\\Controller\\Admin\\AdminController::list'], null, null, null, false, false, null]],
        '/admin/genre/list' => [[['_route' => 'admin_genre_list', '_controller' => 'App\\Controller\\Admin\\GenreController::list'], null, null, null, false, false, null]],
        '/admin/genre/add' => [[['_route' => 'admin_genre_add', '_controller' => 'App\\Controller\\Admin\\GenreController::add'], null, null, null, false, false, null]],
        '/admin/instrument/list' => [[['_route' => 'admin_instrument_list', '_controller' => 'App\\Controller\\Admin\\InstrumentController::list'], null, null, null, false, false, null]],
        '/admin/instrument/add' => [[['_route' => 'admin_instrument_add', '_controller' => 'App\\Controller\\Admin\\InstrumentController::add'], null, null, null, false, false, null]],
        '/admin/user/list' => [[['_route' => 'admin_user_list', '_controller' => 'App\\Controller\\Admin\\UserController::list'], null, null, null, false, false, null]],
        '/api/v1/genres' => [[['_route' => 'api_v1_genres', '_controller' => 'App\\Controller\\GenreController::list'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/api/v1/instruments' => [[['_route' => 'api_v1_instruments', '_controller' => 'App\\Controller\\InstrumentController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/locations' => [[['_route' => 'api_v1_locations', '_controller' => 'App\\Controller\\LocationController::list'], null, null, null, false, false, null]],
        '/main' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['POST' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/api/v1/users' => [[['_route' => 'api_v1_users_list', '_controller' => 'App\\Controller\\UserController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|genre/(?'
                            .'|([^/]++)(?'
                                .'|(*:40)'
                                .'|/edit(*:52)'
                            .')'
                            .'|delete(*:66)'
                        .')'
                        .'|instrument/(?'
                            .'|([^/]++)(?'
                                .'|(*:99)'
                                .'|/edit(*:111)'
                            .')'
                            .'|delete(*:126)'
                        .')'
                        .'|user/([^/]++)/(?'
                            .'|edit(*:156)'
                            .'|status(*:170)'
                        .')'
                    .')'
                    .'|pi/v1/(?'
                        .'|genres/([^/]++)(*:204)'
                        .'|instruments/([^/]++)(*:232)'
                        .'|locations/([^/]++)(*:258)'
                        .'|users/([^/]++)(?'
                            .'|(*:283)'
                            .'|/edit(*:296)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        40 => [[['_route' => 'admin_genre_show', '_controller' => 'App\\Controller\\Admin\\GenreController::show'], ['id'], null, null, false, true, null]],
        52 => [[['_route' => 'admin_genre_edit', '_controller' => 'App\\Controller\\Admin\\GenreController::edit'], ['id'], null, null, false, false, null]],
        66 => [[['_route' => 'admin_genre_delete', '_controller' => 'App\\Controller\\Admin\\GenreController::delete'], [], null, null, false, false, null]],
        99 => [[['_route' => 'admin_instrument_show', '_controller' => 'App\\Controller\\Admin\\InstrumentController::show'], ['id'], null, null, false, true, null]],
        111 => [[['_route' => 'admin_instrument_edit', '_controller' => 'App\\Controller\\Admin\\InstrumentController::edit'], ['id'], null, null, false, false, null]],
        126 => [[['_route' => 'admin_instrument_delete', '_controller' => 'App\\Controller\\Admin\\InstrumentController::delete'], [], null, null, false, false, null]],
        156 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], null, null, false, false, null]],
        170 => [[['_route' => 'admin_user_status_change', '_controller' => 'App\\Controller\\Admin\\UserController::statusChange'], ['id'], null, null, false, false, null]],
        204 => [[['_route' => 'api_v1_genres_users', '_controller' => 'App\\Controller\\GenreController::show'], ['id'], null, null, false, true, null]],
        232 => [[['_route' => 'api_v1_instruments_users', '_controller' => 'App\\Controller\\InstrumentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        258 => [[['_route' => 'api_v1_locations_users', '_controller' => 'App\\Controller\\LocationController::show'], ['id'], null, null, false, true, null]],
        283 => [[['_route' => 'api_v1_users_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        296 => [
            [['_route' => 'api_v1_users_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
