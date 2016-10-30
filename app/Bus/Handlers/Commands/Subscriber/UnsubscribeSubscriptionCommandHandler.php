<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Commands\Subscriber;

use CachetHQ\Cachet\Bus\Commands\Subscriber\UnsubscribeSubscriptionCommand;
use CachetHQ\Cachet\Bus\Events\Subscriber\SubscriberHasUnsubscribedEvent;
use CachetHQ\Cachet\Models\Subscription;

class UnsubscribeSubscriptionCommandHandler
{
    /**
     * Handle the unsubscribe subscription command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Subscriber\UnsubscribeSubscriptionCommand $command
     *
     * @return void
     */
    public function handle(UnsubscribeSubscriptionCommand $command)
    {
        $subscription = $command->subscription;

        event(new SubscriberHasUnsubscribedEvent($subscription->subscriber));

        $subscription->delete();
    }
}
