<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet;

use AltThree\TestBench\AnalysisTrait;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * This is the analysis test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class AnalysisTest extends TestCase
{
    use AnalysisTrait;

    protected function getPaths()
    {
        return [
            realpath(__DIR__.'/../app'),
            realpath(__DIR__.'/../bootstrap'),
            realpath(__DIR__.'/../config'),
            realpath(__DIR__.'/../database'),
            realpath(__DIR__),
        ];
    }
}
