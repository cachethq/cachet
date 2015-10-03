<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Commands\User;

use CachetHQ\Cachet\Models\User;

final class RemoveUserCommand
{
    /**
     * The user to remove.
     *
     * @var \CachetHQ\Cachet\Models\User
     */
    public $user;

    /**
     * Create a new remove user command instance.
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
