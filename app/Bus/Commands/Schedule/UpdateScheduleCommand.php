<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Commands\Schedule;

use CachetHQ\Cachet\Models\Schedule;

/**
 * This is the update schedule command.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class UpdateScheduleCommand
{
    /**
     * The schedule to update.
     *
     * @param \CachetHQ\Cachet\Models\Schedule
     */
    public $schedule;

    /**
     * The schedule name.
     *
     * @var string
     */
    public $name;

    /**
     * The schedule message.
     *
     * @var string
     */
    public $message;

    /**
     * The schedule status.
     *
     * @var int
     */
    public $status;

    /**
     * The schedule date.
     *
     * @var string
     */
    public $scheduledAt;

    /**
     * The components affected by the schedule.
     *
     * @var array
     */
    public $components;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'schedule'    => 'required',
        'name'        => 'string',
        'message'     => 'string',
        'status'      => 'int|min:0|max:2',
        'scheduledAt' => 'string',
        'components'  => 'array',
    ];

    /**
     * Create a new update schedule command instance.
     *
     * @param \CachetHQ\Cachet\Models\Schedule $schedule
     * @param string                           $name
     * @param string                           $message
     * @param int                              $status
     * @param string                           $scheduledAt
     * @param array                            $components
     *
     * @return void
     */
    public function __construct(Schedule $schedule, $name, $message, $status, $components)
    {
        $this->schedule = $schedule;
        $this->name = $name;
        $this->message = $message;
        $this->status = $status;
        $this->scheduledAt = $scheduledAt;
        $this->components = $components;
    }
}
