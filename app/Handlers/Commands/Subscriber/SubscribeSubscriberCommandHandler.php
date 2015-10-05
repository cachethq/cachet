<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Handlers\Commands\Subscriber;

use CachetHQ\Cachet\Commands\Subscriber\SubscribeSubscriberCommand;
use CachetHQ\Cachet\Commands\Subscriber\VerifySubscriberCommand;
use CachetHQ\Cachet\Events\Subscriber\SubscriberHasSubscribedEvent;
use CachetHQ\Cachet\Models\Subscriber;
use Illuminate\Foundation\Bus\DispatchesJobs;

class SubscribeSubscriberCommandHandler
{
    use DispatchesJobs;

    /**
     * Handle the subscribe subscriber command.
     *
     * @param \CachetHQ\Cachet\Commands\Subscriber\SubscribeSubscriberCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Subscriber
     */
    public function handle(SubscribeSubscriberCommand $command)
    {
        $subscriber = Subscriber::create(['email' => $command->email]);

        if ($command->verified) {
            $this->dispatch(new VerifySubscriberCommand($subscriber));
        } else {
            event(new SubscriberHasSubscribedEvent($subscriber));
        }

        return $subscriber;
    }
}
