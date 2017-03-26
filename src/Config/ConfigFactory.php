<?php

namespace BlazonCms\Installer\Config;

use BlazonCms\Installer\Exception\MissingConfigException;
use Interop\Container\ContainerInterface;

class ConfigFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $config = $container->get('config');

        if (empty($config['BlazonCms\Installer\Config'])) {
            throw new MissingConfigException(
                'Missing config key BlazonCms\\Installer\\Config'
            );
        }
        
        return new Config($config['BlazonCms\Installer\Config']);
    }
}