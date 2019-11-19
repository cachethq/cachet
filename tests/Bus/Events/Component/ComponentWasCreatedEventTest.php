<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Bus\Events\Component;

use App\Bus\Events\Component\ComponentWasCreatedEvent;
use App\Models\Component;
use App\Models\User;

class ComponentWasCreatedEventTest extends AbstractComponentEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = ['user' => new User(), 'component' => new Component()];
        $object = new ComponentWasCreatedEvent($params['user'], $params['component']);

        return compact('params', 'object');
    }
}
