<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that willbe distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Events\Plugin;

use CachetHQ\Cachet\Models\Plugin;

/**
 * This is the plugin will be installed event.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
final class PluginWillBeInstalledEvent implements PluginEventInterface
{
    /**
     * The name of the plugin that will be installed.
     *
     * @var string
     */
    public $name;

    /**
     * Create a new plugin will be installed event instance.
     *
     * @param string $name
     *
     * @return void
     */
    public function __construct(string $name)
    {
        $this->plugin = $plugin;
    }
}
