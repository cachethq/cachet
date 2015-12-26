<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Events\Subscriber;

use CachetHQ\Cachet\Events\Subscriber\SubscriberHasUnsubscribedEvent;
use CachetHQ\Cachet\Models\Subscriber;

class SubscriberHasUnsubscribedEventTest extends AbstractSubscriberEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = ['subscriber' => new Subscriber()];
        $object = new SubscriberHasUnsubscribedEvent($params['subscriber']);

        return compact('params', 'object');
    }
}
