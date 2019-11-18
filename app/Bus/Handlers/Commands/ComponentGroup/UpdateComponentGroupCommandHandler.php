<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Bus\Handlers\Commands\ComponentGroup;

use App\Bus\Commands\ComponentGroup\UpdateComponentGroupCommand;
use App\Bus\Events\ComponentGroup\ComponentGroupWasUpdatedEvent;
use Illuminate\Contracts\Auth\Guard;

class UpdateComponentGroupCommandHandler
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
     * Handle the update component group command.
     *
     * @param \App\Bus\Commands\ComponentGroup\UpdateComponentGroupCommand $command
     *
     * @return \App\Models\ComponentGroup
     */
    public function handle(UpdateComponentGroupCommand $command)
    {
        $group = $command->group;
        $group->update($this->filter($command));

        event(new ComponentGroupWasUpdatedEvent($this->auth->user(), $group));

        return $group;
    }

    /**
     * Filter the command data.
     *
     * @param \App\Bus\Commands\ComponentGroup\UpdateComponentGroupCommand $command
     *
     * @return array
     */
    protected function filter(UpdateComponentGroupCommand $command)
    {
        $params = [
            'name'      => $command->name,
            'order'     => $command->order,
            'collapsed' => $command->collapsed,
            'visible'   => $command->visible,
        ];

        return array_filter($params, function ($val) {
            return $val !== null;
        });
    }
}
