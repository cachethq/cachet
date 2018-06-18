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

use CachetHQ\Cachet\Bus\Commands\Tag\CreateTagCommand;
use CachetHQ\Cachet\Models\Tag;
use Illuminate\Support\Str;

/**
 * This is the create tag command handler class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class CreateTagCommandHandler
{
    /**
     * Handle the command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Tag\CreateTagCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Tag
     */
    public function handle(CreateTagCommand $command)
    {
        return Tag::firstOrCreate([
            'name' => $command->name,
            'slug' => $command->slug ? $command->slug : Str::slug($command->name),
        ]);
    }
}
