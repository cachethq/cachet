<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Bus\Events\IncidentUpdate;

use App\Bus\Events\IncidentUpdate\IncidentUpdateWasUpdatedEvent;
use App\Models\IncidentUpdate;
use App\Models\User;

class IncidentUpdateWasUpdatedEventTest extends AbstractIncidentUpdateEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = ['user' => new User(), 'update' => new IncidentUpdate()];
        $object = new IncidentUpdateWasUpdatedEvent($params['user'], $params['update']);

        return compact('params', 'object');
    }
}
