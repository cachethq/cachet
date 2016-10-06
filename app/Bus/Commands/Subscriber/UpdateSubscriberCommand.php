<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Commands\Subscriber;
use CachetHQ\Cachet\Models\Subscriber;

/**
 * This is the udpate subscriber command.
 *
 * @author Piotr Grabowski <pgrabowski@fandom.com>
 */
final class UpdateSubscriberCommand
{
    /**
     * The subscriber email.
     *
     * @var string
     */
    public $email;

    /**
     * The subscriber auto verification.
     *
     * @var bool
     */
    public $verified;

    /**
     * The list of subscriptions to set the subscriber up with.
     *
     * @var array|null
     */
    public $subscriptions;

    /**
     * The validation rules.
     *
     * @var array
     */
    public $rules = [
        'email' => 'required|email',
    ];

    /**
     * Update a new subscribe subscriber command instance.
     *
     * @param Subscriber $subscriber
     * @param            $email
     * @param bool       $verified
     * @param array|null $subscriptions
     *
     * @internal param string $email
     */
    public function __construct(Subscriber $subscriber, $email, $verified = false, $subscriptions = null)
    {
        $this->subscriber = $subscriber;
        $this->email = $email;
        $this->verified = $verified;
        $this->subscriptions = $subscriptions;
    }
}
