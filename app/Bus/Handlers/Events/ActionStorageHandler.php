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

use CachetHQ\Cachet\Bus\Events\ActionInterface;
use CachetHQ\Cachet\Models\Action;

/**
 * This is the action storage handler class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 */
class ActionStorageHandler
{
    /**
     * Handle the any actions that need storing.
     *
     * @param \CachetHQ\Cachet\Bus\Events\ActionInterface $event
     *
     * @return void
     */
    public function handle(ActionInterface $event)
    {
        $data = $event->getAction();

        $action = [
            'class_name'  => get_class($event),
            'user_id'     => $data['user']->id,
            'username'    => $data['user']->username,
            'description' => $data['description'],
        ];

        if (isset($data['information'])) {
            $action['information'] = $data['information'];
        }

        Action::create($action);
    }
}
