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

use CachetHQ\Cachet\Services\Plugins\Definition\Plugin;

/**
 * This is the plugin manager contract.
 *
 * @author Connor S. Parks <contact@connorvg.tv>
 */
interface Manager
{
    /**
     * Install a plugin.
     *
     * @param \App\Services\Plugins\Definition\Plugin $plugin
     *
     * @throws \App\Services\Plugins\Exceptions\InstallFailedException
     *
     * @return void
     */
    public function install(Plugin $plugin);

    /**
     * Uninstall a plugin.
     *
     * @param \App\Services\Plugins\Definition\Plugin $plugin
     *
     * @throws \App\Services\Plugins\Exceptions\UninstallFailedException
     *
     * @return void
     */
    public function uninstall(Plugin $plugin);

    /**
     * Enable a plugin.
     *
     * @param \App\Services\Plugins\Definition\Plugin $plugin
     *
     * @throws \App\Services\Plugins\Exceptions\EnableFailedException
     *
     * @return void
     */
    public function enable(Plugin $plugin);

    /**
     * Disable a plugin.
     *
     * @param \App\Services\Plugins\Definition\Plugin $plugin
     *
     * @throws \App\Services\Plugins\Exceptions\DisableFailedException
     *
     * @return void
     */
    public function disable(Plugin $plugin);
}
