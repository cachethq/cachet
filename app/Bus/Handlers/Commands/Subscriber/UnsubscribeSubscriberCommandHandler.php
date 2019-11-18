<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Bus\Handlers\Commands\Subscriber;

use App\Bus\Commands\Subscriber\UnsubscribeSubscriberCommand;
use App\Bus\Events\Subscriber\SubscriberHasUnsubscribedEvent;

/**
 * This is the unsubscribe subscriber command class.
 *
 * @author Joseph Cohem <joe@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 */
class UnsubscribeSubscriberCommandHandler
{
    /**
     * Handle the subscribe customer command.
     *
     * @param \App\Bus\Commands\Subscriber\UnsubscribeSubscriberCommand $command
     *
     * @return void
     */
    public function handle(UnsubscribeSubscriberCommand $command)
    {
        $subscriber = $command->subscriber;

        // First remove subscriptions.
        $subscriber->subscriptions()->delete();

        event(new SubscriberHasUnsubscribedEvent($subscriber));

        // Then remove the subscriber.
        $subscriber->delete();
    }
}
