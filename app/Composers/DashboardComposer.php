<?php

namespace CachetHQ\Cachet\Composers;

use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Incident;
use Illuminate\View\View;

class DashboardComposer
{
    /**
     * Bind data to the view.
     *
     * @param \Illuminate\View\View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('incidentCount', Incident::notScheduled()->count());
        $view->with('componentCount', Component::all()->count());
    }
}
