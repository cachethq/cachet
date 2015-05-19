<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joseph.cohen@dinkbit.com>
 * (c) Graham Campbell <graham@mineuk.com>
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
     */
    public function __construct(Setting $model)
    {
        $this->model = $model;
    }

    /**
     * Returns a setting from the database.
     *
     * @param string $name
     * @param bool   $checkEnv
     *
     * @return string|null
     */
    public function get($name, $checkEnv = true)
    {
        // if we've not loaded the settings, load them now
        if (!$this->settings) {
            $this->settings = $this->model->all()->lists('value', 'name');
        }

        // if the setting exists, return it
        if (isset($this->settings[$name])) {
            return $this->settings[$name];
        }

        // fallback to getenv if allowed to
        if ($checkEnv) {
            return $this->settings[$name] = getenv(strtoupper($name));
        }
    }

    /**
     * Creates or updates a setting value.
     *
     * @param string $name
     * @param string $value
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
