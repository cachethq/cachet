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
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Subscriber;
use CachetHQ\Cachet\Models\Subscription;

/**
 * This is the subscribe subscriber command handler.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Joe Cohen <joe@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class SubscribeSubscriberCommandHandler
{
    /**
     * Handle the subscribe subscriber command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Subscriber\SubscribeSubscriberCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Subscriber
     */
    public function handle(SubscribeSubscriberCommand $command)
    {
        if ($subscriber = Subscriber::where('email', $command->email)->first()) {
            return $subscriber;
        }

        $subscriber = Subscriber::firstOrCreate(['email' => $command->email]);

        // Decide what to subscribe the subscriber to.
        if ($subscriptions = $command->subscriptions) {
            $components = Component::whereIn('id', $subscriptions)->get();
        } else {
            $components = Component::all();
        }

        $components->map(function ($component) use ($subscriber) {
            Subscription::create([
                'subscriber_id' => $subscriber->id,
                'component_id'  => $component->id,
            ]);
        });

        if ($command->verified) {
            dispatch(new VerifySubscriberCommand($subscriber));
        } else {
            event(new SubscriberHasSubscribedEvent($subscriber));
        }

        $subscriber->load('subscriptions');

        return $subscriber;
    }
}
