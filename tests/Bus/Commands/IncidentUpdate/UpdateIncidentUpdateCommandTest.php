<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Commands\IncidentUpdate;

use AltThree\TestBench\CommandTrait;
use CachetHQ\Cachet\Bus\Commands\IncidentUpdate\UpdateIncidentUpdateCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\IncidentUpdate\UpdateIncidentUpdateCommandHandler;
use CachetHQ\Cachet\Models\IncidentUpdate;
use CachetHQ\Cachet\Models\User;
use CachetHQ\Tests\Cachet\AbstractTestCase;

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
