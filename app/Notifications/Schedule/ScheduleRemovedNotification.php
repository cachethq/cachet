<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Notifications\Schedule;

use Illuminate\Notifications\Messages\SlackMessage;

/**
 * This is the new schedule notification class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ScheduleRemovedNotification extends AbstractScheduleNotification
{
    protected function getTranslationPrefix()
    {
        return 'notifications.schedule.remove.';
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
        $content = trans($this->getPrefixedTranslationKey('slack.content'), [
            'name' => $this->schedule->name,
            'date' => $this->schedule->scheduled_at_formatted,
        ]);

        return (new SlackMessage())
            ->content(trans($this->getPrefixedTranslationKey('slack.title')))
            ->attachment(function ($attachment) use ($content, $notifiable) {
                $attachment->title($content)
                    ->footer(trans('cachet.subscriber.unsubscribe', ['link' => cachet_route('subscribe.unsubscribe', $notifiable->verify_code)]));
            });
    }
}
