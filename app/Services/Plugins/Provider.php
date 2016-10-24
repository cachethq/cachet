<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Services\Plugins;

use CachetHQ\Cachet\Services\Plugins\Contracts\Container;
use CachetHQ\Cachet\Services\Plugins\Contracts\Provider as ProviderContract;
use CachetHQ\Cachet\Services\Plugins\Definition\Plugin;
use Illuminate\Contracts\Container\Container as Application;

/**
 * This is the plugin provider contract.
 *
 * @author Connor S. Parks <contact@connorvg.tv>
 */
class Provider implements ProviderContract
{
    /**
     * The application container.
     *
     * @var \Illuminate\Contracts\Container\Container
     */
    protected $app;

    /**
     * Create a new provider object.
     *
     * @param \Illuminate\Contracts\Container\Container $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * Register the plugins.
     *
     * @param \CachetHQ\Cachet\Services\Plugins\Contracts\Container $container
     *
     * @return void
     */
    public function register(Container $plugins)
    {
        $plugins->enabled()->each(function (Plugin $plugin) {
            $this->registerAutoloader($plugin);
            $this->registerPlugin($plugin);
        });
    }

    /**
     * Register the plugin's autoloader.
     *
     * @param \CachetHQ\Cachet\Services\Plugins\Definition\Plugin $plugin
     *
     * @return void
     */
    protected function registerAutoloader(Plugin $plugin)
    {
        $autoload = sprintf(
            '%s/%s/%s/vendor/autoload.php',
            storage_path('plugins'),
            $plugin->getVendor(),
            $plugin->getName()
        );

        if (!file_exists($autoload)) {
            return;
        }

        require_once $autoload;
    }

    /**
     * Register the plugin.
     *
     * @param \CachetHQ\Cachet\Services\Plugins\Definition\Plugin $plugin
     *
     * @return void
     */
    protected function registerPlugin(Plugin $plugin)
    {
        $providers = $plugin->getProviders();

        foreach ($providers as $provider) {
            $provider = $this->app->make(
                $provider->getClass(),
                ['app' => $this->app]
            );

            $this->app->register($provider);
        }
    }
}
