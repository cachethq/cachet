<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Jobs;

use AltThree\TestBench\ExistenceTrait;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * This is the job existence test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class JobExistenceTest extends TestCase
{
    use ExistenceTrait;

    protected function getSourcePath()
    {
        return realpath(__DIR__.'/../../../app/Bus/Jobs');
    }
}
