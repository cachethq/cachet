<?php

namespace App\Exceptions\Identifier;

use GrahamCampbell\Exceptions\Identifier\IdentifierInterface;
use Throwable;

class CustomIdentifier implements IdentifierInterface
{
    /**
     * Identify the exception.
     *
     * @param \Throwable $exception
     *
     * @return string|null
     */
    public function identify(Throwable $exception)

    {
        // Custom logic to identify the exception
        return 'custom-identifier';
    }
}
