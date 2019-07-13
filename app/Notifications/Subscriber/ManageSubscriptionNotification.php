<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Notifications\Subscriber;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class ManageSubscriptionNotification extends Notification
{
    use Queueable;

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
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
        $route = URL::signedRoute(cachet_route_generator('subscribe.manage'), ['code' => $notifiable->verify_code]);

        return (new MailMessage())
                    ->subject(trans('notifications.subscriber.manage.mail.subject'))
                    ->greeting(trans('notifications.subscriber.manage.mail.title', ['app_name' => setting('app_name')]))
                    ->action(trans('notifications.subscriber.manage.mail.action'), $route)
                    ->line(trans('notifications.subscriber.manage.mail.content', ['app_name' => setting('app_name')]));
    }
}
