<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Events\Schedule;

use CachetHQ\Cachet\Bus\Events\Schedule\ScheduleWasRemovedEvent;
use CachetHQ\Cachet\Models\Schedule;

class ScheduleWasRemovedEventTest extends AbstractScheduleEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = ['schedule' => new Schedule()];
        $object = new ScheduleWasRemovedEvent($params['schedule']);

        return compact('params', 'object');
    }
}
