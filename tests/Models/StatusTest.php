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

use CachetHQ\Cachet\Models\Status;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the status model test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class StatusTest extends AbstractTestCase
{
    public function testValidation()
    {
        $this->assertFalse(property_exists(new Status(), 'rules'));
    }
}
