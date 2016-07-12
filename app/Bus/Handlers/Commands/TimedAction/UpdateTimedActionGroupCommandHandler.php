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

use CachetHQ\Cachet\Bus\Commands\TimedAction\UpdateTimedActionGroupCommand;

/**
 * This is the update timed group command handler class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class UpdateTimedActionGroupCommandHandler
{
    /**
     * Handle the update timed group command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\TimedAction\UpdateTimedActionGroupCommand $command
     *
     * @return \CachetHQ\Cachet\Models\TimedAction
     */
    public function handle(UpdateTimedActionGroupCommand $command)
    {
        $group = $command->group;

        $group->update($this->filter($command));

        return $group;
    }

    /**
     * Filter the command data.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\TimedAction\UpdateTimedActionGroupCommand $command
     *
     * @return array
     */
    protected function filter(UpdateTimedActionGroupCommand $command)
    {
        $params = [
            'name'  => $command->name,
            'order' => $command->order,
        ];

        return array_filter($params, function ($val) {
            return $val !== null;
        });
    }
}
