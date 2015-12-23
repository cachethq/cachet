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
     * Cache of the settings.
     *
     * @var array|null
     */
    protected $settings;

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
     * @param string      $name
     * @param string|null $default
     *
     * @return string|null
     */
    public function get($name, $default = null)
    {
        if (!$this->settings) {
            $this->settings = $this->model->all()->lists('value', 'name');
        }

        if (!empty($this->settings[$name])) {
            return $this->settings[$name];
        }

        return $default;
    }

    /**
     * Creates or updates a setting value.
     *
     * @param string      $name
     * @param string|null $value
     *
     * @return void
     */
    public function set($name, $value)
    {
        if ($value === null) {
            $this->model->where('name', $name)->delete();

            if ($this->settings && isset($this->settings[$name])) {
                unset($this->settings[$name]);
            }
        } else {
            $this->model->updateOrCreate(compact('name'), compact('value'));

            if ($this->settings) {
                $this->settings[$name] = $value;
            }
        }
    }
}
