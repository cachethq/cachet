<?php

namespace CachetHQ\Cachet\Providers;

use Illuminate\Support\ServiceProvider;
use RecursiveDirectoryIterator;

class RoutingServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->routesInDirectory();
    }

    /**
     * Organise Routes.
     *
     * @param string $app
     */
    private function routesInDirectory($app = '')
    {
        $routeDir = app_path('routes/'.$app.($app !== '' ? '/' : null));

        $iterator = new RecursiveDirectoryIterator($routeDir);
        $iterator->setFlags(RecursiveDirectoryIterator::SKIP_DOTS);

        foreach ($iterator as $route) {
            $isDotFile = strpos($route->getFilename(), '.') === 0;

            if (!$isDotFile && !$route->isDir()) {
                require $routeDir.$route->getFilename();
            }
        }
    }
}
