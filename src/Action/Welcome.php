<?php

namespace BlazonCms\Installer\Action;

use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Template\TemplateRendererInterface;
use Zend\Stratigility\Http\ResponseInterface;

class Welcome
{
    public function __construct(RouterInterface $router,
        TemplateRendererInterface $template = null
    ) {
        $this->router   = $router;
        $this->template = $template;
    }
    
    public function __invoke(
        ServerRequestInterface $request,
        ResponseInterface $response,
        callable $next = null
    ) {
        return new HtmlResponse(
            $this->template->render('installer::welcome')
        );
    }
}
