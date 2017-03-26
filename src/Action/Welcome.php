<?php

namespace BlazonCms\Installer\Action;

use BlazonCms\Core\Entity\Country;
use BlazonCms\Core\Entity\Language;
use BlazonCms\Installer\Config\Config;
use Doctrine\ORM\EntityManagerInterface;
use Fig\Http\Message\StatusCodeInterface;
use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\EmptyResponse;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Template\TemplateRendererInterface;


class Welcome implements MiddlewareInterface
{
    /** @var RouterInterface */
    private $router;
    
    /** @var TemplateRendererInterface */
    private $template;

    /** @var Config */
    private $config;

    /** @var EntityManagerInterface */
    private $entityManager;

    public function __construct(
        RouterInterface $router,
        TemplateRendererInterface $template = null,
        Config $config,
        EntityManagerInterface $entityManager
    ) {
        $this->router        = $router;
        $this->template      = $template;
        $this->config        = $config;
        $this->entityManager = $entityManager;
    }

    public function process(
        ServerRequestInterface $request,
        DelegateInterface $delegate
    ){
        switch ($request->getAttribute('action', 'index')) {
            case 'index':
                return $this->indexAction();
            case 'system-check':
                return $this->systemCheckAction();
            case 'counties-languages':
                return $this->installCountriesAction();
            default:
                // Invalid; thus, a 404!
                return new EmptyResponse(StatusCodeInterface::STATUS_NOT_FOUND);
        }
    }

    public function indexAction() {
        return new HtmlResponse(
            $this->template->render('installer::welcome', ['layout' => 'layout::installer'])
        );
    }

    public function systemCheckAction() {
        return new HtmlResponse(
            $this->template->render('installer::system-check', ['layout' => 'layout::installer'])
        );
    }

    /**
     * This doesn't go here.  Quick hack for dev
     *
     * @todo Remove this method
     */
    public function installCountriesAction() {
        $countries = $this->config->getCountries();

        foreach ($countries as $country) {
            $countryObj = new Country();
            $countryObj->setName($country[2]);
            $countryObj->setIso2($country[1]);
            $countryObj->setIso3($country[0]);
            $this->entityManager->persist($countryObj);
        }
        
        $this->entityManager->flush();
        
        $languages = $this->config->getLanguages();
        
        foreach ($languages as $language) {
            $langObj = new Language();
            $langObj->setName($language[0]);
            $langObj->setIso6391($language[1]);
            $langObj->setIso6392b($language[2]);
            $langObj->setIso6392t($language[3]);
            $this->entityManager->persist($langObj);
        }

        $this->entityManager->flush();
        
        return new HtmlResponse('<p>Complete</p>');
    }
}
