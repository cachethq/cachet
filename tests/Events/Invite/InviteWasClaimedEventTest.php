<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Events\Invite;

use CachetHQ\Cachet\Events\Invite\InviteWasClaimedEvent;
use CachetHQ\Cachet\Models\Invite;

class InviteWasClaimedEventTest extends AbstractInviteEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = ['invite' => new Invite()];
        $object = new InviteWasClaimedEvent($params['invite']);

        return compact('params', 'object');
    }
}
