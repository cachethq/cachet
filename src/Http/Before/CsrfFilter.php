<?php

namespace CachetHQ\Cachet\Http\Before;

use Illuminate\Session\TokenMismatchException;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class CsrfFilter
{
    public function filter()
    {
        if (Session::token() !== Input::get('_token')) {
            throw new TokenMismatchException();
        }
    }
}
