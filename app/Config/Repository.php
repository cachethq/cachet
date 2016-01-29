<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Config;

use CachetHQ\Cachet\Models\Setting;

class Repository
{
    /**
     * The eloquent model instance.
     *
     * @var \CachetHQ\Cachet\Models\Setting
     */
    protected $model;

    /**
     * Is the config state stale?
     *
     * @var bool
     */
    protected $stale = false;

    /**
     * Create a new settings service instance.
     *
     * @param \CachetHQ\Cachet\Models\Setting $model
     *
     * @return void
     */
    public function __construct(Setting $model)
    {
        $this->model = $model;
    }

    /**
     * Returns a setting from the database.
     *
     * @return array
     */
    public function all()
    {
        return $this->model->all(['name', 'value'])->pluck('value', 'name')->toArray();
    }

    /**
     * Updates a setting value.
     *
     * @param string      $name
     * @param string|null $value
     *
     * @return void
     */
    public function set($name, $value)
    {
        $this->stale = true;

        if ($value === null) {
            $this->model->where('name', $name)->delete();
        } else {
            $this->model->updateOrCreate(compact('name'), compact('value'));
        }
    }

    /**
     * Is the config state stale?
     *
     * @return bool
     */
    public function stale()
    {
        return $this->stale;
    }
}
