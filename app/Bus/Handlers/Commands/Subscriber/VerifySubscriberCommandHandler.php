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

use CachetHQ\Cachet\Bus\Commands\Subscriber\VerifySubscriberCommand;
use CachetHQ\Cachet\Bus\Events\Subscriber\SubscriberHasVerifiedEvent;
use CachetHQ\Cachet\Models\Subscriber;
use Carbon\Carbon;

class VerifySubscriberCommandHandler
{
    /**
     * Handle the subscribe customer command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Subscriber\VerifySubscriberCommand $command
     *
     * @return void
     */
    public function handle(VerifySubscriberCommand $command)
    {
        $subscriber = $command->subscriber;

        // Mark the subscriber as verified.
        $subscriber->verified_at = Carbon::now();
        $subscriber->save();

        event(new SubscriberHasVerifiedEvent($subscriber));
    }
}
