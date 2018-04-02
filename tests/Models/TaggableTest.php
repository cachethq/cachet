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

use AltThree\TestBench\ValidationTrait;
use CachetHQ\Cachet\Models\Taggable;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the taggable model test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class TaggableTest extends AbstractTestCase
{
    use ValidationTrait;

    public function testValidation()
    {
        $this->checkRules(new Taggable());
    }
}
