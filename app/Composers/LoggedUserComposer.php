<?php

namespace CachetHQ\Cachet\Composers;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoggedUserComposer
{
    /**
     * Bind data to the view.
     *
     * @param \Illuminate\View\View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('loggedUser', Auth::user());
    }
}
