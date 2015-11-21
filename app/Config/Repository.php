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
        // if we've not loaded the settings, load them now
        if (!$this->settings) {
            $this->settings = $this->model->all()->lists('value', 'name');
        }

        // if the setting exists and is not blank, return it
        if (!empty($this->settings[$name])) {
            return $this->settings[$name];
        }

        return $default;
    }

    /**
     * Creates or updates a setting value.
     *
     * @param string $name
     * @param string $value
     *
     * @return void
     */
    public function set($name, $value)
    {
        // save the change to the db
        $this->model->updateOrCreate(compact('name'), compact('value'));

        // if we've loaded the settings, persist this change
        if ($this->settings) {
            $this->settings[$name] = $value;
        }
    }
}
