<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Events\Subscriber;

use CachetHQ\Cachet\Bus\Events\Subscriber\SubscriberHasUpdatedSubscriptionsEvent;
use CachetHQ\Cachet\Models\Subscriber;

/**
 * This is the subscriber has updated subscriptions event test.
 *
 * @author James Brooks <james@alt-three.com>
 */
class SubscriberHasUpdatedSubscriptionsEventTest extends AbstractSubscriberEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = ['subscriber' => new Subscriber()];
        $object = new SubscriberHasUpdatedSubscriptionsEvent($params['subscriber']);

        return compact('params', 'object');
    }
}
