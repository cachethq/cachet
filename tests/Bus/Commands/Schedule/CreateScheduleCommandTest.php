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
use CachetHQ\Cachet\Bus\Commands\Schedule\CreateScheduleCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\Schedule\CreateScheduleCommandHandler;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the create schedule command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class CreateScheduleCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = [
            'name'         => 'Test',
            'message'      => 'Foo',
            'status'       => 1,
            'scheduled_at' => date('Y-m-d H:i'),
            'completed_at' => date('Y-m-d H:i'),
            'components'   => [],
            'notify'       => 1,
        ];
        $object = new CreateScheduleCommand(
            $params['name'],
            $params['message'],
            $params['status'],
            $params['scheduled_at'],
            $params['completed_at'],
            $params['components'],
            $params['notify']
        );

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return true;
    }

    protected function getHandlerClass()
    {
        return CreateScheduleCommandHandler::class;
    }
}
