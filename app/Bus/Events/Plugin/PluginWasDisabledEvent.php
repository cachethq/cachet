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
 * This is the plugin was disabled event.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
final class PluginWasDisabledEvent implements PluginEventInterface
{
    /**
     * The plugin that was disabled.
     *
     * @var \CachetHQ\Cachet\Models\Plugin
     */
    public $plugin;

    /**
     * Create a new plugin was disabled event instance.
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
