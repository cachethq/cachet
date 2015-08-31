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
use CachetHQ\Cachet\Commands\Incident\RemoveIncidentCommand;
use CachetHQ\Cachet\Commands\Incident\ReportIncidentCommand;
use CachetHQ\Cachet\Facades\Setting;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\IncidentTemplate;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Jenssegers\Date\Date;

class IncidentController extends Controller
{
    use DispatchesJobs;

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
                'url'    => route('dashboard.incidents.index'),
                'icon'   => 'ion-android-checkmark-circle',
                'active' => true,
            ],
            'schedule' => [
                'title'  => trans('dashboard.schedule.schedule'),
                'url'    => route('dashboard.schedule.index'),
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
        return View::make('dashboard.templates.index')
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
        if ($createdAt = Binput::get('created_at')) {
            $incidentDate = Date::createFromFormat('d/m/Y H:i', $createdAt, Setting::get('app_timezone'))->setTimezone(Config::get('app.timezone'));
        }

        try {
            $incident = $this->dispatch(new ReportIncidentCommand(
                Binput::get('name'),
                Binput::get('status'),
                Binput::get('message'),
                Binput::get('visible', true),
                Binput::get('component_id'),
                Binput::get('component_status'),
                Binput::get('notify', true)
            ));

            $incident->update([
                'created_at' => $incidentDate,
                'updated_at' => $incidentDate,
            ]);
        } catch (ValidationException $e) {
            return Redirect::route('dashboard.incidents.add')
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.incidents.add.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('dashboard.incidents.add')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.incidents.add.success')));
    }

    /**
     * Shows the add incident template view.
     *
     * @return \Illuminate\View\View
     */
    public function showAddIncidentTemplate()
    {
        return View::make('dashboard.templates.add')
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
        return View::make('dashboard.templates.edit')
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

        return Redirect::route('dashboard.incidents.index');
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
            return Redirect::route('dashboard.templates.add')
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.incidents.templates.add.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('dashboard.templates.add')
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
        $this->dispatch(new RemoveIncidentCommand($incident));

        return Redirect::route('dashboard.incidents.index');
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
            return Redirect::route('dashboard.incidents.edit', ['id' => $incident->id])
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.incidents.templates.edit.failure')))
                ->withErrors($e->getMessageBag());
        }

        $componentStatus = array_pull($incidentData, 'component_status');

        if ($incident->component) {
            $incident->component->update(['status' => $componentStatus]);
        }

        return Redirect::route('dashboard.incidents.edit', ['id' => $incident->id])
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
            return Redirect::route('dashboard.templates.edit', ['id' => $template->id])
                ->withUpdatedTemplate($template)
                ->withTemplateErrors($e->getMessageBag()->getErrors());
        }

        return Redirect::route('dashboard.templates.edit', ['id' => $template->id])
            ->withUpdatedTemplate($template);
    }
}
