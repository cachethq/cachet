<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Events\IncidentHandler;

use CachetHQ\Cachet\Bus\Events\IncidentUpdate\IncidentUpdateWasUpdatedEvent;
use CachetHQ\Cachet\Models\Subscriber;
use Illuminate\Contracts\Mail\MailQueue;
use Illuminate\Mail\Message;
use McCool\LaravelAutoPresenter\Facades\AutoPresenter;

class SendIncidentUpdateEmailNotificationHandler
{
    /**
     * The mailer instance.
     *
     * @var \Illuminate\Contracts\Mail\Mailer
     */
    protected $mailer;

    /**
     * The subscriber instance.
     *
     * @var \CachetHQ\Cachet\Models\Subscriber
     */
    protected $subscriber;

    /**
     * Create a new send incident email notification handler.
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
     * @param \CachetHQ\Cachet\Bus\Events\IncidentUpdate\IncidentUpdateWasUpdatedEvent $event
     *
     * @return void
     */
    public function handle(IncidentUpdateWasUpdatedEvent $event)
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
     * @param \CachetHQ\Cachet\Bus\Events\IncidentUpdate\IncidentUpdateWasUpdatedEvent $event
     * @param \CachetHQ\Cachet\Models\Subscriber                   $subscriber
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function notify(IncidentUpdateWasUpdatedEvent $event, $subscriber)
    {
        $update = AutoPresenter::decorate($event->update);
        $incident = AutoPresenter::decorate($event->update->incident());
        $component = AutoPresenter::decorate($incident->component);

        $mail = [
            'email'            => $subscriber->email,
            'subject'          => 'New Incident Update.',
            'has_component'    => ($incident->component) ? true : false,
            'component_name'   => $component ? $component->name : null,
            'status'           => $update->human_status,
            'html_content'     => $update->formattedMessage,
            'text_content'     => $update->message,
            'token'            => $subscriber->token,
            'manage_link'      => route('subscribe.manage', ['code' => $subscriber->verify_code]),
            'unsubscribe_link' => route('subscribe.unsubscribe', ['code' => $subscriber->verify_code]),
        ];

        $this->mailer->queue([
            'html' => 'emails.incidents.new-html',
            'text' => 'emails.incidents.new-text',
        ], $mail, function (Message $message) use ($mail) {
            $message->to($mail['email'])->subject($mail['subject']);
        });
    }
}
