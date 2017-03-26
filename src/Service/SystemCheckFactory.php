<?php

namespace BlazonCms\Installer\Config;

use Interop\Container\ContainerInterface;

class SystemCheckFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $config = $container->get('config');
        return new Config($config);
    }
}