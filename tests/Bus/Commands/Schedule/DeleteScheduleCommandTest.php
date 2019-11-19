<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Bus\Commands\Schedule;

use AltThree\TestBench\CommandTrait;
use App\Bus\Commands\Schedule\DeleteScheduleCommand;
use App\Bus\Handlers\Commands\Schedule\DeleteScheduleCommandHandler;
use App\Models\Schedule;
use Tests\AbstractTestCase;

/**
 * This is the create schedule command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class DeleteScheduleCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = [
            'schedule' => new Schedule(),
        ];
        $object = new DeleteScheduleCommand(
            $params['schedule']
        );

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return true;
    }

    protected function getHandlerClass()
    {
        return DeleteScheduleCommandHandler::class;
    }
}
