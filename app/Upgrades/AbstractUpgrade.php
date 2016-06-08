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
 * This is the abstract upgrade class.
 *
 * @author James Brooks <james@alt-three.com>
 */
abstract class AbstractUpgrade implements UpgradePathInterface
{
    /**
     * The version number of the upgrade.
     *
     * @var string
     */
    protected $version = '';

    /**
     * Return the version string of the current upgrade path.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }
}
