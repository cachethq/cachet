<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Events\User;

use CachetHQ\Cachet\Bus\Events\User\UserWasInvitedEvent;
use CachetHQ\Cachet\Models\Invite;

/**
 * This is the user was invited event test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class UserWasInvitedEventTest extends AbstractUserEventTestCase
{
    protected function objectHasHandlers()
    {
        return true;
    }

    protected function getObjectAndParams()
    {
        $params = ['invite' => new Invite()];
        $object = new UserWasInvitedEvent($params['invite']);

        return compact('params', 'object');
    }
}
