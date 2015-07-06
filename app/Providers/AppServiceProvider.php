<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Providers;

use Illuminate\Bus\Dispatcher;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @param \Illuminate\Bus\Dispatcher $dispatcher
     */
    public function boot(Dispatcher $dispatcher)
    {
        $dispatcher->mapUsing(function ($command) {
            return Dispatcher::simpleMapping($command, 'CachetHQ\Cachet\Commands', 'CachetHQ\Cachet\Handlers\Commands');
        });

        Str::macro('canonicalize', function ($url) {
            return preg_replace('/([^\/])$/', '$1/', $url);
        });
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->bind('Illuminate\Contracts\Auth\Registrar', 'CachetHQ\Cachet\Services\Registrar');
    }
}
