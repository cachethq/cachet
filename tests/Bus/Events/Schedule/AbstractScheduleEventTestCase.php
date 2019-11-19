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

use AltThree\TestBench\EventTrait;
use App\Bus\Events\Schedule\ScheduleEventInterface;
use Tests\AbstractTestCase;

abstract class AbstractScheduleEventTestCase extends AbstractTestCase
{
    use EventTrait;

    protected function getEventInterfaces()
    {
        return [ScheduleEventInterface::class];
    }
}
