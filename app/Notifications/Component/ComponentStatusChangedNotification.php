<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Notifications\Component;

use CachetHQ\Cachet\Models\Component;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\NexmoMessage;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;
use McCool\LaravelAutoPresenter\Facades\AutoPresenter;

/**
 * This is the component status changed notification class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ComponentStatusChangedNotification extends Notification
{
    use Queueable;

    /**
     * The component that changed.
     *
     * @var \CachetHQ\Cachet\Models\Component
     */
    protected $component;

    /**
     * The component status we're now at.
     *
     * @var int
     */
    protected $status;

    /**
     * Create a new notification instance.
     *
     * @param \CachetHQ\Cachet\Models\Component $component
     * @param int                               $status
     *
     * @return void
     */
    public function __construct(Component $component, $status)
    {
        $this->component = AutoPresenter::decorate($component);
        $this->status = $status;
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
        $content = trans('notifications.component.status_update.content', [
            'name'       => $this->component->name,
            'old_status' => $this->component->human_status,
            'new_status' => trans("cachet.components.status.{$this->status}"),
        ]);

        return (new MailMessage())
                    ->subject(trans('notifications.component.status_update.subject'))
                    ->greeting(trans('notifications.component.status_update.title'))
                    ->line($content)
                    ->action('View', cachet_route('status-page'))
                    ->line(trans('cachet.subscriber.unsubscribe', ['link' => cachet_route('subscribe.unsubscribe', $notifiable->verify_code)]));
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
        $content = trans('notifications.component.status_update.content', [
            'name'       => $this->component->name,
            'old_status' => $this->component->human_status,
            'new_status' => trans("cachet.components.status.{$this->status}"),
        ]);

        return (new NexmoMessage())->content($content);
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
        $content = trans('notifications.component.status_update.content', [
            'name'       => $this->component->name,
            'old_status' => $this->component->human_status,
            'new_status' => trans("cachet.components.status.{$this->status}"),
        ]);

        $status = 'info';

        if ($this->status <= 1) {
            $status = 'success';
        } elseif ($this->status === 2) {
            $status = 'warning';
        } elseif ($this->status >= 3) {
            $status = 'error';
        }

        return (new SlackMessage())
                    ->$status()
                    ->content(trans('notifications.component.status_update.title'))
                    ->attachment(function ($attachment) use ($content, $notifiable) {
                        $attachment->title($content, cachet_route('status-page'))
                                   ->fields(array_filter([
                                        'Component'  => $this->component->name,
                                        'Old Status' => $this->component->human_status,
                                        'New Status' => trans("cachet.components.status.{$this->status}"),
                                        'Link'       => $this->component->link,
                                    ]))
                                   ->footer(trans('cachet.subscriber.unsubscribe', ['link' => cachet_route('subscribe.unsubscribe', $notifiable->verify_code)]));
                    });
    }
}
