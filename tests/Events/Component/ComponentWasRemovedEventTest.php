<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Events\Component;

use CachetHQ\Cachet\Events\Component\ComponentWasRemovedEvent;
use CachetHQ\Cachet\Models\Component;

class ComponentWasRemovedEventTest extends AbstractComponentEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = ['component' => new Component()];
        $object = new ComponentWasRemovedEvent($params['component']);

        return compact('params', 'object');
    }
}
