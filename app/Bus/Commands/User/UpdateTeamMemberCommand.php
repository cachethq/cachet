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

/**
 * This is the update team member command.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class UpdateTeamMemberCommand
{
    /**
     * The user to update.
     *
     * @var \CachetHQ\Cachet\Models\User
     */
    public $user;

    /**
     * The user username.
     *
     * @var string
     */
    public $username;

    /**
     * The user password.
     *
     * @var string
     */
    public $password;

    /**
     * The user email.
     *
     * @var string
     */
    public $email;

    /**
     * The user level.
     *
     * @var int
     */
    public $level;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'user'     => 'required',
        'name'     => 'required|string',
        'email'    => 'required|email',
        'password' => 'required|string',
        'level'    => 'int|min:1|max:2',
    ];

    /**
     * Create a new add team member command instance.
     *
     * @param \CachetHQ\Cachet\Models\User $user
     * @param string                       $username
     * @param string                       $password
     * @param string                       $email
     * @param int                          $level
     *
     * @return void
     */
    public function __construct(User $user, $username, $password, $email, $level)
    {
        $this->user = $user;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->level = $level;
    }
}
