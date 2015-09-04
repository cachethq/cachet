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

use CachetHQ\Cachet\Commands\User\RemoveUserCommand;
use CachetHQ\Cachet\Events\User\UserWasRemovedEvent;
use CachetHQ\Cachet\Models\User;

class RemoveUserCommandHandler
{
    /**
     * Handle the remove user command.
     *
     * @param \CachetHQ\Cachet\Commands\User\RemoveUserCommand $command
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
