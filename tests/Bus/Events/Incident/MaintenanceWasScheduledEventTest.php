<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Events\Incident;

use CachetHQ\Cachet\Bus\Events\Incident\MaintenanceWasScheduledEvent;
use CachetHQ\Cachet\Models\Incident;

/**
 * This is the maintenance was scheduled event test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class MaintenanceWasScheduledEventTest extends AbstractIncidentEventTestCase
{
    protected function objectHasHandlers()
    {
        return true;
    }

    protected function getObjectAndParams()
    {
        $params = ['incident' => new Incident()];
        $object = new MaintenanceWasScheduledEvent($params['incident']);

        return compact('params', 'object');
    }
}
