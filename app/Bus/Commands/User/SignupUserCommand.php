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

final class SignupUserCommand
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
        'password' => 'string',
        'email'    => 'required|string|email',
        'level'    => 'int',
    ];

    /**
     * Create a new signup user command instance.
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
