<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Services\Modules;

use Illuminate\Contracts\View\Factory;

/**
 * This is the module renderer class.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class Renderer
{
    /**
     * Render the modules.
     *
     * @param \Illuminate\Contracts\View\Factory $factory
     * @param array                              $data
     * @param array                              $modules
     * @param string|null                        $group
     *
     * @return string
     */
    public function renderModules(Factory $factory, array $data, array $modules, $group = null)
    {
        if ($group !== null) {
            if (empty($modules[$group])) {
                return '';
            }

            return $this->renderModulesGroup($factory, $data, $modules[$group]);
        }

        return array_reduce(
            array_numeric_sort($modules),
            function ($reduce, $module) use ($factory, $data) {
                return $reduce.$this->renderModulesGroup($factory, $data, $module);
            },
            ''
        );
    }

    /**
     * Render a group of modules.
     *
     * @param \Illuminate\Contracts\View\Factory $factory
     * @param array                              $data
     * @param array                              $modules
     *
     * @return string
     */
    protected function renderModulesGroup(Factory $factory, array $data, array $modules)
    {
        return array_reduce(
            array_numeric_sort($modules),
            function ($reduce, $module) use ($factory, $data) {
                if (empty($module['partial'])) {
                    return $reduce;
                }

                return $reduce.$factory->make($module['partial'], $data)->render();
            },
            ''
        );
    }
}
