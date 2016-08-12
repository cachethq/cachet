<?php

namespace CachetHQ\Cachet\Foundation\Bootstrap;

use Symfony\Component\Finder\Finder;
use Illuminate\Contracts\Config\Repository as RepositoryContract;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Foundation\Bootstrap\LoadConfiguration as BaseLoadConfiguration;

class LoadConfiguration extends BaseLoadConfiguration
{
    /**
     * Load the configuration items from all of the files.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @param  \Illuminate\Contracts\Config\Repository  $repository
     * @return void
     */
    protected function loadConfigurationFiles(Application $app, RepositoryContract $repository)
    {
        foreach ($this->getConfigurationFiles($app) as $key => $paths) {
            $config = [];
            foreach ((array) $paths as $path) {
                $config = array_merge_recursive($config, require $path);
            }

            $repository->set($key, $config);
        }
    }

    /**
     * Get all of the configuration files for the application.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @return array
     */
    protected function getConfigurationFiles(Application $app)
    {
        $files = parent::getConfigurationFiles($app);

        $configPath = realpath(plugin_path('enabled'));
        $configPath = glob("${configPath}/*/*/config");

        if (empty($configPath)) {
            return $files;
        }

        foreach (Finder::create()->followLinks()->files()->name('*.php')->in($configPath) as $path => $file) {
            $nesting = $this->getConfigurationNesting($file, realpath(dirname($path)));
            $key = $nesting.basename($file->getRealPath(), '.php');

            if (! isset($files[$key])) {
                $files[$key] = [];
            } else if (is_string($files[$key])) {
                $files[$key] = [$files[$key]];
            }

            $files[$key][] = $file->getRealPath();
        }

        return $files;
    }
}
