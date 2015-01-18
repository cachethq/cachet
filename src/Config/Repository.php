<?php

namespace CachetHQ\Cachet\Config;

use Illuminate\Database\Eloquent\Model;

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
     * @var null|array
     */
    protected $settings = null;

    /**
     * Create a new settings service instance.
     *
     * @param \CachetHQ\Cachet\Models\Setting $model
     *
     * @return void
     */
    public function __construct(Model $model)
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
        $setting = null;

        try {
            if (! $this->settings) {
                $this->settings = $this->model->all()->lists('value', 'name');
            }

            if (array_key_exists($name, $this->settings)) {
                return $this->settings[$name];
            }
        } catch (ErrorException $e) {
            if ($checkEnv) {
                $env = getenv(strtoupper($name));
                if (!$env) {
                    return $env;
                }
            }

            return $setting;
        }

        return $setting;
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
        $this->model->updateOrCreate(compact('name'), compact('value'));
    }
}
