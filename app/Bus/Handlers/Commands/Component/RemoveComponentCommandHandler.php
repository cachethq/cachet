<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Bus\Handlers\Commands\Component;

use App\Bus\Commands\Component\RemoveComponentCommand;
use App\Bus\Events\Component\ComponentWasRemovedEvent;
use Illuminate\Contracts\Auth\Guard;

class RemoveComponentCommandHandler
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
     * Handle the remove component command.
     *
     * @param \App\Bus\Commands\Component\RemoveComponentCommand $command
     *
     * @return void
     */
    public function handle(RemoveComponentCommand $command)
    {
        $component = $command->component;

        event(new ComponentWasRemovedEvent($this->auth->user(), $component));

        $component->delete();
    }
}
