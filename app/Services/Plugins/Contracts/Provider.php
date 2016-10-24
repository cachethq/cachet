<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Services\Plugins\Contracts;

/**
 * This is the plugin provider contract.
 *
 * @author Connor S. Parks <contact@connorvg.tv>
 */
interface Provider
{
    /**
     * Register the plugins.
     *
     * @param \CachetHQ\Cachet\Services\Plugins\Contracts\Container $container
     *
     * @return void
     */
    public function register(Container $container);

    /**
     * Boot the plugins.
     *
     * @param \CachetHQ\Cachet\Services\Plugins\Contracts\Container $container
     *
     * @return void
     */
    public function boot(Container $container);
}
