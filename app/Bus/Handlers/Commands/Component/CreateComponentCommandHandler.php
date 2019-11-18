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

use App\Bus\Commands\Component\CreateComponentCommand;
use App\Bus\Events\Component\ComponentWasCreatedEvent;
use App\Models\Component;
use Illuminate\Contracts\Auth\Guard;

/**
 * This is the add component command handler class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class CreateComponentCommandHandler
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
     * @param \App\Bus\Commands\Component\CreateComponentCommand $command
     *
     * @return \App\Models\Component
     */
    public function handle(CreateComponentCommand $command)
    {
        $component = Component::create($this->filter($command));

        // Sync the tags into the component.
        if ($command->tags) {
            collect(preg_split('/ ?, ?/', $command->tags))->filter()->map(function ($tag) {
                return trim($tag);
            })->pipe(function ($tags) use ($component) {
                $component->attachTags($tags);
            });
        }

        event(new ComponentWasCreatedEvent($this->auth->user(), $component));

        return $component;
    }

    /**
     * Filter the command data.
     *
     * @param \App\Bus\Commands\Component\CreateComponentCommand $command
     *
     * @return array
     */
    protected function filter(CreateComponentCommand $command)
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
