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
 * This is the plugin finder contract.
 *
 * @author Connor S. Parks <contact@connorvg.tv>
 */
interface Finder
{
    /**
     * Retrieve all available plugins.
     *
     * @return string[]
     */
    public function retrieve();
}
