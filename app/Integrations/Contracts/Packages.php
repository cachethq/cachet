<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Integrations\Contracts;

/**
 * This is the packages interface.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
interface Packages
{
    /**
     * Finds a specific package.
     *
     * @param string $vendor
     * @param string $package
     * @param string $version
     *
     * @return array
     *
     * @throws \CachetHQ\Cachet\Integrations\Exceptions\Packages\IncorrectPackageTypeException
     * @throws \CachetHQ\Cachet\Integrations\Exceptions\Packages\PackageNotFoundException
     * @throws \CachetHQ\Cachet\Integrations\Exceptions\Packages\PackageVersionUnsatisfiedException
     */
    public function find($vendor, $package, $version);

    /**
     * Downloads a package to a folder.
     *
     * @param  array  $package
     *
     * @return void
     *
     * @throws \CachetHQ\Cachet\Integrations\Exceptions\Packages\PackageDownloadErrorException
     */
    public function download(array $package);
}
