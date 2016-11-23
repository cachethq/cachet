<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Events\GroupStatusTransition;

use CachetHQ\Cachet\Bus\Commands\GroupStatusTransition\ReportGroupStatusTransitionCommand;
use CachetHQ\Cachet\Bus\Events\ComponentGroup\ComponentGroupWasAddedEvent;

/**
 * This is the handler for the first status transition.
 *
 * @author Nicolas Fagotti <nicolasfagotti@gmail.com>
 */
class StartGroupStatusTransitionHandler
{
    /**
     * Handle the event.
     *
     * @param \CachetHQ\Cachet\Bus\Events\ComponentGroup\ComponentGroupWasAddedEvent $event
     *
     * @return void
     */
    public function handle(ComponentGroupWasAddedEvent $event)
    {
        $componentGroup = $event->group;

        // Create the component group status transition.
        dispatch(new ReportGroupStatusTransitionCommand(
            $componentGroup->id,
            0,
            json_encode([])
        ));
    }
}
