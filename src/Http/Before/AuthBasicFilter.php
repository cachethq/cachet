<?php

namespace CachetHQ\Cachet\Http\Before;

use Illuminate\Support\Facades\Auth;

class AuthBasicFilter
{
    public function filter()
    {
        return Auth::basic();
    }
}
