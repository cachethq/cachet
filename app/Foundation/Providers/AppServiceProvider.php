<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Foundation\Providers;

use AltThree\Bus\Dispatcher;
use CachetHQ\Cachet\Bus\Middleware\UseDatabaseTransactions;
use CachetHQ\Cachet\Dates\DateFactory;
use CachetHQ\Cachet\GitHub\Release;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

/**
 * This is the app service provider.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Joe Cohen <joe@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @param \AltThree\Bus\Dispatcher $dispatcher
     */
    public function boot(Dispatcher $dispatcher)
    {
        $dispatcher->mapUsing(function ($command) {
            return Dispatcher::simpleMapping($command, 'CachetHQ\Cachet\Bus', 'CachetHQ\Cachet\Bus\Handlers');
        });

        $dispatcher->pipeThrough([UseDatabaseTransactions::class]);

        Str::macro('canonicalize', function ($url) {
            return preg_replace('/([^\/])$/', '$1/', $url);
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerDateFactory();
        $this->registerRelease();
    }

    /**
     * Register the date factory.
     *
     * @return void
     */
    protected function registerDateFactory()
    {
        $this->app->singleton(DateFactory::class, function ($app) {
            $appTimezone = $app['config']->get('app.timezone');
            $cacheTimezone = $app['config']->get('cachet.timezone');

            return new DateFactory($appTimezone, $cacheTimezone);
        });
    }

    /**
     * Register the releases class.
     *
     * @return void
     */
    protected function registerRelease()
    {
        $this->app->singleton(Release::class, function ($app) {
            $cache = $app['cache.store'];
            $token = $app['config']->get('services.github.token');

            return new Release($cache, $token);
        });
    }
}
