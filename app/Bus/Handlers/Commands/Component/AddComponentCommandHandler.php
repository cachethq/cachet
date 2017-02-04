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

use CachetHQ\Cachet\Bus\Commands\Component\AddComponentCommand;
use CachetHQ\Cachet\Bus\Events\Component\ComponentWasAddedEvent;
use CachetHQ\Cachet\Models\Component;
use Illuminate\Contracts\Auth\Guard;

class AddComponentCommandHandler
{
    /**
     * The authentication guard instance.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * Create a new remove component command handler instance.
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
     * Handle the add component command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Component\AddComponentCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Component
     */
    public function handle(AddComponentCommand $command)
    {
        $component = Component::create($this->filter($command));

        event(new ComponentWasAddedEvent($this->auth->user(), $component));

        return $component;
    }

    /**
     * Filter the command data.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Incident\AddComponentCommand $command
     *
     * @return array
     */
    protected function filter(AddComponentCommand $command)
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
