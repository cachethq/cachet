<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Bus\Commands\User;

use AltThree\TestBench\CommandTrait;
use App\Bus\Commands\User\CreateUserCommand;
use App\Bus\Handlers\Commands\User\CreateUserCommandHandler;
use Tests\AbstractTestCase;

/**
 * This is the create user command test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class CreateUserCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = [
            'username' => 'Test',
            'password' => 'fooey',
            'email'    => 'test@example.com',
            'level'    => 1,
        ];

        $object = new CreateUserCommand(
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
        return CreateUserCommandHandler::class;
    }
}
