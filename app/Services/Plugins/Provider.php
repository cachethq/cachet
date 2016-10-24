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

/**
 * This is the plugin provider contract.
 *
 * @author Connor S. Parks <contact@connorvg.tv>
 */
class Provider implements ProviderContract
{
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
            $this->registerPlugin($plugin);
        });
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
        // ...
    }

    /**
     * Boot the plugins.
     *
     * @param \CachetHQ\Cachet\Services\Plugins\Contracts\Container $container
     *
     * @return void
     */
    public function boot(Container $plugins)
    {
        $plugins->enabled()->each(function (Plugin $plugin) {
            $this->bootPlugin($plugin);
        });
    }

    /**
     * Boot the plugin.
     *
     * @param \CachetHQ\Cachet\Services\Plugins\Definition\Plugin $plugin
     *
     * @return void
     */
    protected function bootPlugin(Plugin $plugin)
    {
        // ...
    }
}
