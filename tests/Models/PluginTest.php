<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Models;

use CachetHQ\Cachet\Models\Plugin;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the plugin model test class.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class PluginTest extends AbstractTestCase
{
    public function testValidation()
    {
        $this->assertFalse(property_exists(new Plugin(), 'rules'));
    }
}
