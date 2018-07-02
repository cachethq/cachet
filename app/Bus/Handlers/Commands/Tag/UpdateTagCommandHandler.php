<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Commands\Tag;

use CachetHQ\Cachet\Bus\Commands\Tag\UpdateTagCommand;
use Illuminate\Support\Str;

/**
 * This is the create tag command handler class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class UpdateTagCommandHandler
{
    /**
     * Handle the command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Tag\UpdateTagCommand $command
     *
     * @return void
     */
    public function handle(UpdateTagCommand $command)
    {
        return $command->tag->update([
            'name' => $command->name,
            'slug' => $command->slug ? $command->slug : Str::slug($command->name),
        ]);
    }
}
