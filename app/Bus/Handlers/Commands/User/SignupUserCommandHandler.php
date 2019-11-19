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

use App\Bus\Commands\User\SignupUserCommand;
use App\Bus\Events\User\UserWasCreatedEvent;
use App\Models\User;

class SignupUserCommandHandler
{
    /**
     * Handle the signup user command.
     *
     * @param \App\Bus\Commands\User\SignupUserCommand $command
     *
     * @return \App\Models\User
     */
    public function handle(SignupUserCommand $command)
    {
        $user = User::create([
            'username' => $command->username,
            'password' => $command->password,
            'email'    => $command->email,
            'level'    => User::LEVEL_USER,
        ]);

        event(new UserWasCreatedEvent($user));

        return $user;
    }
}
