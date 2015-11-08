<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Commands\Invite;

final class ClaimInviteCommand
{
    /**
     * The invte to mark as claimed.
     *
     * @var \CachetHQ\Cachet\Model\Invite
     */
    public $invite;

    /**
     * Create a new claim invite command instance.
     *
     * @param \CachetHQ\Cachet\Model\Invite $invite
     *
     * @return void
     */
    public function __construct($invite)
    {
        $this->invite = $invite;
    }
}
