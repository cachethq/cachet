<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Events\Schedule;

use CachetHQ\Cachet\Bus\Events\Schedule\ScheduleEventInterface;
use CachetHQ\Cachet\Models\Subscriber;
use Illuminate\Contracts\Mail\MailQueue;
use Illuminate\Mail\Message;
use McCool\LaravelAutoPresenter\Facades\AutoPresenter;

/**
 * This is the send schedule event notification handler.
 *
 * @author James Brooks <james@alt-three.com>
 */
class SendScheduleEmailNotificationHandler
{
    /**
     * The mailer instance.
     *
     * @var \Illuminate\Contracts\Mail\MailQueue
     */
    protected $mailer;

    /**
     * The subscriber instance.
     *
     * @var \CachetHQ\Cachet\Models\Subscriber
     */
    protected $subscriber;

    /**
     * Create a new send maintenance email notification handler.
     *
     * @param \Illuminate\Contracts\Mail\Mailer  $mailer
     * @param \CachetHQ\Cachet\Models\Subscriber $subscriber
     *
     * @return void
     */
    public function __construct(MailQueue $mailer, Subscriber $subscriber)
    {
        $this->mailer = $mailer;
        $this->subscriber = $subscriber;
    }

    /**
     * Handle the event.
     *
     * @param \CachetHQ\Cachet\Bus\Events\Schedule\ScheduleEventInterface $event
     *
     * @return void
     */
    public function handle(ScheduleEventInterface $event)
    {
        // First notify all global subscribers.
        $globalSubscribers = $this->subscriber->isVerified()->isGlobal()->get();

        foreach ($globalSubscribers as $subscriber) {
            $this->notify($event, $subscriber);
        }

        $notified = $globalSubscribers->pluck('id')->all();

        // Notify the remaining component specific subscribers.
        $componentSubscribers = $this->subscriber
            ->isVerified()
            ->forComponent($event->incident->component->id)
            ->get()
            ->reject(function ($subscriber) use ($notified) {
                return in_array($subscriber->id, $notified);
            });

        foreach ($componentSubscribers as $subscriber) {
            $this->notify($event, $subscriber);
        }
    }

    /**
     * Send notification to subscriber.
     *
     * @param \CachetHQ\Cachet\Bus\Events\Schedule\ScheduleEventInterface $event
     * @param \CachetHQ\Cachet\Models\Subscriber                          $subscriber
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function notify(ScheduleEventInterface $event, $subscriber)
    {
        $incident = AutoPresenter::decorate($event->incident);
        $component = AutoPresenter::decorate($event->incident->component);

        $mail = [
            'email'   => $subscriber->email,
            'subject' => trans('cachet.subscriber.email.maintenance.subject', [
                'name' => $incident->name,
            ]),
            'name'             => $incident->name,
            'timestamp'        => $incident->scheduled_at_formatted,
            'status'           => $incident->human_status,
            'html_content'     => $incident->formattedMessage,
            'text_content'     => $incident->message,
            'token'            => $subscriber->token,
            'manage_link'      => cachet_route('subscribe.manage', [$subscriber->verify_code]),
            'unsubscribe_link' => cachet_route('subscribe.unsubscribe', [$subscriber->verify_code]),
        ];

        $this->mailer->queue([
            'html' => 'emails.incidents.maintenance-html',
            'text' => 'emails.incidents.maintenance-text',
        ], $mail, function (Message $message) use ($mail) {
            $message->to($mail['email'])->subject($mail['subject']);
        });
    }
}
