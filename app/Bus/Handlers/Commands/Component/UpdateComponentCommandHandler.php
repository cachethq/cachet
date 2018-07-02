<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Commands\Component;

use CachetHQ\Cachet\Bus\Commands\Component\UpdateComponentCommand;
use CachetHQ\Cachet\Bus\Events\Component\ComponentStatusWasChangedEvent;
use CachetHQ\Cachet\Bus\Events\Component\ComponentWasUpdatedEvent;
use CachetHQ\Cachet\Models\Component;
use Illuminate\Contracts\Auth\Guard;

class UpdateComponentCommandHandler
{
    /**
     * The authentication guard instance.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * Create a new update component command handler instance.
     *
     * @param \Illuminate\Contracts\Auth\Guard $auth
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle the update component command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Component\UpdateComponentCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Component
     */
    public function handle(UpdateComponentCommand $command)
    {
        $component = $command->component;
        $originalStatus = $component->status;

        if ($command->status && (int) $originalStatus !== (int) $command->status) {
            event(new ComponentStatusWasChangedEvent($this->auth->user(), $component, $originalStatus, $command->status, $command->silent));
        }

        $component->update($this->filter($command));

        event(new ComponentWasUpdatedEvent($this->auth->user(), $component));

        return $component;
    }

    /**
     * Filter the command data.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Component\UpdateComponentCommand $command
     *
     * @return array
     */
    protected function filter(UpdateComponentCommand $command)
    {
        $params = [
            'name'        => $command->name,
            'description' => $command->description,
            'link'        => $command->link,
            'status'      => $command->status,
            'enabled'     => $command->enabled,
            'order'       => $command->order,
            'group_id'    => $command->group_id,
            'meta'        => $command->meta,
        ];

        return array_filter($params, function ($val) {
            return $val !== null;
        });
    }
}
