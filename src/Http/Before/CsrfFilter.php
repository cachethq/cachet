<?php

namespace CachetHQ\Cachet\Http\Before;

use Illuminate\Session\TokenMismatchException;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class CsrfFilter
{
    /**
     * Run the csrf filter.
     *
     * We're protecting Cachet against cross-site request forgery attacks. If
     * our csrf token in the session does not match the one given sent to us in
     * this request, then we'll bail.
     *
     * @throws \Illuminate\Session\TokenMismatchException
     *
     * @return void
     */
    public function filter()
    {
        if (Session::token() !== Input::get('_token')) {
            throw new TokenMismatchException();
        }
    }
}
