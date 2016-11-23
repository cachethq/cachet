<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Events\ComponentStatusTransition;

use CachetHQ\Cachet\Bus\Commands\ComponentStatusTransition\ReportComponentStatusTransitionCommand;
use CachetHQ\Cachet\Bus\Events\Component\ComponentWasAddedEvent;

/**
 * This is the handler for the first status transition.
 *
 * @author Nicolas Fagotti <nicolasfagotti@gmail.com>
 */
class StartComponentStatusTransitionHandler
{
    /**
     * Handle the event.
     *
     * @param \CachetHQ\Cachet\Bus\Events\Component\ComponentWasAddedEvent $event
     *
     * @return void
     */
    public function handle(ComponentWasAddedEvent $event)
    {
        $component = $event->component;

        // Create the status transition.
        dispatch(new ReportComponentStatusTransitionCommand(
            $component->id,
            $component->status
        ));
    }
}
