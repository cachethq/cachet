<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Bus\Events\User;

use App\Bus\Events\User\UserAcceptedInviteEvent;
use App\Models\Invite;
use App\Models\User;

/**
 * This is the user accepted invite event test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class UserAcceptedInviteEventTest extends AbstractUserEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = [
            'user'   => new User(),
            'invite' => new Invite(),
        ];
        $object = new UserAcceptedInviteEvent($params['user'], $params['invite']);

        return compact('params', 'object');
    }
}
