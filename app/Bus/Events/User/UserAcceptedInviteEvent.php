<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Bus\Events\User;

use App\Bus\Events\ActionInterface;
use App\Models\Invite;
use App\Models\User;

/**
 * This is the user accepted invite event class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class UserAcceptedInviteEvent implements ActionInterface, UserEventInterface
{
    /**
     * The user that accepted the invite.
     *
     * @var \App\Models\User
     */
    public $user;

    /**
     * The invite that the user accepted.
     *
     * @var \App\Models\Invite
     */
    public $invite;

    /**
     * Create a new user accepted invite event class.
     *
     * @param \App\Models\User   $user
     * @param \App\Models\Invite $invite
     *
     * @return void
     */
    public function __construct(User $user, Invite $invite)
    {
        $this->user = $user;
        $this->invite = $invite;
    }

    /**
     * Get the event description.
     *
     * @return string
     */
    public function __toString()
    {
        return 'User accepted invite.';
    }

    /**
     * Get the event action.
     *
     * @return array
     */
    public function getAction()
    {
        return [
            'user'        => $this->user,
            'description' => (string) $this,
        ];
    }
}
