<?php

namespace CachetHQ\Tests\Cachet;

use CachetHQ\Tests\Cachet\CreatesApplicationTrait;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplicationTrait;
}