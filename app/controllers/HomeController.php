<?php

class HomeController extends Controller
{
    /**
     * @var Component $component
     */
    protected $component;

    public function __construct(Component $component)
    {
        $this->component = $component;
    }

    /**
     * Returns the rendered Blade templates.
     * @return \Illuminate\View\View
     */
    public function showIndex()
    {
        return View::make('index', ['components' => $this->component->all()]);
    }
}
