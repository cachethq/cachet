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

use CachetHQ\Cachet\Exceptions\ExceptionInterface;
use Exception;
use GrahamCampbell\Exceptions\Transformers\TransformerInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * This is the exception transformer class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class ExceptionTransformer implements TransformerInterface
{
    /**
     * Transform the provided exception.
     *
     * @param \Exception $exception
     *
     * @return \Exception
     */
    public function transform(Exception $exception)
    {
        if ($exception instanceof ExceptionInterface) {
            $exception = new BadRequestHttpException($exception->getMessage());
        } elseif ($exception instanceof ModelNotFoundException) {
            $exception = new NotFoundHttpException('Resource not found.');
        }

        return $exception;
    }
}
