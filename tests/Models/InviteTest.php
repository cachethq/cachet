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

use CachetHQ\Cachet\Models\Invite;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the invite model test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class InviteTest extends AbstractTestCase
{
    public function testValidation()
    {
        $this->assertFalse(property_exists(new Invite(), 'rules'));
    }
}
