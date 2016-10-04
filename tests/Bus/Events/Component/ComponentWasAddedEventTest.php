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

use CachetHQ\Cachet\Bus\Events\Component\ComponentWasAddedEvent;
use CachetHQ\Cachet\Models\Component;

class ComponentWasAddedEventTest extends AbstractComponentEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = ['component' => new Component()];
        $object = new ComponentWasAddedEvent($params['component']);

        return compact('params', 'object');
    }
}
