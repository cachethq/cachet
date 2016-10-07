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

use CachetHQ\Cachet\Bus\Events\Beacon\BeaconWasSentEvent;

/**
 * This is the beacon was sent event test.
 *
 * @author James Brooks <james@alt-three.com>
 */
class BeaconWasSentEventTest extends AbstractBeaconEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = [];
        $object = new BeaconWasSentEvent();

        return compact('params', 'object');
    }
}
