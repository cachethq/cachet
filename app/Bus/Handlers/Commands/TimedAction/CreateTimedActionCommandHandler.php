<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Commands\TimedAction;

use CachetHQ\Cachet\Bus\Commands\TimedAction\CreateTimedActionCommand;
use CachetHQ\Cachet\Bus\Events\TimedAction\TimedActionWasAddedEvent;
use CachetHQ\Cachet\Dates\DateFactory;
use CachetHQ\Cachet\Models\TimedAction;

/**
 * This is the create timed action command handler.
 *
 * @author James Brooks <james@alt-three.com>
 */
class CreateTimedActionCommandHandler
{
    /**
     * The date factory instance.
     *
     * @var \CachetHQ\Cachet\Dates\DateFactory
     */
    protected $dates;

    /**
     * Create a new create timed action command handler instance.
     *
     * @param \CachetHQ\Cachet\Dates\DateFactory $dates
     *
     * @return void
     */
    public function __construct(DateFactory $dates)
    {
        $this->dates = $dates;
    }

    /**
     * Handle the create timed action command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\TimedAction\CreateTimedActionCommand $command
     *
     * @return \CachetHQ\Cachet\Models\TimedAction
     */
    public function handle(CreateTimedActionCommand $command)
    {
        $format = substr_count($command->start_at, ':') === 2 ? 'Y-m-d H:i:s' : 'd/m/Y H:i';

        $timedAction = TimedAction::create([
            'name'                  => $command->name,
            'description'           => $command->description,
            'active'                => $command->active,
            'start_at'              => $this->dates->create($format, $command->start_at),
            'timezone'              => $command->timezone,
            'window_length'         => $command->window_length,
            'completion_latency'    => $command->completion_latency,
            'timed_action_group_id' => $command->timed_action_group_id,
        ]);

        event(new TimedActionWasAddedEvent($timedAction));

        return $timedAction;
    }
}
