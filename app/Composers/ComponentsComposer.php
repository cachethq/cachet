<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Composers;

use Illuminate\Support\Facades\Log;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\Tag;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

/**
 * This is the components composer.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class ComponentsComposer
{
    /**
     * The user session object.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $guard;


    private $request;

    private $groupStatusCalculator;

    /**
     * Creates a new components composer instance.
     *
     * @param \Illuminate\Contracts\Auth\Guard $guard
     *
     * @return void
     */
    public function __construct(Guard $guard, Request $request)
    {
        $this->guard = $guard;
        $this->request = $request;
    }

    /**
     * Bind data to the view.
     *
     * @param \Illuminate\Contracts\View\View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $start_time = microtime(true);
        
        $selectedValue = $this->request->input('tag');
        Session::put('selectedValue', $selectedValue);
        $componentGroups = $this->getVisibleGroupedComponents();
        $ungroupedComponents = Component::ungrouped()->orderBy('status', 'desc')->get();
        $view->with(compact('componentGroups', 'ungroupedComponents' ));
        
        $end_time = microtime(true);
        $execution_time = ($end_time - $start_time) * 1000;
        
        Log::info('Temps de réponse de la vue : ' . $execution_time . ' ms');
    }

    /**
     * Get visible grouped components.
     *
     * @return \Illuminate\Support\Collection
     */
    protected function getVisibleGroupedComponents()
    {
        $componentGroupsBuilder = ComponentGroup::query();
        if (!$this->guard->check()) {
            $componentGroupsBuilder->visible();
        }

        $usedComponentGroups = Component::grouped()->pluck('group_id');

        return $componentGroupsBuilder->used($usedComponentGroups)->get();
    }


}
