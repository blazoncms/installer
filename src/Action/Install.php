<?php

namespace BlazonCms\Installer\Action;

use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Template\TemplateRendererInterface;

class Install
{
    private $renderer;

    public function __construct(TemplateRendererInterface $renderer)
    {
        $this->renderer = $renderer;
    }

    public function __invoke()
    {
        return new HtmlResponse(
            $this->renderer->render(
                'installer::welcome',
                [
                    'layout' => 'installer::layout'
                ]
            )
        );
    }
}
