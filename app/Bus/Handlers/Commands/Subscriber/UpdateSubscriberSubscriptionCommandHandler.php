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

use App\Bus\Commands\Subscriber\UpdateSubscriberSubscriptionCommand;
use App\Bus\Events\Subscriber\SubscriberHasUpdatedSubscriptionsEvent;
use App\Models\Component;
use App\Models\Subscriber;
use App\Models\Subscription;

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
     * @param \App\Bus\Commands\Subscriber\UpdateSubscriberSubscriptionCommand $command
     *
     * @return \App\Models\Subscriber
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
