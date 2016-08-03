<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Events\Subscriber;

use CachetHQ\Cachet\Annotations\HandlerAnnotation;
use CachetHQ\Cachet\Models\Subscriber;

/**
 * This is the subscriber has subscribed event class.
 *
 * @HandlerAnnotation("CachetHQ\Cachet\Bus\Handlers\Events\Subscriber\SendSubscriberVerificationEmailHandler")
 *
 * @author Joe Cohen <joe@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
final class SubscriberHasSubscribedEvent implements SubscriberEventInterface
{
    /**
     * The subscriber who has subscribed.
     *
     * @var \CachetHQ\Cachet\Models\Subscriber
     */
    public $subscriber;

    /**
     * Create a new subscriber has subscribed event instance.
     *
     * @param \CachetHQ\Cachet\Models\Subscriber $subscriber
     *
     * @return void
     */
    public function __construct(Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;
    }
}
