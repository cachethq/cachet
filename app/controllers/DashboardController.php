<?php

class DashboardController extends Controller {
    /**
     * Shows the dashboard view.
     * @return \Illuminate\View\View
     */
    public function showDashboard() {
        return View::make('dashboard.index');
    }

    /**
     * Shows the components view.
     * @return \Illuminate\View\View
     */
    public function showComponents() {
        $components = Component::all();

        return View::make('dashboard.components')->with([
            'pageTitle' => 'Components - Dashboard',
            'components' => $components
        ]);
    }

    /**
     * Shows the incidents view.
     * @return \Illuminate\View\View
     */
    public function showIncidents() {
        $incidents = Incident::all();

        return View::make('dashboard.incidents')->with([
            'pageTitle' => 'Incidents - Dashboard',
            'incidents' => $incidents
        ]);
    }

    /**
     * Shows the metrics view.
     * @return \Illuminate\View\View
     */
    public function showMetrics() {
        return View::make('dashboard.metrics')->with([
            'pageTitle' => 'Metrics - Dashboard'
        ]);
    }

    /**
     * Shows the settings view.
     * @return \Illuminate\View\View
     */
    public function showSettings() {
        return View::make('dashboard.settings')->with([
            'pageTitle' => 'Settings - Dashboard'
        ]);
    }
}
