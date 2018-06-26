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

use AltThree\TestBench\ExistenceTrait;
use PHPUnit\Framework\TestCase;

/**
 * This is the model existence test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 */
class ModelExistenceTest extends TestCase
{
    use ExistenceTrait;

    protected function getSourcePath()
    {
        return realpath(__DIR__.'/../../app/Models');
    }
}
