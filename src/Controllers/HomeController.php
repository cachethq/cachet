<?php

namespace CachetHQ\Cachet\Controllers

use Component;
use Illuminate\Support\Facades\View;
use Illuminate\Routing\Controller;
use Setting;

class HomeController extends Controller
{
    /**
     * Returns the rendered Blade templates.
     *
     * @return \Illuminate\View\View
     */
    public function showIndex()
    {
        $components = Component::orderBy('order')->orderBy('created_at')->get();

        return View::make('index', [
            'components' => $components,
            'pageTitle'  => Setting::get('app_name')
        ]);
    }
}
