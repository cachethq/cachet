<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Handlers\Commands\Invite;

use Carbon\Carbon;
use CachetHQ\Cachet\Commands\Invite\ClaimInviteCommand;
use CachetHQ\Cachet\Events\Invite\InviteWasClaimed;

class ClaimInviteCommandHandler
{
    /**
     * Handle the claim invite command.
     *
     * @param \CachetHQ\Cachet\Commands\User\ClaimInviteCommand $command
     *
     * @return void
     */
    public function handle(ClaimInviteCommand $command)
    {
        $invite = $command->invite;

        $invite->claimed_at = Carbon::now();
        $invite->save();

        event(new InviteWasClaimed($invite));
    }
}
