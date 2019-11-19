<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Providers;

use App\Integrations\Contracts\Beacon as BeaconContract;
use App\Integrations\Contracts\Credits as CreditsContract;
use App\Integrations\Contracts\Feed as FeedContract;
use App\Integrations\Contracts\Releases as ReleasesContract;
use App\Integrations\Contracts\System as SystemContract;
use App\Integrations\Core\Beacon;
use App\Integrations\Core\Credits;
use App\Integrations\Core\Feed;
use App\Integrations\Core\System;
use App\Integrations\GitHub\Releases;
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
        $this->registerBeacon();
        $this->registerCredits();
        $this->registerFeed();
        $this->registerSystem();

        $this->registerReleases();
    }

    /**
     * Register the beacon class.
     *
     * @return void
     */
    protected function registerBeacon()
    {
        $this->app->singleton(BeaconContract::class, function ($app) {
            $config = $app['config'];

            return new Beacon($config);
        });
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
            $config = $app['config'];
            $auth = $app['auth.driver'];

            return new System($config, $auth);
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
