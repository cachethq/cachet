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

use CachetHQ\Cachet\Models\Setting;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the setting model test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class SettingTest extends AbstractTestCase
{
    public function testValidation()
    {
        $this->assertFalse(property_exists(new Setting(), 'rules'));
    }
}
