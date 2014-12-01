<?php

class DashboardController extends Controller {
    /**
     * Shows the dashboard view.
     * @return \Illuminate\View\View
     */
    public function showDashboard() {
        return View::make('dashboard.index');
    }
}
