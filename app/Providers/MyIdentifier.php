<?php

namespace App\Exceptions;

use GrahamCampbell\Exceptions\Identifier\IdentifierInterface;
use Exception;
use Throwable;

class MyIdentifier implements IdentifierInterface
{
    public function identify(Throwable $exception)
    {
        // Ajoutez votre logique d'identification ici
        return get_class($exception);
    }
}
