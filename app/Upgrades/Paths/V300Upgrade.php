<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Upgrades\Paths;

use CachetHQ\Cachet\Upgrades\AbstractUpgrade;

/**
 * This is the v3.0.0 upgrade class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class V300Upgrade extends AbstractUpgrade
{
    /**
     * The version number of the upgrade.
     *
     * @var string
     */
    protected $version = 'v3.0.0';

    /**
     * Run the upgrade path.
     *
     * @return bool
     */
    public function upgrade()
    {
        echo "This would upgrade us to ".$this->version."\n";

        return true;
    }
}
