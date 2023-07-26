<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Commands\ComponentGroup;

use CachetHQ\Cachet\Models\ComponentGroup;

final class RemoveComponentGroupCommand
{
    /**
     * The component group to remove.
     *
     * @var \CachetHQ\Cachet\Models\ComponentGroup
     */
    public $group;

    /**
     * Create a new remove component group command instance.
     *
     * @param \CachetHQ\Cachet\Models\ComponentGroup $group
     *
     * @return void
     */
    public function __construct(ComponentGroup $group)
    {
        $this->group = $group;
    }
}
