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

use CachetHQ\Cachet\Models\Subscriber;

class VerifySubscriberCommand
{
    /**
     * The subscriber to verify.
     *
     * @var string
     */
    public $subscriber;

    /**
     * Create a verify subscriber command instance.
     *
     * @param string $subscriber
     *
     * @return void
     */
    public function __construct(Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;
    }
}
