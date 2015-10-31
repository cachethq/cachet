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

use CachetHQ\Cachet\Commands\User\InviteTeamMemberCommand;
use CachetHQ\Cachet\Events\User\UserWasAddedEvent;
use CachetHQ\Cachet\Models\Invite;

class InviteTeamMemberCommandHandler
{
    /**
     * Handle the invite team member command.
     *
     * @param \CachetHQ\Cachet\Commands\User\InviteTeamMemberCommand $command
     *
     * @return void
     */
    public function handle(InviteTeamMemberCommand $command)
    {
        foreach ($command->emails as $email) {
            $invite = Invite::create([
                'email' => $command->email,
            ]);

            event(new UserWasInvitedEvent($invite));
        }
    }
}
