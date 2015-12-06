<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Commands\User;

use AltThree\TestBench\CommandTrait;
use CachetHQ\Cachet\Commands\User\SignupUserCommand;
use CachetHQ\Cachet\Handlers\Commands\User\SignupUserCommandHandler;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the signup user command test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class SignupUserCommandTest extends AbstractTestCase
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

        $object = new SignupUserCommand(
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
        return SignupUserCommandHandler::class;
    }
}
