<?php

class HomeController extends Controller {
    /**
     * Returns the rendered Blade templates.
     * @return \Illuminate\View\View
     */
    public function showIndex() {
        return View::make('index', ['components' => Component::all()]);
    }
}
