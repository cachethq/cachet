<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Bus\Events\Subscriber;

use App\Models\Subscriber;

final class SubscriberHasVerifiedEvent implements SubscriberEventInterface
{
    /**
     * The subscriber who has verified.
     *
     * @var \App\Models\Subscriber
     */
    public $subscriber;

    /**
     * Create a new subscriber has subscribed event instance.
     *
     * @param \App\Models\Subscriber $subscriber
     *
     * @return void
     */
    public function __construct(Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;
    }

    /**
     * Get the event description.
     *
     * @return string
     */
    public function __toString()
    {
        return 'Subscriber has verified.';
    }
}
