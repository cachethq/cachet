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

use CachetHQ\Cachet\Bus\Commands\Schedule\DeleteScheduleCommand;
use CachetHQ\Cachet\Bus\Events\Schedule\ScheduleWasRemovedEvent;
use Illuminate\Contracts\Auth\Guard;

/**
 * This is the delete schedule command handler.
 *
 * @author James Brooks <james@alt-three.com>
 */
class DeleteScheduleCommandHandler
{
    /**
     * The authentication guard instance.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * Create a new delete schedule command handler instance.
     *
     * @param \Illuminate\Contracts\Auth\Guard $auth
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle the delete schedule command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Schedule\DeleteScheduleCommand $command
     *
     * @return void
     */
    public function handle(DeleteScheduleCommand $command)
    {
        $schedule = $command->schedule;

        event(new ScheduleWasRemovedEvent($this->auth->user(), $schedule));

        $schedule->delete();
    }
}
