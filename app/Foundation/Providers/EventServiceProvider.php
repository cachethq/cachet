<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Foundation\Providers;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Illuminate\Container\Container;
use Illuminate\Filesystem\ClassFinder;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use ReflectionClass;

/**
 * This is the event service provider class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 * @author Joe Cohen <joe@alt-three.com>
 */
class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [];

    /**
     * The namespace to find events within.
     *
     * @var string
     */
    protected $namespace = 'CachetHQ\\Cachet\\Bus\\Events';

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function __construct()
    {
        // Register the HandlerAnnotation class.
        AnnotationRegistry::registerFile(app_path().'/Annotations/HandlerAnnotation.php');

        $reader = new AnnotationReader();

        foreach ($this->getClassesFromNamespace($this->namespace) as $className) {
            try {
                $class = new ReflectionClass($className);
                if ($class->isInstantiable()) {
                    $handlers = $reader->getClassAnnotations($class);
                    $this->listen[$className] = array_map(function ($annotation) {
                        return $annotation->handler;
                    }, $handlers);
                }
            } catch (Exception $e) {
                //
            }
        }
    }

    /**
     * Get the expected path from a namespace.
     *
     * @param string $namespace
     *
     * @return string
     */
    protected function getPathFromNamespace($namespace)
    {
        $appNamespace = Container::getInstance()->getNamespace();

        if (substr($namespace, 0, strlen($appNamespace)) == $appNamespace) {
            $namespace = substr($namespace, strlen($appNamespace));
        }

        $path = str_replace('\\', DIRECTORY_SEPARATOR, trim($namespace, ' \\'));

        return app_path().DIRECTORY_SEPARATOR.$path;
    }

    /**
     * Find all classes within a namespace.
     *
     * @param string $namespace
     *
     * @return array
     */
    protected function getClassesFromNamespace($namespace)
    {
        $directory = $this->getPathFromNamespace($namespace);

        return app(ClassFinder::class)->findClasses($directory);
    }
}
