<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Services\Plugins\Definition;

/**
 * This is the plugin dependency class.
 *
 * @author Connor S. Parks <contact@connorvg.tv>
 */
class Dependency
{
    /**
     * The dependency's vendor.
     *
     * @var string
     */
    protected $vendor;

    /**
     * The dependency's name.
     *
     * @var string
     */
    protected $name;

    /**
     * The dependancy's constraint.
     *
     * @var string
     */
    protected $constraint;

    /**
     * The dependancy's version.
     *
     * @var \CachetHQ\Cachet\Services\Plugins\Definition\Version
     */
    protected $version;

    /**
     * Create a new dependency object.
     *
     * @param string                                               $vendor
     * @param string                                               $name
     * @param string                                               $constraint
     * @param \CachetHQ\Cachet\Services\Plugins\Definition\Version $version
     */
    public function __construct($vendor, $name, $constraint, Version $version)
    {
        $this->vendor = $vendor;
        $this->name = $name;
        $this->constraint = $constraint;
        $this->version = $version;
    }

    /**
     * Get the dependency's vendor.
     *
     * @return string
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Get the dependency's name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the dependency's constraint.
     *
     * @return string
     */
    public function getConstraint()
    {
        return $this->constraint;
    }

    /**
     * Get the dependency's version.
     *
     * @return \CachetHQ\Cachet\Services\Plugins\Definition\Version $version
     */
    public function getVersion()
    {
        return $this->version;
    }
}
