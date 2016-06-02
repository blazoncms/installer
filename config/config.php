<?php

return [
    'dependencies' => [
        'factories' => [
            \BlazonCms\Installer\Action\Install::class => \BlazonCms\Installer\Action\InstallFactory::class
        ],
    ],

    'routes' => array(
        'vcms\install' => array(
            'name' => 'install',
            'path' => '/install',
            'middleware' => \BlazonCms\Installer\Action\Install::class,
            'allowed_methods' => [ 'GET' ],
        ),
    ),
];
