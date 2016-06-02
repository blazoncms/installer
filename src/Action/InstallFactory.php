<?php

namespace BlazonCms\Installer\Action;

use Interop\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class InstallFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new Install(
            $container->get(TemplateRendererInterface::class)
        );
    }
}
