<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Events;

use CachetHQ\Cachet\Models\Subscriber;

class SubscriberHasUnsubscribedEvent
{
    /**
     * The subscriber who has unsubscribed.
     *
     * @var \CachetHQ\Cachet\Models\Subscriber
     */
    public $subscriber;

    /**
     * Create a new subscriber has unsubscribed event instance.
     */
    public function __construct(Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;
    }
}
