<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Commands\Schedule;

use CachetHQ\Cachet\Bus\Commands\Schedule\UpdateScheduleCommand;
use CachetHQ\Cachet\Bus\Events\Schedule\ScheduleWasUpdatedEvent;
use CachetHQ\Cachet\Models\Schedule;
use CachetHQ\Cachet\Services\Dates\DateFactory;
use Illuminate\Contracts\Auth\Guard;

/**
 * This is the update schedule command handler.
 *
 * @author James Brooks <james@alt-three.com>
 */
class UpdateScheduleCommandHandler
{
    /**
     * The authentication guard instance.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * The date factory instance.
     *
     * @var \CachetHQ\Cachet\Services\Dates\DateFactory
     */
    protected $dates;

    /**
     * Create a new update schedule command handler instance.
     *
     * @param \Illuminate\Contracts\Auth\Guard            $auth
     * @param \CachetHQ\Cachet\Services\Dates\DateFactory $dates
     *
     * @return void
     */
    public function __construct(Guard $auth, DateFactory $dates)
    {
        $this->auth = $auth;
        $this->dates = $dates;
    }

    /**
     * Handle the update schedule command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Schedule\UpdateScheduleCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Schedule
     */
    public function handle(UpdateScheduleCommand $command)
    {
        $schedule = $command->schedule;

        $schedule->update($this->filter($command));

        event(new ScheduleWasUpdatedEvent($this->auth->user(), $schedule));

        return $schedule;
    }

    /**
     * Filter the command data.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Schedule\UpdateScheduleCommand $command
     *
     * @return array
     */
    protected function filter(UpdateScheduleCommand $command)
    {
        $params = [
            'name'    => $command->name,
            'message' => $command->message,
            'status'  => $command->status,
        ];

        if ($scheduledAt = $command->scheduled_at) {
            $params['scheduled_at'] = $this->dates->create('Y-m-d H:i', $scheduledAt);
        }

        if ($completedAt = $command->completed_at) {
            $params['completed_at'] = $this->dates->create('Y-m-d H:i', $completedAt);
        }

        $availableParams = array_filter($params, function ($val) {
            return $val !== null;
        });

        return $availableParams;
    }
}
