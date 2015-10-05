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

use CachetHQ\Cachet\Commands\User\RemoveUserCommand;
use CachetHQ\Cachet\Handlers\Commands\User\RemoveUserCommandHandler;
use CachetHQ\Cachet\Models\User;
use CachetHQ\Tests\Cachet\Commands\AbstractCommandTestCase;

/**
 * This is the remove user command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class RemoveUserCommandTest extends AbstractCommandTestCase
{
    protected function getObjectAndParams()
    {
        $params = ['user' => new User()];
        $object = new RemoveUserCommand($params['user']);

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return false;
    }

    protected function getHandlerClass()
    {
        return RemoveUserCommandHandler::class;
    }
}
