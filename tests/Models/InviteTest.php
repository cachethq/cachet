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

use App\Models\Invite;
use Tests\AbstractTestCase;

/**
 * This is the invite model test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class InviteTest extends AbstractTestCase
{
    public function testValidation()
    {
        $this->assertClassNotHasAttribute('rules', Invite::class);
    }
}
