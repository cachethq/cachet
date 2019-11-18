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

use App\Models\Subscription;

final class UnsubscribeSubscriptionCommand
{
    /**
     * The subscription to unsubscribe.
     *
     * @var \App\Models\Subscription
     */
    public $subscription;

    /**
     * Create a unsubscribe subscription command instance.
     *
     * @param \App\Models\Subscription $subscription
     *
     * @return void
     */
    public function __construct(Subscription $subscription)
    {
        $this->subscription = $subscription;
    }
}
