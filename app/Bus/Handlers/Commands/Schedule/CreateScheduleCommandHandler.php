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

use CachetHQ\Cachet\Bus\Commands\Schedule\CreateScheduleCommand;
use CachetHQ\Cachet\Bus\Events\Schedule\ScheduleWasCreatedEvent;
use CachetHQ\Cachet\Models\Schedule;
use CachetHQ\Cachet\Services\Dates\DateFactory;
use Illuminate\Contracts\Auth\Guard;

/**
 * This is the create schedule command handler.
 *
 * @author James Brooks <james@alt-three.com>
 */
class CreateScheduleCommandHandler
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
     * Handle the create schedule command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Schedule\CreateScheduleCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Schedule
     */
    public function handle(CreateScheduleCommand $command)
    {
        $schedule = Schedule::create($this->filter($command));

        event(new ScheduleWasCreatedEvent($this->auth->user(), $schedule));

        return $schedule;
    }

    /**
     * Filter the command data.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Schedule\CreateScheduleCommand $command
     *
     * @return array
     */
    protected function filter(CreateScheduleCommand $command)
    {
        $scheduledAt = $this->dates->create('Y-m-d H:i', $command->scheduled_at);

        if ($completedAt = $command->completed_at) {
            $completedAt = $this->dates->create('Y-m-d H:i', $command->completed_at);
        }

        $params = [
            'name'         => $command->name,
            'message'      => $command->message,
            'status'       => $command->status,
            'scheduled_at' => $scheduledAt,
            'completed_at' => $completedAt,
        ];

        $availableParams = array_filter($params, function ($val) {
            return $val !== null && $val !== '';
        });

        return $availableParams;
    }
}
