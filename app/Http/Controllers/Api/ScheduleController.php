<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Api;

use CachetHQ\Cachet\Bus\Commands\Schedule\CreateScheduleCommand;
use CachetHQ\Cachet\Bus\Commands\Schedule\DeleteScheduleCommand;
use CachetHQ\Cachet\Bus\Commands\Schedule\UpdateScheduleCommand;
use CachetHQ\Cachet\Models\Schedule;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 * This is the schedule controller.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ScheduleController extends AbstractApiController
{
    /**
     * Return all schedules.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSchedules()
    {
        $schedule = Schedule::whereRaw('1 = 1');

        if ($sortBy = Binput::get('sort')) {
            $direction = Binput::has('order') && Binput::get('order') == 'desc';

            $schedule->sort($sortBy, $direction);
        }

        $schedule = $schedule->paginate(Binput::get('per_page', 20));

        return $this->paginator($schedule, Request::instance());
    }

    /**
     * Return a single schedule.
     *
     * @param \CachetHQ\Cachet\Models\Schedule $schedule
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSchedule(Schedule $schedule)
    {
        return $this->item($schedule);
    }

    /**
     * Create a new schedule.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postSchedule()
    {
        try {
            $schedule = dispatch(new CreateScheduleCommand(
                Binput::get('name'),
                Binput::get('message', null, false, false),
                Binput::get('status'),
                Binput::get('scheduled_at'),
                Binput::get('completed_at'),
                Binput::get('components', [])
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($schedule);
    }

    /**
     * Update a schedule.
     *
     * @param \CachetHQ\Cachet\Models\Schedule $schedule
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function putSchedule(Schedule $schedule)
    {
        try {
            $schedule = dispatch(new UpdateScheduleCommand(
                $schedule,
                Binput::get('name'),
                Binput::get('message'),
                Binput::get('status'),
                Binput::get('scheduled_at'),
                Binput::get('completed_at'),
                Binput::get('components', [])
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($schedule);
    }

    /**
     * Delete a schedule.
     *
     * @param \CachetHQ\Cachet\Models\Schedule $schedule
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteSchedule(Schedule $schedule)
    {
        try {
            dispatch(new DeleteScheduleCommand($schedule));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->noContent();
    }
}
