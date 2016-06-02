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
use CachetHQ\Cachet\Bus\Commands\User\UpdateTeamMemberCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\User\UpdateTeamMemberCommandHandler;
use CachetHQ\Cachet\Models\User;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the update team member command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class UpdateTeamMemberCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = [
            'user'     => new User(),
            'username' => 'Test',
            'password' => 'fooey',
            'email'    => 'test@test.com',
            'level'    => 1,
        ];

        $object = new UpdateTeamMemberCommand(
            $params['user'],
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
        return UpdateTeamMemberCommandHandler::class;
    }
}
