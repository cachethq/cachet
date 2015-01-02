<?php

namespace CachetHQ\Cachet\Http\Before;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class GuestFilter
{
    /**
     * Run the guest filter.
     *
     * We're checking if the current user is logged in to Cachet, and if
     * they're not, then we're redirecting them to the home page.
     *
     * @throws \Illuminate\Session\TokenMismatchException
     *
     * @return \Illuminate\Http\Response|null
     */
    public function filter()
    {
        if (Auth::check()) {
            return Redirect::to('/');
        }
    }
}
