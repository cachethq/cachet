<?php

namespace CachetHQ\Tests\Cachet;


use GrahamCampbell\TestBenchCore\LaravelTrait;

abstract class ServiceProviderTestCase extends AbstractTestCase
{
    use CreatesApplication;
    use LaravelTrait;

    /**
     * Indicates whether the default seeder should run before each test.
     *
     * @var bool
     */
    protected $seed = true;

}
