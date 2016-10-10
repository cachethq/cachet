<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Actions;

use CachetHQ\Cachet\Models\TimedAction;
use Carbon\Carbon;
use DateTimeZone;

/**
 * This is the window factory class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class WindowFactory
{
    /**
     * Get the current window.
     *
     * @param \CachetHQ\Cachet\Models\TimedAction $action
     *
     * @throws \CachetHQ\Cachet\Actions\ActionNotStartedException
     *
     * @return \CachetHQ\Cachet\Actions\Window
     */
    public function next(TimedAction $action)
    {
        return new Window($this->nextWindowStart($action), $action->schedule_interval);
    }

    /**
     * Get the previous window.
     *
     * @param \CachetHQ\Cachet\Models\TimedAction $action
     *
     * @throws \CachetHQ\Cachet\Actions\ActionNotStartedException|\CachetHQ\Cachet\Actions\ActionNotMaturedException
     *
     * @return \CachetHQ\Cachet\Actions\Window
     */
    public function current(TimedAction $action)
    {
        return new Window($this->currentWindowStart($action), $action->schedule_interval);
    }

    /**
     * Get the start time of the previous window.
     *
     * @param \CachetHQ\Cachet\Models\TimedAction $action
     *
     * @throws \CachetHQ\Cachet\Actions\ActionNotStartedException|\CachetHQ\Cachet\Actions\ActionNotMaturedException
     *
     * @return \Carbon\Carbon
     */
    protected function nextWindowStart(TimedAction $action)
    {
        $now = Carbon::now();

        $diff = $now->diffInSeconds($action->start_at->copy()->addSeconds($action->schedule_interval), false);

        if ($diff > 0) {
            throw new ActionNotMaturedException("The timed action is only due to mature in {$diff} seconds");
        }

        $offset = -$diff % $action->schedule_interval;

        $next = $now->copy()->subSeconds($offset);

        return $this->accountForSummerTime($action, $next);
    }

    /**
     * Get the start time of the current window.
     *
     * @param \CachetHQ\Cachet\Models\TimedAction $action
     *
     * @throws \CachetHQ\Cachet\Actions\ActionNotStartedException
     *
     * @return \Carbon\Carbon
     */
    protected function currentWindowStart(TimedAction $action)
    {
        $start = $this->nextWindowStart($action)->subSeconds($action->schedule_interval);

        $diff = Carbon::now()->diffInSeconds($start, false);

        if ($diff > 0) {
            throw new ActionNotStartedException("The timed action is only due to start in {$diff} seconds");
        }

        return $this->accountForSummerTime($action, $start);
    }

    /**
     * Account for summer time.
     *
     * @param \CachetHQ\Cachet\Models\TimedAction $action
     * @param \Carbon\Carbon                      $date
     *
     * @return \Carbon\Carbon
     */
    protected function accountForSummerTime(TimedAction $action, Carbon $date)
    {
        $timezone = new DateTimeZone($action->timezone);
        $original = $action->start_at->copy()->setTimezone($action->timezone);
        $next = $date->copy()->setTimezone($action->timezone);

        return $date->copy()->addHours($this->getOffset($timezone, $original, $next));
    }

    /**
     * Get the offset in hours to apply to the given time.
     *
     * This takes into account that an action could have been created in
     * daylight saving time, and we need to subtract an hour, or the fact that
     * it might not have been and we need to add one. Of course, the case that
     * the offset is zero is possible too.
     *
     * @param \DateTimeZone  $timezone
     * @param \Carbon\Carbon $original
     * @param \Carbon\Carbon $next
     *
     * @return int
     */
    public function getOffset(DateTimeZone $timezone, Carbon $original, Carbon $next)
    {
        $seconds = $timezone->getOffset($next->copy()->addHours(2)) - $timezone->getOffset($original);

        return $seconds / 3600;
    }
}
