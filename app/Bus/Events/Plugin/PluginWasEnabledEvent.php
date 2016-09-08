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
 * This is the plugin was enabled event.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
final class PluginWasEnabledEvent implements PluginEventInterface
{
    /**
     * The plugin that was enabled.
     *
     * @var \CachetHQ\Cachet\Models\Plugin
     */
    public $plugin;

    /**
     * Create a new plugin was enabled event instance.
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
