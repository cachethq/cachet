<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Exceptions\Transformers;

use CachetHQ\Cachet\Bus\Exceptions\ExceptionInterface;
use Throwable;
use GrahamCampbell\Exceptions\Transformer\TransformerInterface;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 * This is the bus transformer class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class BusTransformer implements TransformerInterface
{
    /**
     * Transform the provided exception.
     *
     * @param \Throwable $exception
     *
     * @return \Throwable
     */
    public function transform(Throwable $exception)
    {
        if ($exception instanceof ExceptionInterface) {
            $exception = new BadRequestHttpException($exception->getMessage());
        }

        return $exception;
    }
}
