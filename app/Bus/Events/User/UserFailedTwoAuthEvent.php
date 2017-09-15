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

use CachetHQ\Cachet\Bus\Events\ActionInterface;
use CachetHQ\Cachet\Models\User;

/**
 * This is the user failed two auth event class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class UserFailedTwoAuthEvent implements ActionInterface, UserEventInterface
{
    /**
     * The user that failed two auth.
     *
     * @var \CachetHQ\Cachet\Models\User
     */
    public $user;

    /**
     * Create a new user failed two auth event instance.
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
        return 'User failed two-factor authentication.';
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
