<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Bus\Commands\Invite;

use AltThree\TestBench\CommandTrait;
use App\Bus\Commands\Invite\ClaimInviteCommand;
use App\Bus\Handlers\Commands\Invite\ClaimInviteCommandHandler;
use App\Models\Invite;
use Tests\AbstractTestCase;

/**
 * This is the claim invite command test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class ClaimInviteCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = ['invite' => new Invite()];
        $object = new ClaimInviteCommand($params['invite']);

        return compact('params', 'object');
    }

    protected function getHandlerClass()
    {
        return ClaimInviteCommandHandler::class;
    }
}
