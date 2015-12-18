<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Handlers\Events\Incident;

use CachetHQ\Cachet\Events\Incident\MaintenanceWasScheduledEvent;
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
     * @param \CachetHQ\Cachet\Events\MaintenanceHasScheduledEvent $event
     *
     * @return void
     */
    public function handle(MaintenanceWasScheduledEvent $event)
    {
        if (!$event->incident->notify) {
            return false;
        }

        $data = AutoPresenter::decorate($event->incident);

        foreach ($this->subscriber->isVerified()->get() as $subscriber) {
            $mail = [
                'email'            => $subscriber->email,
                'subject'          => 'Scheduled maintenance.',
                'status'           => $data->humanStatus,
                'html_content'     => $data->formattedMessage,
                'text_content'     => $data->message,
                'scheduled_at'     => $data->scheduled_at_formatted,
                'token'            => $subscriber->token,
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
}
