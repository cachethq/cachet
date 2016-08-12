<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Commands\Plugin;

final class InstallPluginCommand
{
    /**
     * The plugin vendor.
     *
     * @var string
     */
    public $vendor;

    /**
     * The plugin package.
     *
     * @var string
     */
    public $package;

    /**
     * The plugin version.
     *
     * @var string
     */
    public $version;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'vendor'  => 'required|string',
        'package' => 'required|string',
        'version' => 'required|string',
    ];

    /**
     * Create a new install plugin command instance.
     *
     * @param string $vendor
     * @param string $package
     * @param string $version
     *
     * @return void
     */
    public function __construct($vendor, $package, $version)
    {
        $this->vendor = $vendor;
        $this->package = $package;
        $this->version = $version;
    }
}
