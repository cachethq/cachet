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

use CachetHQ\Cachet\Bus\Commands\User\InviteTeamMemberCommand;
use CachetHQ\Cachet\Bus\Events\User\UserWasInvitedEvent;
use CachetHQ\Cachet\Models\Invite;

class InviteTeamMemberCommandHandler
{
    /**
     * Handle the invite team member command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\User\InviteTeamMemberCommand $command
     *
     * @return void
     */
    public function handle(InviteTeamMemberCommand $command)
    {
        foreach ($command->emails as $email) {
            $invite = Invite::create([
                'email' => $email,
            ]);

            event(new UserWasInvitedEvent($invite));
        }
    }
}
