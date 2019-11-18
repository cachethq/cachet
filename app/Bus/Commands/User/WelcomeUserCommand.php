<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Bus\Commands\User;

use App\Models\User;

/**
 * This is the welcome user command.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class WelcomeUserCommand
{
    /**
     * The user.
     *
     * @var \App\Models\User
     */
    public $user;

    /**
     * Create a new welcome user command instance.
     *
     * @param \App\Models\User $user
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }
}
