<?php

return [
    'dependencies' => [
        'factories' => [
            \BlazonCms\Installer\Action\Welcome::class => \BlazonCms\Installer\Action\WelcomeFactory::class
        ],
    ],

    'routes' => [
        'welcome' => [
            'path' => '/install',
            'middleware' => \BlazonCms\Installer\Action\Welcome::class,
            'allowed_methods' => ['GET'],
        ],
    ],

    'templates' => [
        'layout' => 'layout/installer',
        'map' => [
            'layout/installer' => __DIR__.'/../templates/layout/installer.phtml',
            'error/error'    => __DIR__.'/../templates/error/error.phtml',
            'error/404'      => __DIR__.'/../templates/error/404.phtml',
        ],

        'paths' => [
            'installer'    => [__DIR__.'/../templates/installer'],
            'layout' => [__DIR__.'/../templates/layout'],
            'error'  => [__DIR__.'/../templates/error'],
        ],
    ],
];
