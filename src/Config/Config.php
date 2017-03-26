<?php

namespace BlazonCms\Installer\Config;

use BlazonCms\Installer\Exception\MissingConfigException;

class Config extends \Zend\Config\Config
{
    public function getRequiredDirectories()
    {
        $required = $this->getRequired();
        return $required->get('folders', new static([]));
    }
    
    public function getRequired()
    {
        if ($required = $this->get('required', null)) {
            return $required;
        }

        throw new MissingConfigException(
            'Missing required config'
        );
    }
    
    public function getCountries()
    {
        if ($countries = $this->get('countries', new static([]))) {
            return $countries;
        }

        throw new MissingConfigException(
            'Missing countries to install'
        );
    }
    
    public function getLanguages()
    {
        if ($languages = $this->get('languages', new static([]))) {
            return $languages;
        }

        throw new MissingConfigException(
            'Missing languages to install'
        );
    }
}
