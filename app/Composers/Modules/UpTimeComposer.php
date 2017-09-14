<?php
/**
 * Created by PhpStorm.
 * User: taafedi5
 * Date: 13.09.17
 * Time: 13:54
 */

namespace CachetHQ\Cachet\Composers\Modules;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\View\View;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;

class UpTimeComposer
{
    /**
     * The illuminate config instance.
     *
     * @var \Illuminate\Contracts\Config\Repository
     */
    protected $config;

    /**
     * The user session object.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $guard;

    /**
     * Create a new metrics composer instance.
     *
     * @param \Illuminate\Contracts\Config\Repository $config
     * @param \Illuminate\Contracts\Auth\Guard        $guard
     *
     * @return void
     */
    public function __construct(Repository $config, Guard $guard)
    {
        $this->config = $config;
        $this->guard = $guard;
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
        $componentGroups = $this->getVisibleGroupedComponents();
        $view->withComponentGroups($componentGroups);
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

        return $componentGroupsBuilder->used($usedComponentGroups)
            ->get();
    }
}