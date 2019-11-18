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

use App\Bus\Commands\Subscriber\VerifySubscriberCommand;
use App\Bus\Events\Subscriber\SubscriberHasVerifiedEvent;
use App\Models\Subscriber;
use Carbon\Carbon;

class VerifySubscriberCommandHandler
{
    /**
     * Handle the subscribe customer command.
     *
     * @param \App\Bus\Commands\Subscriber\VerifySubscriberCommand $command
     *
     * @return void
     */
    public function handle(VerifySubscriberCommand $command)
    {
        $subscriber = $command->subscriber;

        // Mark the subscriber as verified.
        $subscriber->update(['verified_at' => Carbon::now()]);

        event(new SubscriberHasVerifiedEvent($subscriber));
    }
}
