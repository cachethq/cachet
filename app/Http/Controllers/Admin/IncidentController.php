<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Admin;

use AltThree\Validator\ValidationException;
use CachetHQ\Cachet\Events\IncidentHasReportedEvent;
use CachetHQ\Cachet\Facades\Setting;
use CachetHQ\Cachet\Http\Controllers\AbstractController;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\IncidentTemplate;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Jenssegers\Date\Date;

class IncidentController extends AbstractController
{
    /**
     * Stores the sub-sidebar tree list.
     *
     * @var array
     */
    protected $subMenu = [];

    /**
     * Creates a new DashIncidentController instance.
     *
     * @return \CachetHQ\Cachet\Http\Controllers\DashScheduleController
     */
    public function __construct()
    {
        $this->subMenu = [
            'incidents' => [
                'title'  => trans('dashboard.incidents.incidents'),
                'url'    => route('dashboard.incidents'),
                'icon'   => 'ion-android-checkmark-circle',
                'active' => true,
            ],
            'schedule' => [
                'title'  => trans('dashboard.schedule.schedule'),
                'url'    => route('dashboard.schedule'),
                'icon'   => 'ion-android-calendar',
                'active' => false,
            ],
        ];

        View::share('sub_menu', $this->subMenu);
        View::share('sub_title', trans('dashboard.incidents.title'));
    }

    /**
     * Shows the incidents view.
     *
     * @return \Illuminate\View\View
     */
    public function showIncidents()
    {
        $incidents = Incident::notScheduled()->orderBy('created_at', 'desc')->get();

        return View::make('dashboard.incidents.index')
            ->withPageTitle(trans('dashboard.incidents.incidents').' - '.trans('dashboard.dashboard'))
            ->withIncidents($incidents);
    }

    /**
     * Shows the add incident view.
     *
     * @return \Illuminate\View\View
     */
    public function showAddIncident()
    {
        return View::make('dashboard.incidents.add')
            ->withPageTitle(trans('dashboard.incidents.add.title').' - '.trans('dashboard.dashboard'))
            ->withComponentsInGroups(ComponentGroup::with('components')->get())
            ->withComponentsOutGroups(Component::where('group_id', 0)->get())
            ->withIncidentTemplates(IncidentTemplate::all());
    }

    /**
     * Shows the incident templates.
     *
     * @return \Illuminate\View\View
     */
    public function showTemplates()
    {
        return View::make('dashboard.incidents.templates.index')
            ->withPageTitle(trans('dashboard.incidents.templates.title').' - '.trans('dashboard.dashboard'))
            ->withIncidentTemplates(IncidentTemplate::all());
    }

    /**
     * Creates a new incident.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createIncidentAction()
    {
        $incidentData = Binput::get('incident');
        $componentStatus = array_pull($incidentData, 'component_status');

        if (array_has($incidentData, 'created_at') && $incidentData['created_at']) {
            $incidentDate = Date::createFromFormat('d/m/Y H:i', $incidentData['created_at'], Setting::get('app_timezone'))->setTimezone(Config::get('app.timezone'));
            $incidentData['created_at'] = $incidentDate;
            $incidentData['updated_at'] = $incidentDate;
        } else {
            unset($incidentData['created_at']);
        }

        try {
            $incident = Incident::create($incidentData);
        } catch (ValidationException $e) {
            return Redirect::back()
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.incidents.add.failure')))
                ->withErrors($e->getMessageBag());
        }

        // Update the component.
        if (isset($incidentData['component_id']) && (int) $incidentData['component_id'] > 0) {
            Component::find($incidentData['component_id'])->update(['status' => $componentStatus]);
        }

        if (array_get($incidentData, 'notify') && subscribers_enabled()) {
            event(new IncidentHasReportedEvent($incident));
        }

        return Redirect::back()
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.incidents.add.success')));
    }

    /**
     * Shows the add incident template view.
     *
     * @return \Illuminate\View\View
     */
    public function showAddIncidentTemplate()
    {
        return View::make('dashboard.incidents.templates.add')
            ->withPageTitle(trans('dashboard.incidents.templates.add.title').' - '.trans('dashboard.dashboard'));
    }

    /**
     * Shows the edit incident template view.
     *
     * @param \CachetHQ\Cachet\Models\IncidentTemplate $template
     *
     * @return \Illuminate\View\View
     */
    public function showEditTemplateAction(IncidentTemplate $template)
    {
        return View::make('dashboard.incidents.templates.edit')
            ->withPageTitle(trans('dashboard.incidents.templates.edit.title').' - '.trans('dashboard.dashboard'))
            ->withTemplate($template);
    }

    /**
     * Deletes an incident template.
     *
     * @param \CachetHQ\Cachet\Models\IncidentTemplate $template
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteTemplateAction(IncidentTemplate $template)
    {
        $template->delete();

        return Redirect::back();
    }

    /**
     * Creates a new incident template.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createIncidentTemplateAction()
    {
        try {
            IncidentTemplate::create(Binput::get('template'));
        } catch (ValidationException $e) {
            return Redirect::back()
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.incidents.templates.add.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::back()
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.incidents.templates.add.success')));
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
        return View::make('dashboard.incidents.edit')
            ->withPageTitle(trans('dashboard.incidents.edit.title').' - '.trans('dashboard.dashboard'))
            ->withIncident($incident)
            ->withComponentsInGroups(ComponentGroup::with('components')->get())
            ->withComponentsOutGroups(Component::where('group_id', 0)->get());
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
        $incidentData = Binput::get('incident');

        if (array_has($incidentData, 'created_at') && $incidentData['created_at']) {
            $incidentDate = Date::createFromFormat('d/m/Y H:i', $incidentData['created_at'], Setting::get('app_timezone'))->setTimezone(Config::get('app.timezone'));
            $incidentData['created_at'] = $incidentDate;
            $incidentData['updated_at'] = $incidentDate;
        } else {
            unset($incidentData['created_at']);
        }

        try {
            $incident->update($incidentData);
        } catch (ValidationException $e) {
            return Redirect::back()
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.incidents.templates.edit.failure')))
                ->withErrors($e->getMessageBag());
        }

        $componentStatus = array_pull($incidentData, 'component_status');

        if ($incident->component) {
            $incident->component->update(['status' => $componentStatus]);
        }

        return Redirect::to('dashboard/incidents')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.incidents.edit.success')));
    }

    /**
     * Edit an incident template.
     *
     * @param \CachetHQ\Cachet\Models\IncidentTemplate $template
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editTemplateAction(IncidentTemplate $template)
    {
        try {
            $template->update(Binput::get('template'));
        } catch (ValidationException $e) {
            return Redirect::back()
                ->withUpdatedTemplate($template)
                ->withTemplateErrors($e->getMessageBag()->getErrors());
        }

        return Redirect::back()
            ->withUpdatedTemplate($template);
    }
}
