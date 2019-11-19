<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Bus\Commands\Subscriber;

use App\Models\Subscriber;

final class VerifySubscriberCommand
{
    /**
     * The subscriber to verify.
     *
     * @var \App\Models\Subscriber
     */
    public $subscriber;

    /**
     * Create a verify subscriber command instance.
     *
     * @param \App\Models\Subscriber $subscriber
     *
     * @return void
     */
    public function __construct(Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;
    }
}
