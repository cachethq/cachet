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

use CachetHQ\Cachet\Bus\Commands\TimedAction\UpdateTimedActionCommand;

/**
 * This is the update timed action command handler class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class UpdateTimedActionCommandHandler
{
    /**
     * Handle the update timed action command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\TimedAction\UpdateTimedActionCommand $command
     *
     * @return \CachetHQ\Cachet\Models\TimedAction
     */
    public function handle(UpdateTimedActionCommand $command)
    {
        $action = $command->action;

        $action->update($this->filter($command));

        return $action;
    }

    /**
     * Filter the command data.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\TimedAction\UpdateTimedActionCommand $command
     *
     * @return array
     */
    protected function filter(UpdateTimedActionCommand $command)
    {
        $params = [
            'name'                  => $command->name,
            'description'           => $command->description,
            'active'                => $command->active,
            'visible'               => $command->visible,
            'timed_action_group_id' => $command->timed_action_group_id,
        ];

        return array_filter($params, function ($val) {
            return $val !== null;
        });
    }
}
