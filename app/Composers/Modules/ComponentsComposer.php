<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Composers\Modules;

use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;

/**
 * This is the status page composer.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class ComponentsComposer
{
    /**
     * Index page view composer.
     *
     * @param \Illuminate\Contracts\View\View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        // Get the component group if it's defined.
        $viewdata = $view->getData();
        $componentGroup = $viewdata['componentGroup'];

        // Component & Component Group lists.
        $usedComponentGroups = Component::enabled()->where('group_id', '>', 0)->groupBy('group_id')->pluck('group_id');
        $allComponentGroups = ComponentGroup::whereIn('id', $usedComponentGroups)->orderBy('order')->get();
        if ($componentGroup->exists) {
            $componentGroups = ComponentGroup::where('id', $componentGroup->id)->orderBy('order')->get();

            $view->withAllComponentGroups($allComponentGroups)
                 ->withComponentGroups($componentGroups)
                 ->withUngroupedComponents(new Collection())
                 ->withComponentGroupSelected($componentGroup);

        } else {
            $ungroupedComponents = Component::enabled()->where('group_id', 0)->orderBy('order')->orderBy('created_at')->get();

            $view->withAllComponentGroups($allComponentGroups)
                 ->withComponentGroups($allComponentGroups)
                 ->withUngroupedComponents($ungroupedComponents)
                 ->withComponentGroupSelected(null);
        }
    }
}
