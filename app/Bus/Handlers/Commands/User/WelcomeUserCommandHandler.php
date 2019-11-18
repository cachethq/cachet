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

use App\Bus\Commands\User\WelcomeUserCommand;
use App\Bus\Events\User\UserWasWelcomedEvent;

/**
 * This is the welcome user command handler.
 *
 * @author James Brooks <james@alt-three.com>
 */
class WelcomeUserCommandHandler
{
    /**
     * Handle the welcome user command.
     *
     * @param \App\Bus\Commands\User\WelcomeUserCommand $command
     *
     * @return void
     */
    public function handle(WelcomeUserCommand $command)
    {
        $command->user->update(['welcomed' => true]);

        event(new UserWasWelcomedEvent($command->user));
    }
}
