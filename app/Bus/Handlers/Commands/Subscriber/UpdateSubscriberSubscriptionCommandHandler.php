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

use CachetHQ\Cachet\Bus\Commands\Subscriber\UpdateSubscriberSubscriptionCommand;
use CachetHQ\Cachet\Bus\Events\Subscriber\SubscriberHasUpdatedSubscriptionsEvent;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Subscriber;
use CachetHQ\Cachet\Models\Subscription;

/**
 * This is the subscribe subscriber command handler.
 *
 * @author Joseph Cohen <joe@alt-three.com>
 */
class UpdateSubscriberSubscriptionCommandHandler
{
    /**
     * Handle the subscribe subscriber command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Subscriber\UpdateSubscriberSubscriptionCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Subscriber
     */
    public function handle(UpdateSubscriberSubscriptionCommand $command)
    {
        $subscriber = $command->subscriber;
        $subscriptions = $command->subscriptions ?: [];

        $components = Component::all();

        $updateSubscriptions = $components->filter(function ($item) use ($subscriptions) {
            return in_array($item->id, $subscriptions);
        });

        $subscriber->global = ($updateSubscriptions->count() === $components->count());

        $subscriber->subscriptions()->delete();

        if (!$updateSubscriptions->isEmpty()) {
            $updateSubscriptions->each(function ($subscription) use ($subscriber) {
                Subscription::firstOrCreate([
                    'subscriber_id' => $subscriber->id,
                    'component_id'  => $subscription->id,
                ]);
            });
        }

        $subscriber->save();

        event(new SubscriberHasUpdatedSubscriptionsEvent($subscriber));

        return $subscriber;
    }
}
