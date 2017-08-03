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

use CachetHQ\Cachet\Bus\Commands\User\SignupUserCommand;
use CachetHQ\Cachet\Bus\Events\User\UserWasAddedEvent;
use CachetHQ\Cachet\Models\User;

class SignupUserCommandHandler
{
    /**
     * Handle the signup user command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\User\SignupUserCommand $command
     *
     * @return \CachetHQ\Cachet\Models\User
     */
    public function handle(SignupUserCommand $command)
    {
        $user = User::create([
            'username' => $command->username,
            'password' => $command->password,
            'email'    => $command->email,
            'level'    => User::LEVEL_USER,
        ]);

        event(new UserWasAddedEvent($user));

        return $user;
    }
}
