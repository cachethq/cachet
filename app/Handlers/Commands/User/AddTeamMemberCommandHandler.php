<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Handlers\Commands\User;

use CachetHQ\Cachet\Commands\User\AddTeamMemberCommand;
use CachetHQ\Cachet\Events\User\UserWasAddedEvent;
use CachetHQ\Cachet\Models\User;

class AddTeamMemberCommandHandler
{
    /**
     * Handle the add team member command.
     *
     * @param \CachetHQ\Cachet\Commands\User\AddTeamMemberCommand $command
     *
     * @return \CachetHQ\Cachet\Models\User
     */
    public function handle(AddTeamMemberCommand $command)
    {
        $user = User::create([
            'username' => $command->username,
            'password' => $command->password,
            'email'    => $command->email,
            'level'    => $command->level,
        ]);

        event(new UserWasAddedEvent($user));

        return $user;
    }
}
