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

use CachetHQ\Cachet\Integrations\Contracts\Credits as CreditsContract;
use CachetHQ\Cachet\Integrations\Contracts\Feed as FeedContract;
use CachetHQ\Cachet\Integrations\Contracts\Releases as ReleasesContract;
use CachetHQ\Cachet\Integrations\Contracts\System as SystemContract;
use CachetHQ\Cachet\Integrations\Core\Credits;
use CachetHQ\Cachet\Integrations\Core\Feed;
use CachetHQ\Cachet\Integrations\Core\System;
use CachetHQ\Cachet\Integrations\GitHub\Releases;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

/**
 * This is the integration service provider.
 *
 * @author James Brooks <james@alt-three.com>
 */
class IntegrationServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerCredits();
        $this->registerFeed();
        $this->registerSystem();

        $this->registerReleases();
    }

    /**
     * Register the credits class.
     *
     * @return void
     */
    protected function registerCredits()
    {
        $this->app->singleton(CreditsContract::class, function ($app) {
            $cache = $app['cache.store'];

            return new Credits($cache);
        });
    }

    /**
     * Register the feed class.
     *
     * @return void
     */
    protected function registerFeed()
    {
        $this->app->singleton(FeedContract::class, function ($app) {
            $cache = $app['cache.store'];

            return new Feed($cache);
        });
    }

    /**
     * Register the system class.
     *
     * @return void
     */
    protected function registerSystem()
    {
        $this->app->singleton(SystemContract::class, function (Container $app) {
            return new System();
        });
    }

    /**
     * Register the releases class.
     *
     * @return void
     */
    protected function registerReleases()
    {
        $this->app->singleton(ReleasesContract::class, function ($app) {
            $cache = $app['cache.store'];
            $token = $app['config']->get('services.github.token');

            return new Releases($cache, $token);
        });
    }
}
