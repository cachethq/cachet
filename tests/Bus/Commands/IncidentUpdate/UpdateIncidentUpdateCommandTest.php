<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Bus\Commands\IncidentUpdate;

use AltThree\TestBench\CommandTrait;
use App\Bus\Commands\IncidentUpdate\UpdateIncidentUpdateCommand;
use App\Bus\Handlers\Commands\IncidentUpdate\UpdateIncidentUpdateCommandHandler;
use App\Models\IncidentUpdate;
use App\Models\User;
use Tests\AbstractTestCase;

/**
 * This is the update incident update command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class UpdateIncidentUpdateCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = ['update' => new IncidentUpdate(), 'status' => 1, 'message' => 'Updating!', 'user' => new User()];
        $object = new UpdateIncidentUpdateCommand(
            $params['update'],
            $params['status'],
            $params['message'],
            $params['user']
        );

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return true;
    }

    protected function getHandlerClass()
    {
        return UpdateIncidentUpdateCommandHandler::class;
    }
}
