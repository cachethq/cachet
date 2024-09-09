<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Events\Beacon;

use CachetHQ\Cachet\Bus\Events\Beacon\BeaconFailedToSendEvent;

/**
 * This is the log beacon failed handler.
 *
 * @author James Brooks <james@alt-three.com>
 */
class LogBeaconFailedHandler
{
    /**
     * Handle the event.
     *
     * @param \CachetHQ\Cachet\Bus\Events\Beacon\BeaconFailedToSendEvent $event
     *
     * @return void
     */
    public function handle(BeaconFailedToSendEvent $event)
    {
        logger('Beacon failed.');
    }
}
