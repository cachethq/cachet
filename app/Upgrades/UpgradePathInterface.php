<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Upgrades;

/**
 * This is the upgrade path interface.
 *
 * @author James Brooks <james@alt-three.com>
 */
interface UpgradePathInterface
{
    /**
     * Run the upgrade path.
     *
     * @return bool
     */
    public function upgrade();
}
