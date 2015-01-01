<?php

namespace CachetHQ\Cachet\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Incident;
use IncidentTemplate;

class DashIncidentController extends Controller
{
    /**
     * Shows the incidents view.
     *
     * @return \Illuminate\View\View
     */
    public function showIncidents()
    {
        $incidents = Incident::orderBy('created_at', 'desc')->get();

        return View::make('dashboard.incidents.index')->with([
            'pageTitle' => 'Incidents - Dashboard',
            'incidents' => $incidents,
        ]);
    }

    /**
     * Shows the add incident view.
     *
     * @return \Illuminate\View\View
     */
    public function showAddIncident()
    {
        return View::make('dashboard.incidents.add')->with([
            'pageTitle' => 'Add Incident - Dashboard',
        ]);
    }

    /**
     * Shows the add incident template view.
     *
     * @return \Illuminate\View\View
     */
    public function showAddIncidentTemplate()
    {
        return View::make('dashboard.incidents.incident-template')->with([
            'pageTitle' => 'Add Incident Template - Dashboard',
        ]);
    }

    /**
     * Creates a new incident template.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createIncidentTemplateAction()
    {
        $_template = Input::get('template');
        $template = IncidentTemplate::create($_template);

        return Redirect::back()->with('template', $template);
    }

    /**
     * Creates a new incident.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createIncidentAction()
    {
        $_incident = Input::get('incident');
        $incident = Incident::create($_incident);

        return Redirect::back()->with('incident', $incident);
    }

    /**
     * Deletes a given incident.
     *
     * @param \Incident $incident
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteIncidentAction(Incident $incident)
    {
        $incident->delete();

        return Redirect::back();
    }
}
