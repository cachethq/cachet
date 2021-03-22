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

use CachetHQ\Cachet\Bus\Commands\User\CreateUserCommand;
use CachetHQ\Cachet\Bus\Events\User\UserWasCreatedEvent;
use CachetHQ\Cachet\Models\User;

/**
 * This is the create user command handler.
 *
 * @author James Brooks <james@alt-three.com>
 */
class CreateUserCommandHandler
{
    /**
     * Handle the add user command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\User\CreateUserCommand $command
     *
     * @return \CachetHQ\Cachet\Models\User
     */
    public function handle(CreateUserCommand $command)
    {
        $user = User::create([
            'username' => $command->username,
            'password' => $command->password,
            'email'    => $command->email,
            'level'    => $command->level,
        ]);

        event(new UserWasCreatedEvent($user));

        return $user;
    }
}
