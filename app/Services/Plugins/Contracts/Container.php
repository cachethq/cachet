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
 * This is the plugin container contract.
 *
 * @author Connor S. Parks <contact@connorvg.tv>
 */
interface Container
{
    /**
     * Get all the plugins.
     *
     * @return \App\Services\Plugins\Definition\Plugin[]
     */
    public function all();

    /**
     * Get all the enabled plugins.
     *
     * @return \App\Services\Plugins\Definition\Plugin[]
     */
    public function enabled();

    /**
     * Get all the disabled plugins.
     *
     * @return \App\Services\Plugins\Definition\Plugin[]
     */
    public function disabled();
}
