<?php

namespace CachetHQ\Cachet\Http\Controllers;

use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\IncidentTemplate;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

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
        $_template = Binput::get('template');
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
        $_incident = Binput::get('incident');
        $incident = Incident::create($_incident);

        return Redirect::back()->with('incident', $incident);
    }

    /**
     * Deletes a given incident.
     *
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteIncidentAction(Incident $incident)
    {
        $incident->delete();

        return Redirect::back();
    }

    /**
     * Shows the edit incident view.
     *
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return \Illuminate\View\View
     */
    public function showEditIncidentAction(Incident $incident)
    {
        return View::make('dashboard.incidents.edit')->with([
            'pageTitle' => 'Edit Incident - Dashboard',
            'incident' => $incident
        ]);
    }

    /**
     * Edit an incident.
     *
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editIncidentAction(Incident $incident)
    {
        $_incident = Binput::get('incident');
        $incident->update($_incident);

        return Redirect::to('dashboard/incidents');
    }
}
