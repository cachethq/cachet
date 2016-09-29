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

use CachetHQ\Cachet\Bus\Events\Component\ComponentStatusWasUpdatedEvent;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Subscriber;
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
     * @param \CachetHQ\Cachet\Bus\Events\Component\ComponentStatusWasUpdatedEvent $event
     *
     * @return void
     */
    public function handle(ComponentStatusWasUpdatedEvent $event)
    {
        $component = $event->component;

        // Don't email anything if the status hasn't changed.
        if ($event->original_status === $event->new_status) {
            return;
        }

        // First notify all global subscribers.
        $globalSubscribers = $this->subscriber->isVerified()->isGlobal()->get();

        foreach ($globalSubscribers as $subscriber) {
            $this->notify($component, $subscriber);
        }

        $notified = $globalSubscribers->pluck('id')->all();

        // Notify the remaining component specific subscribers.
        $componentSubscribers = $this->subscriber
            ->isVerified()
            ->forComponent($component->id)
            ->get()
            ->reject(function ($subscriber) use ($notified) {
                return in_array($subscriber->id, $notified);
            });

        foreach ($componentSubscribers as $subscriber) {
            $this->notify($component, $subscriber);
        }
    }

    /**
     * Send notification to subscriber.
     *
     * @param \CachetHQ\Cachet\Models\Component  $component
     * @param \CachetHQ\Cachet\Models\Subscriber $subscriber
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function notify(Component $component, Subscriber $subscriber)
    {
        $component = AutoPresenter::decorate($component);

        $mail = [
            'subject'                => trans('cachet.subscriber.email.component.subject'),
            'component_name'         => $component->name,
            'component_human_status' => $component->human_status,
        ];

        $mail['email'] = $subscriber->email;
        $mail['manage_link'] = route('subscribe.manage', ['code' => $subscriber->verify_code]);

        $this->mailer->queue([
            'html' => 'emails.components.update-html',
            'text' => 'emails.components.update-text',
        ], $mail, function (Message $message) use ($mail) {
            $message->to($mail['email'])->subject($mail['subject']);
        });
    }
}
