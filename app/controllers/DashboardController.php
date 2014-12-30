<?php

class DashboardController extends Controller
{
    /**
     * Shows the dashboard view.
     *
     * @return \Illuminate\View\View
     */
    public function showDashboard()
    {
        // TODO: Find steps needed to complete setup.
        return View::make('dashboard.index')->withComponents(Component::all());
    }

    /**
     * Shows the metrics view.
     *
     * @return \Illuminate\View\View
     */
    public function showMetrics()
    {
        return View::make('dashboard.metrics')->withPageTitle('Metrics - Dashboard');
    }

    /**
     * Shows the notifications view.
     *
     * @return \Illuminate\View\View
     */
    public function showNotifications()
    {
        return View::make('dashboard.notifications')->withPageTitle('Notifications - Dashboard');
    }
}
