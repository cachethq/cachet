<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Commands\User;

use CachetHQ\Cachet\Bus\Commands\User\UpdateTeamMemberCommand;
use CachetHQ\Cachet\Bus\Events\User\UserWasUpdatedEvent;
use CachetHQ\Cachet\Models\User;

/**
 * This is the update team member command handler.
 *
 * @author James Brooks <james@alt-three.com>
 */
class UpdateTeamMemberCommandHandler
{
    /**
     * Handle the add team member command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\User\UpdateTeamMemberCommand $command
     *
     * @return \CachetHQ\Cachet\Models\User
     */
    public function handle(UpdateTeamMemberCommand $command)
    {
        $user = $command->user;

        $user->update($this->filter($command));

        event(new UserWasUpdatedEvent($user));

        return $user;
    }

    /**
     * Filter the command data.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\User\UpdateTeamMemberCommand $command
     *
     * @return array
     */
    protected function filter(UpdateTeamMemberCommand $command)
    {
        $params = [
            'username' => $command->username,
            'password' => $command->password,
            'email'    => $command->email,
            'level'    => $command->level,
        ];

        return array_filter($params, function ($val) {
            return $val !== null;
        });
    }
}
