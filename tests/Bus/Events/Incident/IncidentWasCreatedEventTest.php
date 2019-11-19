<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Bus\Events\Incident;

use App\Bus\Events\Incident\IncidentWasCreatedEvent;
use App\Models\Incident;
use App\Models\User;

/**
 * This is the incident was created event test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class IncidentWasCreatedEventTest extends AbstractIncidentEventTestCase
{
    protected function objectHasHandlers()
    {
        return true;
    }

    protected function getObjectAndParams()
    {
        $params = [
            'user'     => new User(),
            'incident' => new Incident(),
            'notify'   => true,
        ];
        $object = new IncidentWasCreatedEvent($params['user'], $params['incident'], $params['notify']);

        return compact('params', 'object');
    }
}
