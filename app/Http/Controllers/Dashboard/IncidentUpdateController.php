<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Dashboard;

use AltThree\Validator\ValidationException;
use CachetHQ\Cachet\Bus\Commands\IncidentUpdate\CreateIncidentUpdateCommand;
use CachetHQ\Cachet\Bus\Commands\IncidentUpdate\UpdateIncidentUpdateCommand;
use CachetHQ\Cachet\Integrations\Contracts\System;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\IncidentUpdate;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

/**
 * This is the incident update controller.
 *
 * @author James Brooks <james@alt-three.com>
 */
class IncidentUpdateController extends Controller
{
    /**
     * Stores the sub-sidebar tree list.
     *
     * @var array
     */
    protected $subMenu = [];

    /**
     * The guard instance.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * The system instance.
     *
     * @var \CachetHQ\Cachet\Integrations\Contracts\System
     */
    protected $system;

    /**
     * Creates a new incident controller instance.
     *
     * @param \Illuminate\Contracts\Auth\Guard $auth
     *
     * @return void
     */
    public function __construct(Guard $auth, System $system)
    {
        $this->auth = $auth;
        $this->system = $system;

        View::share('sub_title', trans('dashboard.incidents.title'));
    }

    /**
     * Shows the incident update form.
     *
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return \Illuminate\View\View
     */
    public function showIncidentUpdates(Incident $incident)
    {
        return View::make('dashboard.incidents.updates.index')->withIncident($incident);
    }

    /**
     * Shows the incident update form.
     *
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return \Illuminate\View\View
     */
    public function showCreateIncidentUpdateAction(Incident $incident)
    {
        return View::make('dashboard.incidents.updates.add')
            ->withIncident($incident)
            ->withNotificationsEnabled($this->system->canNotifySubscribers());
    }

    /**
     * Creates a new incident update.
     *
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createIncidentUpdateAction(Incident $incident)
    {
        try {
            $incidentUpdate = execute(new CreateIncidentUpdateCommand(
                $incident,
                Binput::get('status'),
                Binput::get('message'),
                Binput::get('component_id'),
                Binput::get('component_status'),
                $this->auth->user()
            ));
        } catch (ValidationException $e) {
            return cachet_redirect('dashboard.incidents.updates.create', ['id' => $incident->id])
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.incidents.updates.add.failure')))
                ->withErrors($e->getMessageBag());
        }

        if ($incident->component) {
            $incident->component->update(['status' => Binput::get('component_status')]);
        }

        return cachet_redirect('dashboard.incidents')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.incidents.updates.success')));
    }

    /**
     * Shows the edit incident view.
     *
     * @param \CachetHQ\Cachet\Models\Incident       $incident
     * @param \CachetHQ\Cachet\Models\IncidentUpdate $incidentUpdate
     *
     * @return \Illuminate\View\View
     */
    public function showEditIncidentUpdateAction(Incident $incident, IncidentUpdate $incidentUpdate)
    {
        return View::make('dashboard.incidents.updates.edit')
            ->withIncident($incident)
            ->withUpdate($incidentUpdate)
            ->withNotificationsEnabled($this->system->canNotifySubscribers());
    }

    /**
     * Edit an incident update.
     *
     * @param \CachetHQ\Cachet\Models\Incident       $incident
     * @param \CachetHQ\Cachet\Models\IncidentUpdate $incidentUpdate
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editIncidentUpdateAction(Incident $incident, IncidentUpdate $incidentUpdate)
    {
        try {
            $incidentUpdate = execute(new UpdateIncidentUpdateCommand(
                $incidentUpdate,
                Binput::get('status'),
                Binput::get('message'),
                $this->auth->user()
            ));
        } catch (ValidationException $e) {
            return cachet_redirect('dashboard.incidents.updates.edit', ['incident' => $incident->id, 'incident_update' => $incidentUpdate->id])
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.incidents.updates.edit.failure')))
                ->withErrors($e->getMessageBag());
        }

        return cachet_redirect('dashboard.incidents.updates', ['incident' => $incident->id])
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.incidents.updates.edit.success')));
    }
}
