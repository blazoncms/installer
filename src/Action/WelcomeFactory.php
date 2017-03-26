<?php

namespace BlazonCms\Installer\Action;

use BlazonCms\Installer\Config\Config;
use Interop\Container\ContainerInterface;
use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class WelcomeFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $router   = $container->get(RouterInterface::class);
        $template = $container->get(TemplateRendererInterface::class);

        $entityManager = $container->get('doctrine.entity_manager.orm_blazon_cms');
        $config = $container->get(Config::class);

        return new Welcome($router, $template, $config, $entityManager);
    }
}
