<?php

namespace GrahamCampbell\Exceptions\Identifier;

use Throwable;

interface IdentifierInterface
{
    /**
     * Identify the exception.
     *
     * @param Throwable $exception
     *
     * @return string|null
     */
    public function identify(Throwable $exception);
}
