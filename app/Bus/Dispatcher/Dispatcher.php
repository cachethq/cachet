<?php

declare(strict_types=1);

/*
 * This file is part of Alt Three Bus. 
 *
 * (c) Alt Three Services Limited
 * (c) Taylor Otwell
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Dispatcher;

use Illuminate\Bus\Dispatcher as IlluminateDispatcher;

/**
 * This is the dispatcher class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 * @author Taylor Otwell <taylorotwell@gmail.com>
 */
class Dispatcher extends IlluminateDispatcher
{
    /**
     * The fallback mapping callback.
     *
     * @var callable|null
     */
    protected $mapper;

    /**
     * Determine if the given command has a handler.
     *
     * @param mixed $command
     *
     * @return bool
     */
    public function hasCommandHandler($command)
    {
        $class = get_class($command);

        if (isset($this->handlers[$class])) {
            return true;
        }

        $callback = $this->mapper;

        if ($callback === null || method_exists($command, 'handle') || (method_exists($this, 'dispatchSync') && method_exists($command, '__invoke'))) {
            return false;
        }

        $this->handlers[$class] = $callback($command);

        return true;
    }

    /**
     * Register a fallback mapper callback.
     *
     * @param callable|null $mapper
     *
     * @return void
     */
    public function mapUsing(callable $mapper = null)
    {
        $this->mapper = $mapper;
    }

    /**
     * Map the command to a handler within a given root namespace.
     *
     * @param object $command
     * @param string $commandNamespace
     * @param string $handlerNamespace
     *
     * @return string
     */
    public static function simpleMapping($command, string $commandNamespace, string $handlerNamespace)
    {
        $command = str_replace($commandNamespace, '', get_class($command));

        return $handlerNamespace . '\\' . trim($command, '\\') . 'Handler';
    }
}
