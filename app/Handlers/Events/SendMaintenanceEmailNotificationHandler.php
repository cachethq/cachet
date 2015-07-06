<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Handlers\Events;

use CachetHQ\Cachet\Events\MaintenanceHasScheduledEvent;
use CachetHQ\Cachet\Models\Subscriber;
use Illuminate\Contracts\Mail\MailQueue;
use Illuminate\Mail\Message;
use McCool\LaravelAutoPresenter\PresenterDecorator;

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
     * The presenter instance.
     *
     * @var \McCool\LaravelAutoPresenter\PresenterDecorator
     */
    protected $presenter;

    /**
     * Create a new send maintenance email notification handler.
     *
     * @param \Illuminate\Contracts\Mail\Mailer               $mailer
     * @param \CachetHQ\Cachet\Models\Subscriber              $subscriber
     * @param \McCool\LaravelAutoPresenter\PresenterDecorator $presenter
     */
    public function __construct(MailQueue $mailer, Subscriber $subscriber, PresenterDecorator $presenter)
    {
        $this->mailer = $mailer;
        $this->subscriber = $subscriber;
        $this->presenter = $presenter;
    }

    /**
     * Handle the event.
     *
     * @param \CachetHQ\Cachet\Events\MaintenanceHasScheduledEvent $event
     */
    public function handle(MaintenanceHasScheduledEvent $event)
    {
        $data = $this->presenter->decorate($event->incident);

        foreach ($this->subscriber->all() as $subscriber) {
            $mail = [
                'email'           => $subscriber->email,
                'subject'         => 'Scheduled maintenance.',
                'status'          => $data->humanStatus,
                'htmlContent'     => $data->formattedMessage,
                'textContent'     => $data->message,
                'token'           => $subscriber->token,
                'unsubscribeLink' => route('unsubscribe', ['code' => $subscriber->token]),
                'appUrl'          => env('APP_URL'),
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
