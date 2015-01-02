<?php

namespace CachetHQ\Cachet\Http\Before;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class GuestFilter
{
    public function filter()
    {
        if (Auth::check()) {
            return Redirect::to('/');
        }
    }
}
