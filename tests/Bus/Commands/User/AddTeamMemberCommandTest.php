<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Commands\User;

use AltThree\TestBench\CommandTrait;
use CachetHQ\Cachet\Bus\Commands\User\AddTeamMemberCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\User\AddTeamMemberCommandHandler;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the add team member command test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class AddTeamMemberCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = [
            'username' => 'Test',
            'password' => 'fooey',
            'email'    => 'test@test.com',
            'level'    => 1,
        ];

        $object = new AddTeamMemberCommand(
            $params['username'],
            $params['password'],
            $params['email'],
            $params['level']
        );

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return true;
    }

    protected function getHandlerClass()
    {
        return AddTeamMemberCommandHandler::class;
    }
}
