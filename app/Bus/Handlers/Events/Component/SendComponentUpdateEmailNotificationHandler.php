<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Events\Component;

use CachetHQ\Cachet\Bus\Events\Component\ComponentWasUpdatedEvent;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Subscription;
use Illuminate\Contracts\Mail\MailQueue;
use Illuminate\Mail\Message;
use McCool\LaravelAutoPresenter\Facades\AutoPresenter;

class SendComponentUpdateEmailNotificationHandler
{
    /**
     * The mailer instance.
     *
     * @var \Illuminate\Contracts\Mail\Mailer
     */
    protected $mailer;

    /**
     * Create a new send incident email notification handler.
     *
     * @param \Illuminate\Contracts\Mail\Mailer $mailer
     *
     * @return void
     */
    public function __construct(MailQueue $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Handle the event.
     *
     * @param \CachetHQ\Cachet\Bus\Events\Component\ComponentWasUpdatedEvent $event
     *
     * @return void
     */
    public function handle(ComponentWasUpdatedEvent $event)
    {
        $component = AutoPresenter::decorate($event->component);

        $mail = [
            'subject'                => trans('cachet.subscriber.email.component.subject'),
            'component_name'         => $component->name,
            'component_human_status' => $component->human_status,
        ];

        foreach (Subscription::isVerifiedForComponent($component->id)->with('subscriber')->get() as $subscription) {
            $subscriber = $subscription->subscriber;
            $mail['email'] = $subscriber->email;
            $mail['manage_link'] = route('subscribe.manage', ['code' => $subscriber->verify_code]);
            $mail['unsubscribe_link'] = route('subscribe.unsubscribe', ['code' => $subscriber->verify_code, 'subscription' => $subscription->id]);

            $this->mailer->queue([
                'html' => 'emails.components.update-html',
                'text' => 'emails.components.update-text',
            ], $mail, function (Message $message) use ($mail) {
                $message->to($mail['email'])->subject($mail['subject']);
            });
        }
    }
}
