<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Notifications\Incident;

use CachetHQ\Cachet\Models\Incident;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\NexmoMessage;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Config;
use McCool\LaravelAutoPresenter\Facades\AutoPresenter;

/**
 * This is the new incident notification class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class NewIncidentNotification extends Notification
{
    use Queueable;

    /**
     * The incident.
     *
     * @var \CachetHQ\Cachet\Models\Incident
     */
    protected $incident;

    /**
     * Create a new notification instance.
     *
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return void
     */
    public function __construct(Incident $incident)
    {
        $this->incident = AutoPresenter::decorate($incident);
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     *
     * @return string[]
     */
    public function via($notifiable)
    {
        return ['mail', 'nexmo', 'slack'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $content = trans('notifications.incident.new.mail.content', [
            'name' => $this->incident->name,
        ]);

        return (new MailMessage())
                    ->subject(trans('notifications.incident.new.mail.subject'))
                    ->markdown('notifications.incident.new', [
                        'incident'               => $this->incident,
                        'content'                => $content,
                        'actionText'             => trans('notifications.incident.new.mail.action'),
                        'actionUrl'              => cachet_route('incident', [$this->incident]),
                        'unsubscribeText'        => trans('cachet.subscriber.unsubscribe'),
                        'unsubscribeUrl'         => cachet_route('subscribe.unsubscribe', $notifiable->verify_code),
                        'manageSubscriptionText' => trans('cachet.subscriber.manage_subscription'),
                        'manageSubscriptionUrl'  => cachet_route('subscribe.manage', $notifiable->verify_code),
                    ]);
    }

    /**
     * Get the Nexmo / SMS representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return \Illuminate\Notifications\Messages\NexmoMessage
     */
    public function toNexmo($notifiable)
    {
        return (new NexmoMessage())->content(trans('notifications.incident.new.sms.content', [
            'name' => $this->incident->name,
        ]));
    }

    /**
     * Get the Slack representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return \Illuminate\Notifications\Messages\SlackMessage
     */
    public function toSlack($notifiable)
    {
        $content = trans('notifications.incident.new.slack.content', [
            'app_name' => Config::get('setting.app_name'),
        ]);

        $status = 'info';

        if ($this->incident->status === Incident::FIXED) {
            $status = 'success';
        } elseif ($this->incident->status === Incident::WATCHED) {
            $status = 'warning';
        } else {
            $status = 'error';
        }

        return (new SlackMessage())
                    ->$status()
                    ->content($content)
                    ->attachment(function ($attachment) use ($notifiable) {
                        $attachment->title(trans('notifications.incident.new.slack.title', ['name' => $this->incident->name]))
                                   ->timestamp($this->incident->getWrappedObject()->occurred_at)
                                   ->fields(array_filter([
                                        'ID'   => "#{$this->incident->id}",
                                        'Link' => $this->incident->permalink,
                                    ]))
                                   ->footer(trans('cachet.subscriber.unsubscribe', ['link' => cachet_route('subscribe.unsubscribe', $notifiable->verify_code)]));
                    });
    }
}
