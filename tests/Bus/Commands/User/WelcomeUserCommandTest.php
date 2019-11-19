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
use App\Bus\Commands\User\WelcomeUserCommand;
use App\Bus\Handlers\Commands\User\WelcomeUserCommandHandler;
use App\Models\User;
use Tests\AbstractTestCase;

/**
 * This is the welcome user command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class WelcomeUserCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = ['user' => new User()];

        $object = new WelcomeUserCommand($params['user']);

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return false;
    }

    protected function getHandlerClass()
    {
        return WelcomeUserCommandHandler::class;
    }
}
