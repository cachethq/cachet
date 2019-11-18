<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Bus\Handlers\Commands\User;

use App\Bus\Commands\User\RemoveUserCommand;
use App\Bus\Events\User\UserWasRemovedEvent;
use App\Models\User;

class RemoveUserCommandHandler
{
    /**
     * Handle the remove user command.
     *
     * @param \App\Bus\Commands\User\RemoveUserCommand $command
     *
     * @return void
     */
    public function handle(RemoveUserCommand $command)
    {
        $user = $command->user;

        event(new UserWasRemovedEvent($user));

        $user->delete();
    }
}
