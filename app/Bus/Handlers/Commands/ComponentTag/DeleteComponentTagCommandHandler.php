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

use CachetHQ\Cachet\Bus\Commands\ComponentTag\DeleteComponentTagCommand;
use CachetHQ\Cachet\Bus\Exceptions\Tag\TagDoesNotExistOnComponentException;
use CachetHQ\Cachet\Models\ComponentTag;

/**
 * This is the delete component tag command handler.
 *
 * @author James Brooks <james@alt-three.com>
 */
class DeleteComponentTagCommandHandler
{
    /**
     * Handle the add component tag command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\ComponentTag\DeleteComponentTagCommand $command
     *
     * @return void
     */
    public function handle(DeleteComponentTagCommand $command)
    {
        // If the tag does not exist on the component, throw an exception.
        if (!($componentTag = ComponentTag::tagForComponent($command->tag->id, $command->component->id))) {
            throw new TagDoesNotExistOnComponentException('The given tag <'.$command->tag->id.'> does not exist on this component <'.$command->componnet->id.'>');
        }

        $componentTag->delete();
    }
}
