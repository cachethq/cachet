<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Events\Incident;

use CachetHQ\Cachet\Bus\Events\Incident\MaintenanceWasScheduledEvent;
use CachetHQ\Cachet\Models\Subscriber;
use Illuminate\Contracts\Mail\MailQueue;
use Illuminate\Mail\Message;
use McCool\LaravelAutoPresenter\Facades\AutoPresenter;

class SendMaintenanceEmailNotificationHandler
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
     * @param \CachetHQ\Cachet\Bus\Events\MaintenanceWasScheduledEvent $event
     *
     * @return void
     */
    public function handle(MaintenanceWasScheduledEvent $event)
    {
        if (!$event->incident->notify) {
            return false;
        }

        // Only send emails for public incidents.
        if ($event->incident->visible === 0) {
            return;
        }

        // First notify all global subscribers.
        $globalSubscribers = $this->subscriber->isVerified()->isGlobal()->get();

        foreach ($globalSubscribers as $subscriber) {
            $this->notify($event, $subscriber);
        }

        if (!$event->incident->component) {
            return;
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
     * @param \CachetHQ\Cachet\Bus\Events\MaintenanceWasScheduledEvent $event
     * @param \CachetHQ\Cachet\Models\Subscriber                       $subscriber
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function notify(MaintenanceWasScheduledEvent $event, $subscriber)
    {
        $incident = AutoPresenter::decorate($event->incident);
        $component = AutoPresenter::decorate($event->incident->component);

        $mail = [
            'email'            => $subscriber->email,
            'subject'          => trans('cachet.subscriber.email.maintenance.subject', [
                'name'   => $incident->name,
            ]),
            'has_component'    => ($event->incident->component) ? true : false,
            'component_name'   => $component ? $component->name : null,
            'name'             => $incident->name,
            'timestamp'        => $incident->scheduled_at_formatted,
            'status'           => $incident->human_status,
            'html_content'     => $incident->formattedMessage,
            'text_content'     => $incident->message,
            'token'            => $subscriber->token,
            'manage_link'      => route('subscribe.manage', ['code' => $subscriber->verify_code]),
            'unsubscribe_link' => route('subscribe.unsubscribe', ['code' => $subscriber->verify_code]),
        ];

        $this->mailer->queue([
            'html' => 'emails.incidents.maintenance-html',
            'text' => 'emails.incidents.maintenance-text',
        ], $mail, function (Message $message) use ($mail) {
            $message->to($mail['email'])->subject($mail['subject']);
        });
    }
}
