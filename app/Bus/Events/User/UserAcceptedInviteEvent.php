<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Events\User;

use CachetHQ\Cachet\Models\User;

/**
 * This is the user accepted invite event class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class UserAcceptedInviteEvent implements UserEventInterface
{
    /**
     * The user that accepted the invite.
     *
     * @var \CachetHQ\Cachet\Models\User
     */
    public $user;

    /**
     * The invite that the user accepted.
     *
     * @var \CachetHQ\Cachet\Models\Invite
     */
    public $invite;

    /**
     * Create a new user accepted invite event class.
     *
     * @param \CachetHQ\Cachet\Models\User   $user
     * @param \CachetHQ\Cachet\Models\Invite $invite
     *
     * @return void
     */
    public function __construct(User $user, Invite $invite)
    {
        $this->user = $user;
        $this->invite = $invite;
    }
}
