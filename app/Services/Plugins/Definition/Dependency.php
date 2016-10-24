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
     * Create a new dependency object.
     *
     * @param string $vendor
     * @param string $name
     * @param string $constraint
     */
    public function __construct($vendor, $name, $constraint)
    {
        $this->vendor = $vendor;
        $this->name = $name;
        $this->constraint = $constraint;
    }
}
