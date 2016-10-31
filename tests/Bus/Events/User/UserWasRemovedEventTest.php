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

use CachetHQ\Cachet\Bus\Events\User\UserWasRemovedEvent;
use CachetHQ\Cachet\Models\User;

/**
 * This is the user was removed event test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class UserWasRemovedEventTest extends AbstractUserEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = ['user' => new User()];
        $object = new UserWasRemovedEvent($params['user']);

        return compact('params', 'object');
    }
}
