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

use CachetHQ\Cachet\Bus\Commands\Subscriber\UpdateSubscriberCommand;
use CachetHQ\Cachet\Bus\Commands\Subscriber\UpdateSubscriberSubscriptionCommand;
use CachetHQ\Cachet\Bus\Events\Subscriber\SubscriberHasUpdatedSubscriptionsEvent;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Subscriber;
use CachetHQ\Cachet\Models\Subscription;
use Carbon\Carbon;

/**
 * This is the subscribe subscriber command handler.
 *
 * @author Piotr Grabowski <pgrabowski@fandom.com>
 */
class UpdateSubscriberCommandHandler
{
    /**
     * Handle the update subscriber command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Subscriber\UpdateSubscriberCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Subscriber
     */
    public function handle(UpdateSubscriberCommand $command)
    {
        $subscriber = $command->subscriber;

        $subscriber->email = $command->email;

        if (!$subscriber->is_verified && $command->verified){
            $subscriber->verified_at = Carbon::now();
        }elseif(!$command->verified){
            $subscriber->verified_at = null;
        }
        $subscriber->save();

        dispatch(new UpdateSubscriberSubscriptionCommand(
            $subscriber,
            $command->subscriptions
        ));

        return $subscriber;
    }
}
