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

use CachetHQ\Cachet\Actions\InstanceAlreadyExistsException;
use CachetHQ\Cachet\Actions\WindowFactory;
use CachetHQ\Cachet\Bus\Commands\TimedAction\CreateTimedActionInstanceCommand;
use CachetHQ\Cachet\Models\TimedActionInstance;
use Carbon\Carbon;

/**
 * This is the create timed action instance command handler.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class CreateTimedActionInstanceCommandHandler
{
    /**
     * The window factory instance.
     *
     * @var \CachetHQ\Cachet\Actions\WindowFactory
     */
    protected $windows;

    /**
     * Create a new check timed action command handler instance.
     *
     * @param \CachetHQ\Cachet\Actions\WindowFactory $windows
     *
     * @return void
     */
    public function __construct(WindowFactory $windows)
    {
        $this->windows = $windows;
    }

    /**
     * Handle the create timed action instance command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\TimedAction\CreateTimedActionInstanceCommand $command
     *
     * @return \CachetHQ\Cachet\Models\TimedActionInstance
     */
    public function handle(CreateTimedActionInstanceCommand $command)
    {
        $action = $command->action;
        $window = $this->windows->current($action);

        if ($command->failed) {
            $status = TimedActionInstance::FAILED;
        } elseif ($window->start()->addSeconds($action->completion_latency)->diffInSeconds(Carbon::now(), false) < 0) {
            $status = TimedActionInstance::SUCCESSFUL;
        } else {
            $status = TimedActionInstance::LATE;
        }

        if ($action->instances()->window($window)->count() > 0) {
            throw new InstanceAlreadyExistsException('An action instance for the current window already exists.');
        }

        $instance = TimedActionInstance::create([
            'timed_action_id' => $action->id,
            'message'         => $command->message,
            'status'          => $status,
            'started_at'      => $command->started_at,
            'completed_at'    => $command->completed_at,
        ]);

        return $instance;
    }
}
