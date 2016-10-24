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

use CachetHQ\Cachet\Services\Plugins\Contracts\Container as ContainerContract;
use CachetHQ\Cachet\Services\Plugins\Definition\Plugin;
use Illuminate\Support\Collection;

/**
 * This is the plugin container.
 *
 * @author Connor S. Parks <contact@connorvg.tv>
 */
class Container extends Collection implements ContainerContract
{
    /**
     * Get all the enabled plugins.
     *
     * @return \App\Services\Plugins\Definition\Plugin[]
     */
    public function enabled()
    {
        return $this->filter(function (Plugin $plugin) {
            return $plugin->isEnabled();
        });
    }

    /**
     * Get all the disabled plugins.
     *
     * @return \App\Services\Plugins\Definition\Plugin[]
     */
    public function disabled()
    {
        return $this->filter(function (Plugin $plugin) {
            return $plugin->isDisabled();
        });
    }
}
