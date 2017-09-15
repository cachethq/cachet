<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Commands\ComponentGroup;

use CachetHQ\Cachet\Bus\Commands\ComponentGroup\RemoveComponentGroupCommand;
use CachetHQ\Cachet\Bus\Events\ComponentGroup\ComponentGroupWasRemovedEvent;
use Illuminate\Contracts\Auth\Guard;

class RemoveComponentGroupCommandHandler
{
    /**
     * The authentication guard instance.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * Create a new remove component group command handler instance.
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
     * Handle the remove component group command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\ComponentGroup\RemoveComponentGroupCommand $command
     *
     * @return void
     */
    public function handle(RemoveComponentGroupCommand $command)
    {
        $group = $command->group;

        event(new ComponentGroupWasRemovedEvent($this->auth->user(), $group));

        // Remove the group id from all component.
        $group->components->map(function ($component) {
            $component->update(['group_id' => 0]);
        });

        $group->delete();
    }
}
