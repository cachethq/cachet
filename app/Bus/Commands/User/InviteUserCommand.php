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
 * This is the invite user command.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class InviteUserCommand
{
    /**
     * The invite emails.
     *
     * @var string[]
     */
    public $emails;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'emails' => 'required|array|email',
    ];

    /**
     * Create a new invite user command instance.
     *
     * @param string[] $emails
     *
     * @return void
     */
    public function __construct(array $emails)
    {
        $this->emails = $emails;
    }
}
