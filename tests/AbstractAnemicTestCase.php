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

use ReflectionClass;

/**
 * This is the abstract anemic test case class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
abstract class AbstractAnemicTestCase extends AbstractTestCase
{
    public function testClassIsFinal()
    {
        $rc = new ReflectionClass($this->getObjectAndParams()['object']);

        $this->assertTrue($rc->isFinal());
    }

    public function testPropertiesMatchTheConstructor()
    {
        $rc = new ReflectionClass($this->getObjectAndParams()['object']);

        $properties = array_map(function ($property) {
            return $property->getName();
        }, $rc->getProperties());

        $params = array_map(function ($param) {
            return $param->getName();
        }, $rc->getMethod('__construct')->getParameters());

        if ($this->objectHasRules()) {
            $params[] = 'rules';
        }

        $this->assertSame($properties, $params);
    }

    public function testPropertiesAreCorrectlyDefined()
    {
        $rc = new ReflectionClass($this->getObjectAndParams()['object']);

        foreach ($rc->getProperties() as $property) {
            $this->assertTrue($property->isPublic());
            $this->assertFalse($property->isStatic());
        }
    }

    public function testPropertyAccessBehavesCorrectly()
    {
        extract($this->getObjectAndParams());

        foreach ($params as $key => $value) {
            $this->assertSame($value, $object->{$key});
        }
    }
}
