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

/**
 * This is the subscribe subscriber command.
 *
 * @author Joseph Cohen <joe@alt-three.com>
 */
final class UpdateSubscriberSubscriptionCommand
{
    /**
     * The subscriber email.
     *
     * @var \App\Models\Subscriber
     */
    public $subscriber;

    /**
     * The subscriptions that we want to add.
     *
     * @var array|null
     */
    public $subscriptions;

    /**
     * Create a new subscribe subscriber command instance.
     *
     * @param \App\Models\Subscriber $subscriber
     * @param null|array             $subscriptions
     *
     * @return void
     */
    public function __construct($subscriber, $subscriptions = null)
    {
        $this->subscriber = $subscriber;
        $this->subscriptions = $subscriptions;
    }
}
