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
use CachetHQ\Cachet\Models\Tag;

class DeleteTagCommandHandler
{
    /**
     * Handle the delete tag command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Tag\DeleteTagCommand $command
     *
     * @return void
     */
    public function handle(DeleteTagCommand $command)
    {
        $command->tag->delete();
    }
}
