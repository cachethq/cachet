<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Commands\System\Mail;

use CachetHQ\Cachet\Models\User;

/**
 * This is the test mail command class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class TestMailCommand
{
    /**
     * The user to send the notification to.
     *
     * @var \CachetHQ\Cachet\Models\User
     */
    public $user;

    /**
     * Create a new test mail command.
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
