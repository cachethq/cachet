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
 * This is the user enabled two auth event class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class UserEnabledTwoAuthEvent implements UserEventInterface
{
    /**
     * The user that enabled two auth.
     *
     * @var \CachetHQ\Cachet\Models\User
     */
    public $user;

    /**
     * Create a new user enabled two auth event instance.
     *
     * @param \CachetHQ\Cachet\Models\User $user
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get the event description.
     *
     * @return string
     */
    public function __toString()
    {
        return 'User enabled two-factor authentication.';
    }
}
