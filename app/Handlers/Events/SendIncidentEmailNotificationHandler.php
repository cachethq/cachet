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

use CachetHQ\Cachet\Events\IncidentHasReportedEvent;
use CachetHQ\Cachet\Models\Subscriber;
use Illuminate\Contracts\Mail\MailQueue;
use Illuminate\Mail\Message;
use McCool\LaravelAutoPresenter\PresenterDecorator;

class SendIncidentEmailNotificationHandler
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
     * The presenter instance.
     *
     * @var \McCool\LaravelAutoPresenter\PresenterDecorator
     */
    protected $presenter;

    /**
     * Create a new send incident email notification handler.
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
     * @param \CachetHQ\Cachet\Events\IncidentHasReportedEvent $event
     */
    public function handle(IncidentHasReportedEvent $event)
    {
        $incident = $this->presenter->decorate($event->incident);
        $component = $this->presenter->decorate($event->incident->component);

        // Only send emails for public incidents.
        if ($event->incident->visible === 1) {
            foreach ($this->subscriber->all() as $subscriber) {
                $mail = [
                    'email'            => $subscriber->email,
                    'subject'          => 'New incident reported.',
                    'has_component'    => ($event->incident->component) ? true : false,
                    'component_name'   => $component->name,
                    'status'           => $incident->humanStatus,
                    'html_content'     => $incident->formattedMessage,
                    'text_content'     => $incident->message,
                    'token'            => $subscriber->token,
                    'unsubscribe_link' => route('subscribe.unsubscribe', ['code' => $subscriber->verify_code]),
                    'app_url'          => env('APP_URL'),
                ];

                $this->mailer->queue([
                    'html' => 'emails.incidents.new-html',
                    'text' => 'emails.incidents.new-text',
                ], $mail, function (Message $message) use ($mail) {
                    $message->to($mail['email'])->subject($mail['subject']);
                });
            }
        }
    }
}
