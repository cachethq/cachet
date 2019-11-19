<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Bus\Events\Subscriber;

use App\Bus\Events\Subscriber\SubscriberHasSubscribedEvent;
use App\Models\Subscriber;

class SubscriberHasSubscribedEventTest extends AbstractSubscriberEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = ['subscriber' => new Subscriber()];
        $object = new SubscriberHasSubscribedEvent($params['subscriber']);

        return compact('params', 'object');
    }
}
