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

use App\Bus\Commands\ComponentGroup\CreateComponentGroupCommand;
use App\Bus\Events\ComponentGroup\ComponentGroupWasCreatedEvent;
use App\Models\ComponentGroup;
use Illuminate\Contracts\Auth\Guard;

class CreateComponentGroupCommandHandler
{
    /**
     * The authentication guard instance.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * Create a new create component group command handler instance.
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
     * Handle the create component group command.
     *
     * @param \App\Bus\Commands\ComponentGroup\CreateComponentGroupCommand $command
     *
     * @return \App\Models\ComponentGroup
     */
    public function handle(CreateComponentGroupCommand $command)
    {
        $group = ComponentGroup::create([
            'name'      => $command->name,
            'order'     => $command->order,
            'collapsed' => $command->collapsed,
            'visible'   => $command->visible,
        ]);

        event(new ComponentGroupWasCreatedEvent($this->auth->user(), $group));

        return $group;
    }
}
