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
     * The subscriber phone number.
     * 
     * @var string|null
     */
    public $phone_number;

    /**
     * The subscriber ip.
     * 
     * @var string|null
     */
    public $ip;

    /**
     * The validation rules.
     *
     * @var array
     */
    public $rules = [
        'email' => 'nullable|email',
        'phone_number' => ['nullable','regex:/^(?=(?:\+|0{2})?(?:(?:[\(\-\)\.\/ \t\f]*\d){7,10})?(?:[\-\.\/ \t\f]?\d{2,3})(?:[\-\s]?[ext]{1,3}[\-\.\/ \t\f]?\d{1,4})?$)((?:\+|0{2})\d{0,3})?(?:[\-\.\/ \t\f]?)(\(0\d[ ]?\d{0,4}\)|\(\d{0,4}\)|\d{0,4})(?:[\-\.\/ \t\f]{0,2}\d){3,8}(?:[\-\s]?(?:x|ext)[\-\t\f ]?(\d{1,4}))?$/'],
    ];

    /**
     * Create a new subscribe subscriber command instance.
     *
     * @param string|null $email
     * @param bool        $verified
     * @param array|null  $subscriptions
     * @param string|null $phone_number
     * @param string|null $ip
     *
     * @return void
     */
    public function __construct($email = null, $verified = false, $subscriptions = null, $phone_number = null, $ip = null)
    {
        $this->email = $email;
        $this->verified = $verified;
        $this->subscriptions = $subscriptions;
        $this->phone_number = $phone_number;
        $this->ip = $ip;
    }
}
