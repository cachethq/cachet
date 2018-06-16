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

use CachetHQ\Cachet\Bus\Commands\Tag\DeleteTagCommand;

/**
 * This is the delete tag command handler class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class DeleteTagCommandHandler
{
    /**
     * Handle the command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Tag\DeleteTagCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Tag
     */
    public function handle(DeleteTagCommand $command)
    {
        $command->tag->delete();
    }
}
