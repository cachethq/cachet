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

use AltThree\TestBench\ValidationTrait;
use App\Models\IncidentComponent;
use Tests\AbstractTestCase;

/**
 * This is the incident component model test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class IncidentComponentTest extends AbstractTestCase
{
    use ValidationTrait;

    public function testValidation()
    {
        $this->checkRules(new IncidentComponent());
    }
}
