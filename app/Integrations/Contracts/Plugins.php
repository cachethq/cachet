<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Integrations\Contracts;

use CachetHQ\Cachet\Models\Plugin;

/**
 * This is the plugins interface.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
interface Plugins
{
    /**
     * Enables a plugin.
     *
     * @param \CachetHQ\Cachet\Models\Plugin $plugin
     *
     * @return void
     *
     * @throws \CachetHQ\Cachet\Integrations\Exceptions\Plugins\PluginFailedToEnableException
     */
    public function enable(Plugin $plugin);

    /**
     * Disables a plugin.
     *
     * @param \CachetHQ\Cachet\Models\Plugin $plugin
     *
     * @return void
     *
     * @throws \CachetHQ\Cachet\Integrations\Exceptions\Plugins\PluginFailedToDisableException
     */
    public function disable(Plugin $plugin);
}
