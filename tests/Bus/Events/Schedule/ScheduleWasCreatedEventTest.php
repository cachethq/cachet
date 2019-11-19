<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Bus\Events\Schedule;

use App\Bus\Events\Schedule\ScheduleWasCreatedEvent;
use App\Models\Schedule;
use App\Models\User;

class ScheduleWasCreatedEventTest extends AbstractScheduleEventTestCase
{
    protected function objectHasHandlers()
    {
        return true;
    }

    protected function getObjectAndParams()
    {
        $params = ['user' => new User(), 'schedule' => new Schedule()];
        $object = new ScheduleWasCreatedEvent($params['user'], $params['schedule']);

        return compact('params', 'object');
    }
}
