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

use CachetHQ\Cachet\Bus\Events\ComponentGroup\ComponentGroupWasUpdatedEvent;
use CachetHQ\Cachet\Models\ComponentGroup;

class ComponentGroupWasUpdatedEventTest extends AbstractComponentGroupEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = ['group' => new ComponentGroup()];
        $object = new ComponentGroupWasUpdatedEvent($params['group']);

        return compact('params', 'object');
    }
}
