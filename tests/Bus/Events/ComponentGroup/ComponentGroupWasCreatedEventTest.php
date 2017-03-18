<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Events\ComponentGroup;

use CachetHQ\Cachet\Bus\Events\ComponentGroup\ComponentGroupWasCreatedEvent;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\User;

class ComponentGroupWasCreatedEventTest extends AbstractComponentGroupEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = ['user' => new User(), 'group' => new ComponentGroup()];
        $object = new ComponentGroupWasCreatedEvent($params['user'], $params['group']);

        return compact('params', 'object');
    }
}
