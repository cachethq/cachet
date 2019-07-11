<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Notifications;

use Illuminate\Notifications\Notification;

abstract class AbstractSubscriberNotification extends Notification
{
    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     *
     * @return string[]
     */
    public function via($notifiable)
    {
        return array_filter([
            $notifiable->email ? 'mail' : null,
            $notifiable->phone_number ? 'nexmo' : null,
            $notifiable->slack_webhook_url ? 'slack' : null,
        ]);
    }
}
