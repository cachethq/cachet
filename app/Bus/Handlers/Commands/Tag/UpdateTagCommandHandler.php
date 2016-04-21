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
use CachetHQ\Cachet\Models\Tag;

class UpdateTagCommandHandler
{
    /**
     * Handle the update tag command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Tag\UpdateTagCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Tag
     */
    public function handle(UpdateTagCommand $command)
    {
        $command->tag->update($this->filter($command));

        return $command->tag;
    }

    /**
     * Filter the command data.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Tag\UpdateTagCommand $command
     *
     * @return array
     */
    protected function filter(UpdateTagCommand $command)
    {
        $params = [
            'name' => $command->name,
            'slug' => $command->slug,
        ];

        return array_filter($params, function ($val) {
            return $val !== null;
        });
    }
}
