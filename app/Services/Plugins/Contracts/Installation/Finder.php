<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Services\Plugins\Contracts\Installation;

use CachetHQ\Cachet\Services\Plugins\Definition\Plugin;

/**
 * This is the plugin installation finder contract.
 *
 * @author Connor S. Parks <contact@connorvg.tv>
 */
interface Finder
{
    /**
     * Retrieve a specific plugin archive.
     *
     * @param \CachetHQ\Cachet\Services\Plugins\Definition\Plugin $plugin
     *
     * @return string
     */
    public function retrieve(Plugin $plugin);
}
