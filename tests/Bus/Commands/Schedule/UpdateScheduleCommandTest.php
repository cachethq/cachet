<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Commands\Schedule;

use AltThree\TestBench\CommandTrait;
use CachetHQ\Cachet\Bus\Commands\Schedule\UpdateScheduleCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\Schedule\UpdateScheduleCommandHandler;
use CachetHQ\Cachet\Models\Schedule;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the create schedule command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class UpdateScheduleCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = [
            'schedule'     => new Schedule(),
            'name'         => 'Foo',
            'message'      => 'Bar',
            'status'       => 1,
            'scheduled_at' => date('Y-m-d H:i'),
            'completed_at' => date('Y-m-d H:i'),
            'components'   => [],
        ];
        $object = new UpdateScheduleCommand(
            $params['schedule'],
            $params['name'],
            $params['message'],
            $params['status'],
            $params['scheduled_at'],
            $params['completed_at'],
            $params['components']
        );

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return true;
    }

    protected function getHandlerClass()
    {
        return UpdateScheduleCommandHandler::class;
    }
}
