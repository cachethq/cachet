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
 * This is the upgrade path runner class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class UpgradePathRunner
{
    /**
     * Fetch all of the upgrade paths.
     *
     * @return array
     */
    public function getUpgradePaths()
    {
        $paths = [];

        foreach (glob(app_path('Upgrades/Paths').'/*.php') as $version) {
            $upgradePath = app()->make('CachetHQ\\Cachet\\Upgrades\\Paths\\'.basename($version, '.php'));

            if ($this->canUpgradeTo($upgradePath)) {
                $paths[] = $upgradePath;
            }
        }

        return $paths;
    }

    /**
     * Decide if we can upgrade to the given version?
     *
     * @param \CachetHQ\Cachet\Upgades\UpgradePathInterface $version
     *
     * @return bool
     */
    protected function canUpgradeTo(UpgradePathInterface $path)
    {
        return version_compare(CACHET_VERSION, $path->getVersion(), '>');
    }
}
