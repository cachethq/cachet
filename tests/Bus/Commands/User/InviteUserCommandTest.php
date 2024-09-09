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
use CachetHQ\Cachet\Bus\Commands\User\InviteUserCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\User\InviteUserCommandHandler;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the invite user command test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 * @author James Brooks <graham@alt-three.com>
 */
class InviteUserCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = ['emails' => ['foo@example.com']];
        $object = new InviteUserCommand($params['emails']);

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return true;
    }

    protected function getHandlerClass()
    {
        return InviteUserCommandHandler::class;
    }
}
