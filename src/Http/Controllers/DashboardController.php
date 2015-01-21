<?php

namespace CachetHQ\Cachet\Http\Controllers;

use CachetHQ\Cachet\Models\Component;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    /**
     * Shows the dashboard view.
     *
     * @return \Illuminate\View\View
     */
    public function showDashboard()
    {
        $components = Component::all();

        return View::make('dashboard.index')->with([
            'components' => $components,
        ]);
    }

    /**
     * Shows the notifications view.
     *
     * @return \Illuminate\View\View
     */
    public function showNotifications()
    {
        return View::make('dashboard.notifications.index')->with([
            'pageTitle' => trans('dashboard.notifications.notifications').' - '.trans('dashboard.dashboard'),
        ]);
    }
}
