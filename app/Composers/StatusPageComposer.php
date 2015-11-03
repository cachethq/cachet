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

use CachetHQ\Cachet\Facades\Setting;
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
        // Default data
        $withData = [
            'systemStatus'  => 'info',
            'systemMessage' => trans('cachet.service.bad'),
            'favicon'       => 'favicon-high-alert',
        ];

        if (Component::where('enabled', true)->notStatus(1)->count() === 0) {
            // If all our components are ok, do we have any non-fixed incidents?
            $incidents = Incident::notScheduled()->orderBy('created_at', 'desc')->get();
            $incidentCount = $incidents->count();

            if ($incidentCount === 0 || ($incidentCount >= 1 && (int) $incidents->first()->status === 4)) {
                $withData = [
                    'systemStatus'  => 'success',
                    'systemMessage' => trans('cachet.service.good'),
                    'favicon'       => 'favicon',
                ];
            }
        } else {
            if (Component::where('enabled', true)->whereIn('status', [2, 3])->count() > 0) {
                $withData['favicon'] = 'favicon-medium-alert';
            }
        }

        // Scheduled maintenance code.
        $scheduledMaintenance = Incident::scheduled()->orderBy('scheduled_at')->get();

        // Component & Component Group lists.
        $usedComponentGroups = Component::where('enabled', true)->where('group_id', '>', 0)->groupBy('group_id')->lists('group_id');
        $componentGroups = ComponentGroup::whereIn('id', $usedComponentGroups)->orderBy('order')->get();
        $ungroupedComponents = Component::where('enabled', true)->where('group_id', 0)->orderBy('order')->orderBy('created_at')->get();

        $view->with($withData)
            ->withComponentGroups($componentGroups)
            ->withUngroupedComponents($ungroupedComponents)
            ->withScheduledMaintenance($scheduledMaintenance)
            ->withPageTitle(Setting::get('app_name'));
    }
}
