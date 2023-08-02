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

/**
 * This is the subscribe subscriber command.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class SubscribeSubscriberCommand
{
    /**
     * The subscriber email.
     *
     * @var string|null
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
     * The subscriber phone_number.
     * @var string|null
     */
    public $phone_number;

    /**
     * The validation rules.
     *
     * @var array
     */
    public $rules = [
        'email' => 'required|email',
        'phone_number' => 'required|phone_number',
    ];

    /**
     * Create a new subscribe subscriber command instance.
     *
     * @param string     $email
     * @param bool       $verified
     * @param array|null $subscriptions
     *
     * @return void
     */
    public function __construct($email = null, $verified = false, $subscriptions = null, $phone_number = null)
    {
        $this->email = $email;
        $this->verified = $verified;
        $this->subscriptions = $subscriptions;
        $this->phone_number = $phone_number;
    }
}
