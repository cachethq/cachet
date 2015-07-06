<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Exceptions;

use GrahamCampbell\Exceptions\ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpNotFoundException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var string[]
     */
    protected $dontReport = [
        HttpNotFoundException::class,
    ];
}
