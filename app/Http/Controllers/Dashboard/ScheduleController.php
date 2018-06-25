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
use CachetHQ\Cachet\Bus\Commands\Schedule\CreateScheduleCommand;
use CachetHQ\Cachet\Bus\Commands\Schedule\DeleteScheduleCommand;
use CachetHQ\Cachet\Bus\Commands\Schedule\UpdateScheduleCommand;
use CachetHQ\Cachet\Models\IncidentTemplate;
use CachetHQ\Cachet\Models\Schedule;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

/**
 * This is the schedule controller class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ScheduleController extends Controller
{
    /**
     * Stores the sub-sidebar tree list.
     *
     * @var array
     */
    protected $subMenu = [];

    /**
     * Creates a new schedule controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        View::share('subTitle', trans('dashboard.schedule.title'));
    }

    /**
     * Lists all scheduled maintenance.
     *
     * @return \Illuminate\View\View
     */
    public function showIndex()
    {
        $schedule = Schedule::orderBy('created_at')->get();

        return View::make('dashboard.maintenance.index')
            ->withPageTitle(trans('dashboard.schedule.schedule').' - '.trans('dashboard.dashboard'))
            ->withSchedule($schedule);
    }

    /**
     * Shows the add schedule maintenance form.
     *
     * @return \Illuminate\View\View
     */
    public function showAddSchedule()
    {
        $incidentTemplates = IncidentTemplate::all();

        return View::make('dashboard.maintenance.add')
            ->withPageTitle(trans('dashboard.schedule.add.title').' - '.trans('dashboard.dashboard'))
            ->withIncidentTemplates($incidentTemplates);
    }

    /**
     * Creates a new scheduled maintenance.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addScheduleAction()
    {
        try {
            execute(new CreateScheduleCommand(
                Binput::get('name'),
                Binput::get('message', null, false, false),
                Binput::get('status', Schedule::UPCOMING),
                Binput::get('scheduled_at'),
                Binput::get('completed_at'),
                Binput::get('components', [])
            ));
        } catch (ValidationException $e) {
            return cachet_redirect('dashboard.schedule.create')
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.schedule.edit.failure')))
                ->withErrors($e->getMessageBag());
        }

        return cachet_redirect('dashboard.schedule')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.schedule.add.success')));
    }

    /**
     * Shows the edit schedule maintenance form.
     *
     * @param \CachetHQ\Cachet\Models\Schedule $schedule
     *
     * @return \Illuminate\View\View
     */
    public function showEditSchedule(Schedule $schedule)
    {
        $incidentTemplates = IncidentTemplate::all();

        return View::make('dashboard.maintenance.edit')
            ->withPageTitle(trans('dashboard.schedule.edit.title').' - '.trans('dashboard.dashboard'))
            ->withIncidentTemplates($incidentTemplates)
            ->withSchedule($schedule);
    }

    /**
     * Updates the given incident.
     *
     * @param \CachetHQ\Cachet\Models\Schedule $schedule
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editScheduleAction(Schedule $schedule)
    {
        try {
            $schedule = execute(new UpdateScheduleCommand(
                $schedule,
                Binput::get('name', null),
                Binput::get('message', null),
                Binput::get('status', null),
                Binput::get('scheduled_at', null),
                Binput::get('completed_at', null),
                Binput::get('components', [])
            ));
        } catch (ValidationException $e) {
            return cachet_redirect('dashboard.schedule.edit', [$schedule->id])
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.schedule.edit.failure')))
                ->withErrors($e->getMessageBag());
        }

        return cachet_redirect('dashboard.schedule.edit', [$schedule->id])
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.schedule.edit.success')));
    }

    /**
     * Deletes a given schedule.
     *
     * @param \CachetHQ\Cachet\Models\Schedule $schedule
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteScheduleAction(Schedule $schedule)
    {
        execute(new DeleteScheduleCommand($schedule));

        return cachet_redirect('dashboard.schedule')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.schedule.delete.success')));
    }
}
