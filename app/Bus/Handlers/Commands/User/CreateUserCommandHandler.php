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

use App\Bus\Commands\User\CreateUserCommand;
use App\Bus\Events\User\UserWasCreatedEvent;
use App\Models\User;

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
     * @param \App\Bus\Commands\User\CreateUserCommand $command
     *
     * @return \App\Models\User
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
