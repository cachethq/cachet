<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Traits;

use CachetHQ\Cachet\Bus\Handlers\Traits\StoresMeta;
use CachetHQ\Cachet\Models\Meta;
use CachetHQ\Tests\Cachet\AbstractTestCase;
use Mockery;
use Mockery\MockInterface;

class StoresMetaTest extends AbstractTestCase
{
    /**
     * @var Meta|MockInterface
     */
    protected $metaModel;

    /**
     * Set up the testcase by mocking the Meta::class.
     */
    public function setUp()
    {
        parent::setUp();

        if (!class_exists('Mockery')) {
            $this->markTestSkipped('This test requires Mockery');
        }

        $this->metaModel = Mockery::mock(Meta::class)->makePartial();
        $this->app->instance(Meta::class, $this->metaModel);
    }

    /**
     * Our Mockery expectations should count as assertions to prevent warnings from PHPUnit.
     */
    public function tearDown()
    {
        $this->addToAssertionCount(Mockery::getContainer()->mockery_getExpectationCount());
        parent::tearDown();
    }

    /**
     * Each array value passed to the MetaValues should result in a new model instance.
     */
    public function testStoresMetaWithSimpleMultipleArrays()
    {
        $mock = $this->getMockForTrait(StoresMeta::class);
        $metaData = [
            'somekey1' => 'somevalue',
            'somekey2' => 'somevalue',
            'somekey3' => 'somevalue',
        ];

        $this->metaModel->shouldReceive('firstOrNew')->times(3)->andReturn($this->metaModel);
        $this->metaModel->shouldReceive('save')->times(3);
        $this->metaModel->shouldReceive('setAttribute')->times(3)->andReturnUsing(function ($key, $value) {
            $this->assertEquals('value', $key);
            $this->assertEquals('somevalue', $value);

            return $this->metaModel;
        });

        $mock->storeMeta($metaData, 'some_class', 1, $this->metaModel);
    }

    /**
     * It will pass nested arrays to the value property of the Meta model.
     */
    public function testStoresNestedArraysAsSingleValue()
    {
        $mock = $this->getMockForTrait(StoresMeta::class);
        $metaData = ['somekey1' => ['subkey' => ['second' => 'key']]];

        $this->metaModel->shouldReceive('firstOrNew')->once()->andReturn($this->metaModel);
        $this->metaModel->shouldReceive('save')->once();
        $this->metaModel->shouldReceive('setAttribute')->once()->andReturnUsing(function ($key, $value) {
            $this->assertEquals('value', $key);
            $this->assertEquals(['subkey' => ['second' => 'key']], $value);

            return $this->metaModel;
        });

        $mock->storeMeta($metaData, 'some_class', 1, $this->metaModel);
    }

    /**
     * If a value is empty or null it will be removed.
     */
    public function testEmptyValuesWillBeDeleted()
    {
        $mock = $this->getMockForTrait(StoresMeta::class);
        $metaData = ['somekey1' => ''];

        $this->metaModel->exists = true;
        $this->metaModel->shouldReceive('firstOrNew')->once()->andReturn($this->metaModel);
        $this->metaModel->shouldReceive('delete')->once();
        $this->metaModel->shouldReceive('setAttribute')->never();
        $this->metaModel->shouldReceive('save')->never();

        $mock->storeMeta($metaData, 'some_class', 1, $this->metaModel);
    }

    /**
     * If a value is empty or null in a nested array it will be removed.
     */
    public function testEmptyNestedArrayKeysAreRemoved()
    {
        $mock = $this->getMockForTrait(StoresMeta::class);
        $metaData = ['somekey1' => ['keyWithValue' => 'value123', 'keyWithoutValue' => null]];

        $this->metaModel->exists = true;
        $this->metaModel->shouldReceive('firstOrNew')->once()->andReturn($this->metaModel);
        $this->metaModel->shouldReceive('setAttribute')->once()->andReturnUsing(function ($key, $value) {
            $this->assertEquals('value', $key);
            $this->assertEquals(['keyWithValue' => 'value123'], $value);

            return $this->metaModel;
        });
        $this->metaModel->shouldReceive('save')->once();
        $this->metaModel->shouldReceive('delete')->never();

        $mock->storeMeta($metaData, 'some_class', 1, $this->metaModel);
    }
}
