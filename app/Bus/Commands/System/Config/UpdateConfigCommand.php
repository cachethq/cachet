<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Commands\System\Config;

/**
 * This is the update config command class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class UpdateConfigCommand
{
    /**
     * This is the config key/values array.
     *
     * @var array
     */
    public $values;

    /**
     * Create a new update config command instance.
     *
     * @param array $values
     *
     * @return void
     */
    public function __construct($values)
    {
        $this->values = $values;
    }
}
