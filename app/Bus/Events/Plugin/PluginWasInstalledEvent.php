<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Events\Plugin;

use CachetHQ\Cachet\Models\Plugin;

/**
 * This is the plugin was installed event.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
final class PluginWasInstalledEvent implements PluginEventInterface
{
    /**
     * The plugin that was installed.
     *
     * @var \CachetHQ\Cachet\Models\Plugin
     */
    public $plugin;

    /**
     * Create a new plugin was installed event instance.
     *
     * @param \CachetHQ\Cachet\Models\Plugin $plugin
     *
     * @return void
     */
    public function __construct(Plugin $plugin)
    {
        $this->plugin = $plugin;
    }
}
