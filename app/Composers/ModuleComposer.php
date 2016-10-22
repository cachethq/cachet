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

use CachetHQ\Cachet\Services\Modules\Manager;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\View;

/**
 * This is the module composer.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class ModuleComposer
{
    /**
     * The application instance.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected $app;

    /**
     * The modules manager instance.
     *
     * @var \CachetHQ\Cachet\Services\Modules\Manager
     */
    protected $manager;

    /**
     * Create a new modules composer.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     * @param \CachetHQ\Cachet\Services\Modules\Manager    $manager
     *
     * @return void
     */
    public function __construct(Application $app, Manager $manager)
    {
        $this->app = $app;
        $this->manager = $manager;
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
        $key = $view->getName();

        $view->with('view', $key);

        $modules = "view.modules: {$key}";
        $groups = "view.groups: {$key}";

        $modules = $this->app->bound($modules) ? $this->app[$modules] : [];
        $groups = $this->app->bound($groups) ? $this->app[$groups] : [];

        $modules = $this->manager->groupModules($modules, $groups);

        $view->withModules($modules);
    }
}
