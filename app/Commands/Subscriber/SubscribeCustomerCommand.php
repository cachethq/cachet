<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Commands\Subscriber;

class SubscribeCustomerCommand
{
    /**
     * The customer email.
     *
     * @var string
     */
    public $email;

    /**
     * Create a new subscribe customer command instance.
     *
     * @param string $email
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;
    }
}
