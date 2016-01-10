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

use CachetHQ\Cachet\Bus\Events\Component\ComponentWasUpdatedEvent;
use CachetHQ\Cachet\Models\Component;

class ComponentWasUpdatedEventTest extends AbstractComponentEventTestCase
{
    protected function objectHasHandlers()
    {
        return true;
    }

    protected function getObjectAndParams()
    {
        $params = ['component' => new Component()];
        $object = new ComponentWasUpdatedEvent($params['component']);

        return compact('params', 'object');
    }
}
