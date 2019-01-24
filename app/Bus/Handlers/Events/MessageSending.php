<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Events;

/**
 * This class is called immediately before sending a message into the mail channel.
 *
 * @author Graham Campbell <graham@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 */
class MessageSending
{
    /**
     * Handle the any actions that need storing.
     *
     * @param \Illuminate\Mail\Events\MessageSending $event
     *
     * @return void
     */
    public function handle($event)
    {
        if ($unsubscribeUrl = $event->data['unsubscribeUrl'] ?? null) {
            $event->message->getHeaders()->addTextHeader('List-Unsubscribe', '<'.$unsubscribeUrl.'>');
        }
    }
}
