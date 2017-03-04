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
 * This is the plugin installation extractor contract.
 *
 * @author Connor S. Parks <contact@connorvg.tv>
 */
interface Extractor
{
    /**
     * Extract a specific plugin archive.
     *
     * @param string                                              $archive
     * @param \CachetHQ\Cachet\Services\Plugins\Definition\Plugin $plugin
     *
     * @return bool
     */
    public function from($archive, Plugin $plugin);
}
