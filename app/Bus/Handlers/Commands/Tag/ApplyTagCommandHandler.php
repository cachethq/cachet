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

use CachetHQ\Cachet\Bus\Commands\Tag\ApplyTagCommand;
use CachetHQ\Cachet\Models\Taggable;

/**
 * This is the apply tag command handler class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ApplyTagCommandHandler
{
    /**
     * Handle the command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Tag\ApplyTagCommand $command
     *
     * @return void
     */
    public function handle(ApplyTagCommand $command)
    {
        Taggable::firstOrCreate([
            'tag_id'        => $command->tag->id,
            'taggable_id'   => $command->model->id,
            'taggable_type' => $command->model->getTable(),
        ]);
    }
}
