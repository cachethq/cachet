<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Events\Beacon;

use CachetHQ\Cachet\Bus\Events\Beacon\BeaconFailedToSendEvent;

/**
 * This is the beacon was sent event test.
 *
 * @author James Brooks <james@alt-three.com>
 */
class BeaconFailedToSendEventTest extends AbstractBeaconEventTestCase
{
    protected function objectHasHandlers()
    {
        return true;
    }

    protected function getObjectAndParams()
    {
        $params = [];
        $object = new BeaconFailedToSendEvent();

        return compact('params', 'object');
    }
}
