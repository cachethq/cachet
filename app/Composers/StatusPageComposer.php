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

use CachetHQ\Cachet\Integrations\Core\System;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\Incident;
use Illuminate\Contracts\View\View;

/**
 * This is the status page composer.
 *
 * @author James Brooks <james@alt-three.com>
 */
class StatusPageComposer
{
    /**
     * The system instance.
     *
     * @var \CachetHQ\Cachet\Integrations\Contracts\System
     */
    protected $system;

    /**
     * Create a new status page composer instance.
     *
     * @param \CachetHQ\Cachet\Integrations\Contracts\System $system
     *
     * @return void
     */
    public function __construct(System $system)
    {
        $this->system = $system;
    }

    /**
     * Index page view composer.
     *
     * @param \Illuminate\Contracts\View\View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $status = $this->system->getStatus();

        // Scheduled maintenance code.
        $scheduledMaintenance = Incident::scheduled()->orderBy('scheduled_at')->get();

        // Component & Component Group lists.
        $usedComponentGroups = Component::enabled()->where('group_id', '>', 0)->groupBy('group_id')->pluck('group_id');
        $componentGroups = ComponentGroup::whereIn('id', $usedComponentGroups)->orderBy('order')->get();
        $ungroupedComponents = Component::enabled()->where('group_id', 0)->orderBy('order')->orderBy('created_at')->get();

        $view->with($status)
            ->withComponentGroups($componentGroups)
            ->withUngroupedComponents($ungroupedComponents)
            ->withScheduledMaintenance($scheduledMaintenance);
    }
}
