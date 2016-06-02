<?php

return [
    'dependencies' => [
        'factories' => [
            \BlazonCms\Installer\Action\Install::class => \BlazonCms\Installer\Action\InstallFactory::class
        ],
    ],

    'routes' => array(
        'BlazonCms\Install' => array(
            'name' => 'install',
            'path' => '/install',
            'middleware' => \BlazonCms\Installer\Action\Install::class,
            'allowed_methods' => [ 'GET' ],
        ),
    ),

    'templates' => [
        'paths' => [
            'installer'    => [__DIR__.'/../templates']
        ],
    ],
];
