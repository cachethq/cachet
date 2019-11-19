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

use App\Bus\Commands\User\InviteUserCommand;
use App\Bus\Events\User\UserWasInvitedEvent;
use App\Models\Invite;
use App\Notifications\User\InviteUserNotification;

/**
 * This is the invite user command handler.
 *
 * @author James Brooks <james@alt-three.com>
 */
class InviteUserCommandHandler
{
    /**
     * Handle the invite team member command.
     *
     * @param \App\Bus\Commands\User\InviteUserCommand $command
     *
     * @return void
     */
    public function handle(InviteUserCommand $command)
    {
        foreach ($command->emails as $email) {
            $invite = Invite::create([
                'email' => $email,
            ]);

            $invite->notify(new InviteUserNotification());

            event(new UserWasInvitedEvent($invite));
        }
    }
}
