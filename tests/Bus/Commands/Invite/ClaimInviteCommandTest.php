<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Commands\Invite;

use AltThree\TestBench\CommandTrait;
use CachetHQ\Cachet\Bus\Commands\Invite\ClaimInviteCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\Invite\ClaimInviteCommandHandler;
use CachetHQ\Cachet\Models\Invite;
use CachetHQ\Tests\Cachet\AbstractTestCase;

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
