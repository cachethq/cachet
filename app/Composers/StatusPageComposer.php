<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Composers;

use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\Incident;
use Illuminate\Contracts\View\View;

class StatusPageComposer
{
    /**
     * Index page view composer.
     *
     * @param \Illuminate\Contracts\View\View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $totalComponents = Component::enabled()->count();
        $majorOutages = Component::enabled()->status(4)->count();
        $isMajorOutage = ($majorOutages / $totalComponents) >= 0.5;

        // Default data
        $withData = [
            'system_status'  => 'info',
            'system_message' => trans_choice('cachet.service.bad', $totalComponents),
            'favicon'        => 'favicon-high-alert',
        ];

        if ($isMajorOutage) {
            $withData = [
                'system_status'  => 'danger',
                'system_message' => trans_choice('cachet.service.major', $totalComponents),
                'favicon'        => 'favicon-high-alert',
            ];
        } elseif (Component::enabled()->notStatus(1)->count() === 0) {
            // If all our components are ok, do we have any non-fixed incidents?
            $incidents = Incident::notScheduled()->orderBy('created_at', 'desc')->get();
            $incidentCount = $incidents->count();

            if ($incidentCount === 0 || ($incidentCount >= 1 && (int) $incidents->first()->status === 4)) {
                $withData = [
                    'system_status'  => 'success',
                    'system_message' => trans_choice('cachet.service.good', $totalComponents),
                    'favicon'        => 'favicon',
                ];
            }
        } else {
            if (Component::enabled()->whereIn('status', [2, 3])->count() > 0) {
                $withData['favicon'] = 'favicon-medium-alert';
            }
        }

        // Scheduled maintenance code.
        $scheduledMaintenance = Incident::scheduled()->orderBy('scheduled_at')->get();

        // Component & Component Group lists.
        $usedComponentGroups = Component::enabled()->where('group_id', '>', 0)->groupBy('group_id')->pluck('group_id');
        $componentGroups = ComponentGroup::whereIn('id', $usedComponentGroups)->orderBy('order')->get();
        $ungroupedComponents = Component::enabled()->where('group_id', 0)->orderBy('order')->orderBy('created_at')->get();

        $view->with($withData)
            ->withComponentGroups($componentGroups)
            ->withUngroupedComponents($ungroupedComponents)
            ->withScheduledMaintenance($scheduledMaintenance);
    }
}
