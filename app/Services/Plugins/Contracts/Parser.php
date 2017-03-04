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
 * This is the plugin parser contract.
 *
 * @author Connor S. Parks <contact@connorvg.tv>
 */
interface Parser
{
    /**
     * Parse all valid plugins.
     *
     * @return \CachetHQ\Cachet\Services\Plugins\Definition\Plugin[]
     */
    public function from(array $possible);
}
