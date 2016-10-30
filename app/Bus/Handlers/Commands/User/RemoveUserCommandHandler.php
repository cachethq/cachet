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

use CachetHQ\Cachet\Bus\Commands\User\RemoveUserCommand;
use CachetHQ\Cachet\Bus\Events\User\UserWasRemovedEvent;
use CachetHQ\Cachet\Models\User;

class RemoveUserCommandHandler
{
    /**
     * Handle the remove user command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\User\RemoveUserCommand $command
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
