<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Models;

use App\Models\Setting;
use Tests\AbstractTestCase;

/**
 * This is the setting model test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class SettingTest extends AbstractTestCase
{
    public function testValidation()
    {
        $this->assertClassNotHasAttribute('rules', Setting::class);
    }
}
