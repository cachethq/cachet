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

/**
 * This is the module manager class.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class Manager
{
    /**
     * Groups the modules.
     *
     * @param array $modules
     * @param array $groups
     *
     * @return array
     */
    public function groupModules(array $modules, array $groups = [])
    {
        $grouped = [];
        $length = count($modules);
        foreach ($modules as $order => $module) {
            if (!is_array($module) || empty($module['group'])) {
                $order = array_get($module, 'order', PHP_INT_MAX - $length + $order);

                $grouped[] = [$module, 'order' => $order];

                continue;
            }

            $group = $module['group'];
            if (empty($grouped[$group])) {
                $grouped[$group] = [$module];

                continue;
            }

            $grouped[$group][] = $module;
        }

        foreach ($groups as $group => $order) {
            if (empty($grouped[$group])) {
                continue;
            }

            $grouped[$group]['order'] = $order;
        }

        return $grouped;
    }

    /**
     * Orders the modules.
     *
     * @param array $modules
     *
     * @return array
     */
    public function orderModules($modules)
    {
        $modules = array_numeric_sort($modules);

        foreach ($modules as $group => $subModules) {
            $modules[$group] = array_numeric_sort($subModules);
        }

        return $modules;
    }
}
