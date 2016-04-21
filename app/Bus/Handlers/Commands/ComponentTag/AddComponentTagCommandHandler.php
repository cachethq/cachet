<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Commands\ComponentTag;

use CachetHQ\Cachet\Bus\Commands\ComponentTag\AddComponentTagCommand;
use CachetHQ\Cachet\Models\ComponentTag;

/**
 * This is the add component tag command handler.
 *
 * @author James Brooks <james@alt-three.com>
 */
class AddComponentTagCommandHandler
{
    /**
     * Handle the add component tag command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\ComponentTag\AddComponentTagCommand $command
     *
     * @return \CachetHQ\Cachet\Models\ComponentTag
     */
    public function handle(AddComponentTagCommand $command)
    {
        $tag = ComponentTag::create([
            'component_id' => $command->component->id,
            'tag_id'       => $command->tag->id,
        ]);

        return $tag;
    }
}
