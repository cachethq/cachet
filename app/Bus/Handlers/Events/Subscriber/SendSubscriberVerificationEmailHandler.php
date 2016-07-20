<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Events\Subscriber;

use CachetHQ\Cachet\Bus\Commands\Subscriber\VerifySubscriberCommand;
use CachetHQ\Cachet\Bus\Events\Subscriber\SubscriberHasSubscribedEvent;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\Mail\MailQueue;
use Illuminate\Mail\Message;

class SendSubscriberVerificationEmailHandler
{
    /**
     * The mailer instance.
     *
     * @var \Illuminate\Contracts\Mail\MailQueue
     */
    protected $mailer;

    /**
     * The illuminate config instance.
     *
     * @var \Illuminate\Contracts\Config\Repository
     */
    protected $config;

    /**
     * Create a new send subscriber verification email handler.
     *
     * @param \Illuminate\Contracts\Mail\Mailer $mailer
     *
     * @return void
     */
    public function __construct(MailQueue $mailer, Repository $config)
    {
        $this->mailer = $mailer;
        $this->config = $config;
    }

    /**
     * Handle the event.
     *
     * @param \CachetHQ\Cachet\Bus\Events\SubscriberHasSubscribedEvent $event
     *
     * @return void
     */
    public function handle(SubscriberHasSubscribedEvent $event)
    {
        // If we've enabled verification skipping, then just verify the subscriber right now.
        if ($this->config->get('setting.skip_subscriber_verification')) {
            dispatch(new VerifySubscriberCommand($event->subscriber));

            return;
        }

        $mail = [
            'email'   => $event->subscriber->email,
            'subject' => 'Confirm your subscription.',
            'link'    => route('subscribe.verify', ['code' => $event->subscriber->verify_code]),
        ];

        $this->mailer->queue([
            'html' => 'emails.subscribers.verify-html',
            'text' => 'emails.subscribers.verify-text',
        ], $mail, function (Message $message) use ($mail) {
            $message->to($mail['email'])->subject($mail['subject']);
        });
    }
}
