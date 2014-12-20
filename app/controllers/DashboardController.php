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
     * Shows the add component view.
     * @return \Illuminate\View\View
     */
    public function showAddComponent() {
        return View::make('dashboard.component-add')->with([
            'pageTitle' => 'Add Component - Dashboard',
        ]);
    }

    /**
     * Creates a new component.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createComponentAction() {
        $_component = Input::get('component');
        $component = Component::create($_component);

        return Redirect::back()->with('component', $component);
    }

    /**
     * Deletes a given component.
     * @param  Component $component
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteComponentAction(Component $component) {
        $component->delete();
        return Redirect::back();
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
     * Shows the add incident view.
     * @return \Illuminate\View\View
     */
    public function showAddIncident() {
        return View::make('dashboard.incident-add')->with([
            'pageTitle' => 'Add Incident - Dashboard',
        ]);
    }

    /**
     * Creates a new incident.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createIncidentAction() {
        $_incident = Input::get('incident');
        $incident = Incident::create($_incident);

        return Redirect::back()->with('incident', $incident);
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
     * Shows the notifications view.
     * @return \Illuminate\View\View
     */
    public function showNotifications() {
        return View::make('dashboard.notifications')->with([
            'pageTitle' => 'Notifications - Dashboard'
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
