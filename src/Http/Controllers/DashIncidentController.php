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
            'pageTitle' => trans('dashboard.incidents.incidents').' - '.trans('dashboard.dashboard'),
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
            'pageTitle' => trans('dashboard.incidents.add.title').' - '.trans('dashboard.dashboard'),
        ]);
    }

    /**
     * Creates a new incident.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createIncidentAction()
    {
        $incident = Incident::create(Binput::get('incident'));

        if (! $incident->isValid()) {
            return Redirect::back()->withInput(Binput::all())
                ->with('title', sprintf(
                    '<strong>%s</strong> %s',
                    trans('dashboard.notifications.whoops'),
                    trans('dashboard.incidents.add.failure')
                ))
                ->with('errors', $incident->getErrors());
        }

        $successMsg = sprintf(
            '<strong>%s</strong> %s',
            trans('dashboard.notifications.awesome'),
            trans('dashboard.incidents.add.success')
        );

        return Redirect::back()->with('success', $successMsg);
    }

    /**
     * Shows the add incident template view.
     *
     * @return \Illuminate\View\View
     */
    public function showAddIncidentTemplate()
    {
        return View::make('dashboard.incidents.templates.add')->with([
            'pageTitle' => trans('dashboard.incidents.templates.add.title').' - '.trans('dashboard.dashboard'),
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

        if (! $template->isValid()) {
            return Redirect::back()->withInput(Binput::all())
                ->with('title', sprintf(
                    '<strong>%s</strong> %s',
                    trans('dashboard.notifications.awesome'),
                    trans('dashboard.incidents.templates.add.failure')
                ))
                ->with('errors', $template->getErrors());
        }

        $successMsg = sprintf(
            '<strong>%s</strong> %s',
            trans('dashboard.notifications.awesome'),
            trans('dashboard.incidents.templates.add.success')
        );

        return Redirect::back()->with('success', $successMsg);
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
            'pageTitle' => trans('dashboard.incidents.edit.title').' - '.trans('dashboard.dashboard'),
            'incident'  => $incident,
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

        if (! $incident->isValid()) {
            return Redirect::back()->withInput(Binput::all())
                ->with('title', sprintf(
                    '<strong>%s</strong> %s',
                    trans('dashboard.notifications.awesome'),
                    trans('dashboard.incidents.templates.edit.failure')
                ))
                ->with('errors', $incident->getErrors());
        }

        $successMsg = sprintf(
            '<strong>%s</strong> %s',
            trans('dashboard.notifications.awesome'),
            trans('dashboard.incidents.edit.success')
        );

        return Redirect::to('dashboard/incidents')->with('success', $successMsg);
    }
}
