<?php

class HomeController extends Controller
{
    /**
     * The component instance.
     *
     * @var \Component
     */
    protected $component;

    /**
     * Create a new home controller instance.
     *
     * @param \Component $component
     *
     * @return void
     */
    public function __construct(Component $component)
    {
        $this->component = $component;
    }

    /**
     * Returns the rendered Blade templates.
     *
     * @return \Illuminate\View\View
     */
    public function showIndex()
    {
        return View::make('index', [
            'components' => $this->component->all(),
            'pageTitle'  => Setting::get('app_name')
        ]);
    }
}
