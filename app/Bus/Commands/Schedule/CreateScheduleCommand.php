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

/**
 * This is the create schedule command.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class CreateScheduleCommand
{
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
    public $scheduled_at;

    /**
     * The completed at date.
     *
     * @var string
     */
    public $completed_at;

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
        'name'         => 'required|string',
        'message'      => 'nullable|string',
        'status'       => 'required|int|min:0|max:2',
        'scheduled_at' => 'required|string',
        'completed_at' => 'nullable|string',
        'components'   => 'required|array',
    ];

    /**
     * Create a new create schedule command instance.
     *
     * @param string $name
     * @param string $message
     * @param int    $status
     * @param string $scheduled_at
     * @param string $completed_at
     * @param array  $components
     *
     * @return void
     */
    public function __construct($name, $message, $status, $scheduled_at, $completed_at, array $components)
    {
        $this->name = $name;
        $this->message = $message;
        $this->status = $status;
        $this->scheduled_at = $scheduled_at;
        $this->completed_at = $completed_at;
        $this->components = $components;
    }
}
