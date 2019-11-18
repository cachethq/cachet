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

use App\Bus\Commands\Subscriber\SubscribeSubscriberCommand;
use App\Bus\Commands\Subscriber\VerifySubscriberCommand;
use App\Bus\Events\Subscriber\SubscriberHasSubscribedEvent;
use App\Models\Component;
use App\Models\Subscriber;
use App\Models\Subscription;
use App\Notifications\Subscriber\VerifySubscriptionNotification;

/**
 * This is the subscribe subscriber command handler.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Joseph Cohen <joe@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class SubscribeSubscriberCommandHandler
{
    /**
     * Handle the subscribe subscriber command.
     *
     * @param \App\Bus\Commands\Subscriber\SubscribeSubscriberCommand $command
     *
     * @return \App\Models\Subscriber
     */
    public function handle(SubscribeSubscriberCommand $command)
    {
        if ($subscriber = Subscriber::where('email', '=', $command->email)->first()) {
            return $subscriber;
        }

        $subscriber = Subscriber::firstOrCreate(['email' => $command->email]);

        // Decide what to subscribe the subscriber to.
        if ($subscriptions = $command->subscriptions) {
            $components = Component::whereIn('id', $subscriptions)->get();
        } else {
            $components = Component::all();
        }

        $components->each(function ($component) use ($subscriber) {
            Subscription::create([
                'subscriber_id' => $subscriber->id,
                'component_id'  => $component->id,
            ]);
        });

        if ($command->verified) {
            execute(new VerifySubscriberCommand($subscriber));
        } else {
            $subscriber->notify(new VerifySubscriptionNotification());
        }

        event(new SubscriberHasSubscribedEvent($subscriber));

        $subscriber->load('subscriptions');

        return $subscriber;
    }
}
