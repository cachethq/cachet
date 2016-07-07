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

use CachetHQ\Cachet\Foundation\ViewObjects\SystemStatusViewObject;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\Incident;
use Illuminate\Contracts\View\View;
use CachetHQ\Cachet\Foundation\Queries\SystemStatusQuery;

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
        // Scheduled maintenance code.
        $scheduledMaintenance = Incident::scheduled()->orderBy('scheduled_at')->get();

        // Component & Component Group lists.
        $usedComponentGroups = Component::enabled()->where('group_id', '>', 0)->groupBy('group_id')->pluck('group_id');
        $componentGroups = ComponentGroup::whereIn('id', $usedComponentGroups)->orderBy('order')->get();
        $ungroupedComponents = Component::enabled()->where('group_id', 0)->orderBy('order')->orderBy('created_at')->get();

        $view->with((new SystemStatusViewObject(new SystemStatusQuery))->toArray())
            ->withComponentGroups($componentGroups)
            ->withUngroupedComponents($ungroupedComponents)
            ->withScheduledMaintenance($scheduledMaintenance);
    }
}
