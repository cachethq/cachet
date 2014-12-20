<?php

class DashIncidentController extends Controller {
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
}
