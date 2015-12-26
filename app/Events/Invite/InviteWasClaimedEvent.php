<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Events\Invite;

use CachetHQ\Cachet\Models\Invite;

final class InviteWasClaimedEvent implements InviteEventInterface
{
    /**
     * The invite that has been claimed.
     *
     * @var \CachetHQ\Cachet\Models\Invite
     */
    public $invite;

    /**
     * Create a new invite was claimed event instance.
     *
     * @return void
     */
    public function __construct(Invite $invite)
    {
        $this->invite = $invite;
    }
}
