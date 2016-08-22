<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Foundation\Providers;

use CachetHQ\Cachet\Services\Modules\Renderer as ModulesRenderer;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * The module definitions.
     *
     * @var array
     */
    protected $modules = [
        'index' => [
            ['group' => 'messages', 'partial' => 'partials.modules.messages'],
            ['group' => 'status', 'partial' => 'partials.modules.status'],
            ['group' => 'components', 'partial' => 'partials.modules.components'],
            ['group' => 'metrics', 'partial' => 'partials.modules.metrics'],
            ['group' => 'scheduled', 'partial' => 'partials.modules.scheduled'],
            ['group' => 'timeline', 'partial' => 'partials.modules.timeline'],
        ],
    ];

    /**
     * The group definitions.
     *
     * @var array
     */
    protected $groups = [
        'index' => [
            'messages'   => 10000,
            'status'     => 20000,
            'components' => 30000,
            'metrics'    => 40000,
            'scheduled'  => 50000,
            'timeline'   => 60000,
        ],
    ];

    /**
     * Boot the service provider.
     *
     * @param \Illuminate\View\Compilers\BladeCompiler $blade
     */
    public function boot(BladeCompiler $blade)
    {
        $blade->directive('modules', function ($group = null) {
            return sprintf(
                '<?php echo $app->call(\'%s@%s\', [
                    \'factory\' => $__env,
                    \'data\'    => array_except(get_defined_vars(), array(\'__data\', \'__path\')),
                    \'modules\' => $modules,
                    \'group\'   => %s,
                ]); ?>',
                ModulesRenderer::class,
                'renderModules',
                $group === null ? 'null' : $group
            );
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->modules as $key => $modules) {
            $this->app->singleton("view.modules: {$key}", function () use ($modules) {
                return $modules;
            });
        }

        foreach ($this->groups as $key => $groups) {
            $this->app->singleton("view.groups: {$key}", function () use ($groups) {
                return $groups;
            });
        }
    }
}
