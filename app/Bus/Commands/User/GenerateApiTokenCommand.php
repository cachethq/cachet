<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Commands\User;

use CachetHQ\Cachet\Models\User;

final class GenerateApiTokenCommand
{
    /**
     * The user to generate the token.
     *
     * @var \CachetHQ\Cachet\Models\User
     */
    public $user;

    /**
     * Create a new generate api token command instance.
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
