<?php

class DashboardController extends Controller {
    /**
     * Shows the dashboard view.
     * @return \Illuminate\View\View
     */
    public function showDashboard() {
        return View::make('dashboard.index');
    }

    public function showSettings() {
        return View::make('dashboard.settings')->with([
            'pageTitle' => 'Settings - Dashboard'
        ]);
    }
}
