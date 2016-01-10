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

use CachetHQ\Cachet\Bus\Commands\Subscriber\SubscribeSubscriberCommand;
use CachetHQ\Cachet\Bus\Commands\Subscriber\VerifySubscriberCommand;
use CachetHQ\Cachet\Bus\Events\Subscriber\SubscriberHasSubscribedEvent;
use CachetHQ\Cachet\Bus\Events\Subscriber\SubscriberHasUpdatedSubscriptionsEvent;
use CachetHQ\Cachet\Bus\Exceptions\Subscriber\AlreadySubscribedException;
use CachetHQ\Cachet\Models\Subscriber;
use CachetHQ\Cachet\Models\Subscription;

/**
 * This is the subscribe subscriber command handler.
 *
 * @author James Brooks <james@alt-three.com>
 */
class SubscribeSubscriberCommandHandler
{
    /**
     * Handle the subscribe subscriber command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Subscriber\SubscribeSubscriberCommand $command
     *
     * @throws \CachetHQ\Cachet\Exceptions\AlreadySubscribedException
     *
     * @return \CachetHQ\Cachet\Models\Subscriber
     */
    public function handle(SubscribeSubscriberCommand $command)
    {
        if (Subscriber::where('email', $command->email)->first() && $command->subscriptions === null) {
            throw new AlreadySubscribedException("Cannot subscribe {$command->email} because they're already subscribed.");
        }

        $subscriber = Subscriber::firstOrCreate(['email' => $command->email]);

        if ($subscriptions = $command->subscriptions) {
            foreach ($subscriptions as $subscription => $subscriptionValue) {
                Subscription::firstOrCreate([
                    'subscriber_id' => $subscriber->id,
                    $subscription   => $subscriptionValue,
                ]);
            }
        }

        if ($subscriber->is_verified === false) {
            if ($command->verified) {
                dispatch(new VerifySubscriberCommand($subscriber));
            } else {
                event(new SubscriberHasSubscribedEvent($subscriber));
            }
        } else {
            event(new SubscriberHasUpdatedSubscriptionsEvent($subscriber));
        }

        return $subscriber;
    }
}
