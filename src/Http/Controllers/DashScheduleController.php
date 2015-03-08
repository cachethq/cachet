<?php

namespace CachetHQ\Cachet\Http\Controllers;

use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\IncidentTemplate;
use Carbon\Carbon;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\MessageBag;

class DashScheduleController extends Controller
{
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
                'url'    => route('dashboard.incidents'),
                'icon'   => 'ion-android-checkmark-circle',
                'active' => false,
            ],
            'schedule'  => [
                'title'  => trans('dashboard.schedule.schedule'),
                'url'    => route('dashboard.schedule'),
                'icon'   => 'ion-android-calendar',
                'active' => true,
            ],
        ];

        View::share('subMenu', $this->subMenu);
        View::share('subTitle', trans('dashboard.incidents.title'));
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

        return View::make('dashboard.schedule.add')->with([
            'incidentTemplates' => $incidentTemplates,
        ]);
    }

    /**
     * Creates a new scheduled maintenance "incident".
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addScheduleAction()
    {
        $scheduleData = Binput::get('incident');
        $scheduleData['user_id'] = Auth::user()->id;
        // Parse the schedule date.
        $scheduledAt = Carbon::createFromFormat('d/m/Y H:i', $scheduleData['scheduled_at']);

        if ($scheduledAt->isPast()) {
            $messageBag = new MessageBag();
            $messageBag->add('scheduled_at', trans('validation.date', [
                'attribute' => 'scheduled time you supplied',
            ]));

            return Redirect::back()->withErrors($messageBag);
        }

        $scheduleData['scheduled_at'] = $scheduledAt;
        // Bypass the incident.status field.
        $scheduleData['status'] = 0;

        $incident = Incident::create($scheduleData);

        if (! $incident->isValid()) {
            segment_track('Dashboard', [
                'event'   => 'Created Scheduled Maintenance',
                'success' => false,
            ]);

            return Redirect::back()->withInput(Binput::all())
                ->with('success', sprintf(
                    '<strong>%s</strong> %s',
                    trans('dashboard.notifications.whoops'),
                    trans('dashboard.schedule.add.failure')
                ))
                ->with('errors', $incident->getErrors());
        }

        segment_track('Dashboard', [
            'event'   => 'Created Scheduled Maintenance',
            'success' => true,
        ]);

        $successMsg = sprintf(
            '<strong>%s</strong> %s',
            trans('dashboard.notifications.awesome'),
            trans('dashboard.schedule.add.success')
        );

        return Redirect::back()->with('success', $successMsg);
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

        return View::make('dashboard.schedule.edit')->with([
            'incidentTemplates' => $incidentTemplates,
            'schedule'          => $schedule,
        ]);
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
        $scheduleData['user_id'] = Auth::user()->id;
        // Parse the schedule date.
        $scheduledAt = Carbon::createFromFormat('d/m/Y H:i', $scheduleData['scheduled_at']);

        if ($scheduledAt->isPast()) {
            $messageBag = new MessageBag();
            $messageBag->add('scheduled_at', trans('validation.date', [
                'attribute' => 'scheduled time you supplied',
            ]));

            return Redirect::back()->withErrors($messageBag);
        }

        $scheduleData['scheduled_at'] = $scheduledAt;
        // Bypass the incident.status field.
        $scheduleData['status'] = 0;

        $schedule->update($scheduleData);

        if (! $schedule->isValid()) {
            segment_track('Dashboard', [
                'event'   => 'Edited Schedule',
                'success' => false,
            ]);

            return Redirect::back()->withInput(Binput::all())
                ->with('title', sprintf(
                    '<strong>%s</strong> %s',
                    trans('dashboard.notifications.awesome'),
                    trans('dashboard.schedule.edit.failure')
                ))
                ->with('errors', $schedule->getErrors());
        }

        segment_track('Dashboard', [
            'event'   => 'Edited Schedule',
            'success' => true,
        ]);

        $successMsg = sprintf(
            '<strong>%s</strong> %s',
            trans('dashboard.notifications.awesome'),
            trans('dashboard.schedule.edit.success')
        );

        return Redirect::to('dashboard/schedule')->with('success', $successMsg);
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
        segment_track('Dashboard', [
            'event' => 'Deleted Schedule',
        ]);

        $schedule->delete();

        return Redirect::back()->with('warning', sprintf(
            '<strong>%s</strong> %s',
            trans('dashboard.notifications.whoops'),
            trans('dashboard.schedule.delete.failure')
        ));
    }
}
