<?php

namespace BlazonCms\Installer\Action;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Template\TemplateRendererInterface;


class Welcome implements MiddlewareInterface
{
    private $router;

    private $template;

    public function __construct(
        RouterInterface $router,
        TemplateRendererInterface $template = null
    ) {
        $this->router   = $router;
        $this->template = $template;
    }

    public function process(
        ServerRequestInterface $request,
        DelegateInterface $delegate
    ){
        return new HtmlResponse(
            $this->template->render('installer::welcome', ['layout' => 'layout::installer'])
        );
    }
}
