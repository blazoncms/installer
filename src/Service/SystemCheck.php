<?php

namespace BlazonCms\Installer\Service;

use BlazonCms\Installer\Config\Config;

class SystemCheck
{
    protected $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function checkSystemDirs()
    {
        $config = $this->getConfig();

        $return = array(
            'missing' => array(),
            'missingPermissions' => array()
        );

        $cwd = getcwd();

        foreach ($config->getRequiredDirectories() as $folder) {
            $folder = ltrim($folder,'\\/');
            $path = $cwd.DIRECTORY_SEPARATOR.$folder;

            if (!is_dir($path) || !mkdir($path)) {
                $return['missing'] = $path;

            }

            if (!is_writable($path)) {
                $return['missingPermissions'][] = $path;
            }
        }

        return $return;
    }

    protected function getConfig()
    {
        return $this->config;
    }
}
