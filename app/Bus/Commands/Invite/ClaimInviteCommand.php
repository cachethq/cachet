<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Bus\Commands\Invite;

use App\Models\Invite;

final class ClaimInviteCommand
{
    /**
     * The invite to mark as claimed.
     *
     * @var \App\Models\Invite
     */
    public $invite;

    /**
     * Create a new claim invite command instance.
     *
     * @param \App\Models\Invite $invite
     *
     * @return void
     */
    public function __construct(Invite $invite)
    {
        $this->invite = $invite;
    }
}
