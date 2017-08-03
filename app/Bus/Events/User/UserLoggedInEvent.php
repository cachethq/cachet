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
 * This is the user logged in event class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class UserLoggedInEvent implements UserEventInterface
{
    /**
     * The user that logged in.
     *
     * @var \CachetHQ\Cachet\Models\User
     */
    public $user;

    /**
     * Create a new user logged in event instance.
     *
     * @param \CachetHQ\Cachet\Models\User $user
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }
}
