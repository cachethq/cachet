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

use CachetHQ\Cachet\Bus\Commands\TimedAction\UpdateTimedActionInstanceCommand;

/**
 * This is the update timed action instance command handler.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class UpdateTimedActionInstanceCommandHandler
{
    /**
     * Handle the update timed action instance command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\TimedAction\UpdateTimedActionInstanceCommand $command
     *
     * @return \CachetHQ\Cachet\Models\TimedActionInstance
     */
    public function handle(UpdateTimedActionInstanceCommand $command)
    {
        $instance = $command->instance;

        $instance->update($this->filter($command));

        return $instance;
    }

    /**
     * Filter the command data.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\TimedAction\UpdateTimedActionInstanceCommand $command
     *
     * @return array
     */
    protected function filter(UpdateTimedActionInstanceCommand $command)
    {
        $params = [
            'message'      => $command->message,
            'completed_at' => $command->completed_at,
        ];

        return array_filter($params, function ($val) {
            return $val !== null;
        });
    }
}
