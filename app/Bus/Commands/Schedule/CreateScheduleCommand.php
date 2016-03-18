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
        'name'        => 'required|string',
        'message'     => 'string',
        'status'      => 'required|int|min:0|max:2',
        'scheduledAt' => 'string',
        'components'  => 'array',
    ];

    /**
     * Create a new create schedule command instance.
     *
     * @param string $name
     * @param string $message
     * @param int    $status
     * @param string $scheduledAt
     * @param array  $components
     *
     * @return void
     */
    public function __construct($name, $message, $status, $scheduledAt, array $components)
    {
        $this->name = $name;
        $this->message = $message;
        $this->status = $status;
        $this->scheduledAt = $scheduledAt;
        $this->components = $components;
    }
}
