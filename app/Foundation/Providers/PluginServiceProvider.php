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

use CachetHQ\Cachet\Services\Plugins\Container;
use CachetHQ\Cachet\Services\Plugins\Contracts\Container as ContainerContract;
use CachetHQ\Cachet\Services\Plugins\Contracts\Manager as ManagerContract;
use CachetHQ\Cachet\Services\Plugins\Contracts\Provider as ProviderContract;
use CachetHQ\Cachet\Services\Plugins\Manager;
use CachetHQ\Cachet\Services\Plugins\Provider;
use Illuminate\Contracts\Container\Container as Application;
use Illuminate\Support\ServiceProvider;

/**
 * This is the plugin service provider.
 *
 * @author Connor S. Parks <contact@connorvg.tv>
 */
class PluginServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->bootPlugins();
    }

    /**
     * Boot the plugins.
     *
     * @return void
     */
    protected function bootPlugins()
    {
        $this->app->call(ProviderContract::class.'@boot');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerContainer();
        $this->registerManager();
        $this->registerProvider();
        $this->registerPlugins();
    }

    /**
     * Register the plugin container.
     *
     * @return void
     */
    protected function registerContainer()
    {
        $this->app->singleton(ContainerContract::class, function (Application $app) {
            return new Container();
        });
    }

    /**
     * Register the plugin manager.
     *
     * @return void
     */
    protected function registerManager()
    {
        $this->app->singleton(ManagerContract::class, function (Application $app) {
            $container = $this->app->make(ContainerContract::class);

            return new Manager($container);
        });
    }

    /**
     * Register the plugin provider.
     *
     * @return void
     */
    protected function registerProvider()
    {
        $this->app->singleton(ProviderContract::class, function (Application $app) {
            return new Provider($app);
        });
    }

    /**
     * Register the plugins.
     *
     * @return void
     */
    protected function registerPlugins()
    {
        $this->app->call(ProviderContract::class.'@register');
    }
}
