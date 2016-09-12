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
use DateTimeInterface;

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

        return $this->accountForSummerTime($next);
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

        return $this->accountForSummerTime($start);
    }

    /**
     * Account for summer time.
     *
     * @param \DateTimeInterface $date
     * @param string             $timezone
     *
     * @return \DateTimeInterface
     */
    protected function accountForSummerTime(DateTimeInterface $date, $timezone)
    {
        $temp = $date->copy()->setTimezone($timezone);

        return $temp->getOffset() > $temp->copy()->subMonths(6)->getOffset()) ? $date->addHour() : $date;
    }
}
