<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Events\Component;

use CachetHQ\Cachet\Bus\Events\Component\ComponentWasRemovedEvent;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Subscription;

/**
 * This is the cleanup component subscriptions handler.
 *
 * @author James Brooks <james@alt-three.com>
 */
class CleanupComponentSubscriptionsHandler
{
    /**
     * Handle the event.
     *
     * @param \CachetHQ\Cachet\Bus\Events\Component\ComponentWasRemovedEvent $event
     *
     * @return void
     */
    public function handle(ComponentWasRemovedEvent $event)
    {
        $component = $event->component;
        $subscription = Subscription::forComponent($component->id);

        // Cleanup the subscriptions.
        $subscription->delete();
    }
}
