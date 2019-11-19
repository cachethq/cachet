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
use App\Bus\Commands\IncidentUpdate\CreateIncidentUpdateCommand;
use App\Bus\Handlers\Commands\IncidentUpdate\CreateIncidentUpdateCommandHandler;
use App\Models\Incident;
use App\Models\User;
use Tests\AbstractTestCase;

/**
 * This is the create incident update command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class CreateIncidentUpdateCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = [
            'incident' => new Incident(),
            'status'   => 1,
            'message'  => 'Foo',
            'user'     => new User(),
        ];
        $object = new CreateIncidentUpdateCommand($params['incident'], $params['status'], $params['message'], null, null, $params['user']);

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return true;
    }

    protected function getHandlerClass()
    {
        return CreateIncidentUpdateCommandHandler::class;
    }
}
