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
use CachetHQ\Cachet\Commands\Incident\ReportMaintenanceCommand;
use CachetHQ\Cachet\Facades\Setting;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\IncidentTemplate;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\MessageBag;
use Jenssegers\Date\Date;

class ScheduleController extends Controller
{
    use DispatchesJobs;

    /**
     * Stores the sub-sidebar tree list.
     *
     * @var array
     */
    protected $subMenu = [];

    /**
     * Creates a new DashScheduleController instance.
     *
     * @return \CachetHQ\Cachet\Http\Controllers\DashScheduleController
     */
    public function __construct()
    {
        // TODO: Remove this from DashIncidentController, so it's shared?
        $this->subMenu = [
            'incidents' => [
                'title'  => trans('dashboard.incidents.incidents'),
                'url'    => route('dashboard.incidents.index'),
                'icon'   => 'ion-android-checkmark-circle',
                'active' => false,
            ],
            'schedule' => [
                'title'  => trans('dashboard.schedule.schedule'),
                'url'    => route('dashboard.schedule.index'),
                'icon'   => 'ion-android-calendar',
                'active' => true,
            ],
        ];

        View::share('sub_menu', $this->subMenu);
        View::share('sub_title', trans('dashboard.incidents.title'));
    }

    /**
     * Lists all scheduled maintenance.
     *
     * @return \Illuminate\View\View
     */
    public function showIndex()
    {
        $schedule = Incident::scheduled()->orderBy('created_at')->get();

        return View::make('dashboard.schedule.index')->withSchedule($schedule);
    }

    /**
     * Shows the add schedule maintenance form.
     *
     * @return \Illuminate\View\View
     */
    public function showAddSchedule()
    {
        $incidentTemplates = IncidentTemplate::all();

        return View::make('dashboard.schedule.add')
            ->withIncidentTemplates($incidentTemplates);
    }

    /**
     * Creates a new scheduled maintenance "incident".
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addScheduleAction()
    {
        try {
            $incident = $this->dispatch(new ReportMaintenanceCommand(
                Binput::get('incident.name'),
                Binput::get('incident.message'),
                Binput::get('incident.notify'),
                Binput::get('incident.scheduled_at')
            ));
        } catch (ValidationException $e) {
            return Redirect::route('dashboard.schedule.add')
                ->withInput(Binput::all())
                ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.schedule.add.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('dashboard.schedule.add')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.schedule.add.success')));
    }

    /**
     * Shows the edit schedule maintenance form.
     *
     * @param \CachetHQ\Cachet\Models\Incident $schedule
     *
     * @return \Illuminate\View\View
     */
    public function showEditSchedule(Incident $schedule)
    {
        $incidentTemplates = IncidentTemplate::all();

        return View::make('dashboard.schedule.edit')
            ->withIncidentTemplates($incidentTemplates)
            ->withSchedule($schedule);
    }

    /**
     * Updates the given incident.
     *
     * @param \CachetHQ\Cachet\Models\Incident $schedule
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editScheduleAction(Incident $schedule)
    {
        $scheduleData = Binput::get('incident');
        // Parse the schedule date.
        $scheduledAt = Date::createFromFormat('d/m/Y H:i', $scheduleData['scheduled_at'], config('cachet.timezone'))
            ->setTimezone(Config::get('app.timezone'));

        if ($scheduledAt->isPast()) {
            $messageBag = new MessageBag();
            $messageBag->add('scheduled_at', trans('validation.date', ['attribute' => 'scheduled time you supplied']));

            return Redirect::route('dashboard.schedule.edit', ['id' => $schedule->id])->withErrors($messageBag);
        }

        $scheduleData['scheduled_at'] = $scheduledAt;
        // Bypass the incident.status field.
        $scheduleData['status'] = 0;

        try {
            $schedule->update($scheduleData);
        } catch (ValidationException $e) {
            return Redirect::route('dashboard.schedule.edit', ['id' => $schedule->id])
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.schedule.edit.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('dashboard.schedule.edit', ['id' => $schedule->id])
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.schedule.edit.success')));
    }

    /**
     * Deletes a given schedule.
     *
     * @param \CachetHQ\Cachet\Models\Incident $schedule
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteScheduleAction(Incident $schedule)
    {
        $schedule->delete();

        return Redirect::route('dashboard.schedule.index')
            ->withWarning(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.schedule.delete.failure')));
    }
}
