<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Integrations\Contracts;

/**
 * This is the beacon interface.
 *
 * @author James Brooks <james@alt-three.com>
 */
interface Beacon
{
    /**
     * Has the install enabled Cachet beacon?
     *
     * @return bool
     */
    public function enabled();

    /**
     * Send a beacon to our server.
     *
     * @return void
     */
    public function send();
}
