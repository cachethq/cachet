<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Events\Component;

use CachetHQ\Cachet\Bus\Events\Component\ComponentStatusWasUpdatedEvent;
use CachetHQ\Cachet\Models\Component;

/**
 * This is the component status was updated event test.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ComponentStatusWasUpdatedEventTest extends AbstractComponentEventTestCase
{
    protected function objectHasHandlers()
    {
        return true;
    }

    protected function getObjectAndParams()
    {
        $params = ['component' => new Component(), 'original_status' => 1, 'new_status' => 1];
        $object = new ComponentStatusWasUpdatedEvent($params['component'], $params['original_status'], $params['new_status']);

        return compact('params', 'object');
    }
}
