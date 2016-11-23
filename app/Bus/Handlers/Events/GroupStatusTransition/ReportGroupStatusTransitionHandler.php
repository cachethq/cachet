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
use CachetHQ\Cachet\Bus\Commands\GroupStatusTransition\UpdateGroupStatusTransitionCommand;
use CachetHQ\Cachet\Bus\Events\ComponentGroup\ComponentGroupStatusWasUpdatedEvent;
use CachetHQ\Cachet\Models\GroupStatusTransition;

/**
 * This is the report status transition handler for component groups.
 *
 * @author Nicolas Fagotti <nicolasfagotti@gmail.com>
 */
class ReportGroupStatusTransitionHandler
{
    /**
     * Handle the event.
     *
     * @param \CachetHQ\Cachet\Bus\Events\ComponentGroup\ComponentGroupStatusWasUpdatedEvent $event
     *
     * @return void
     */
    public function handle(ComponentGroupStatusWasUpdatedEvent $event)
    {
        $componentGroup = $event->group;
        $newGroupStatus = $componentGroup->enabled_components_lowest()->first() ? $componentGroup->enabled_components_lowest()->first()->status : 0;

        $lastStatusTransitions = GroupStatusTransition::where('component_group_id', '=', $componentGroup->id)
            ->orderBy('created_at', 'desc')
            ->first();

        // Get the components statuses that belongs to the component group.
        $componentsStatuses = [];
        foreach ($componentGroup->enabled_components_lowest()->get() as $cg) {
            $componentsStatuses[] = [
                'name'   => $cg->name,
                'status' => $cg->status,
            ];
        }

        // Update the offending components if the component group status hasn't changed.
        if ($lastStatusTransitions->status === $newGroupStatus) {
            dispatch(new UpdateGroupStatusTransitionCommand(
                $lastStatusTransitions,
                $componentGroup->id,
                $componentGroup->status,
                $this->mergeOffendingComponents(json_decode($lastStatusTransitions->offending_components, true), $componentsStatuses)
            ));

        // Create the component group status transition.
        } else {
            dispatch(new ReportGroupStatusTransitionCommand(
                $componentGroup->id,
                $newGroupStatus,
                json_encode($componentsStatuses)
            ));
        }
    }

    /**
     * Merge the two offending components arrays into one single array with the highest values for each component.
     *
     * @param array $originalComponents
     * @param array $newComponents
     *
     * @return string
     */
    private function mergeOffendingComponents($originalComponents, $newComponents)
    {
        foreach ($newComponents as $new) {
            $newComponentAdded = false;

            foreach ($originalComponents as $originalKey => $original) {
                if ($original['name'] == $new['name']) {
                    $originalComponents[$originalKey]['status'] = $original['status'] < $new['status'] ? $new['status'] : $original['status'];
                    $newComponentAdded = true;
                }
            }

            if (!$newComponentAdded) {
                $originalComponents[] = $new;
            }
        }

        return json_encode($originalComponents);
    }
}
