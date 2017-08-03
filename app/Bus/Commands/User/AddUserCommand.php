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

/**
 * This is the add user command.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class AddUserCommand
{
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
        'username' => 'required|string',
        'password' => 'required|string',
        'level'    => 'required|int',
    ];

    /**
     * Create a new add team member command instance.
     *
     * @param string $username
     * @param string $password
     * @param string $email
     * @param int    $level
     *
     * @return void
     */
    public function __construct($username, $password, $email, $level)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->level = $level;
    }
}
