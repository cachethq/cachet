<?php

namespace CachetHQ\Cachet\Services;

use Illuminate\Database\Eloquent\Model;

class SettingsService
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
     * @param string $settingName
     * @param bool   $checkEnv
     *
     * @return string|null
     */
    public function get($settingName, $checkEnv = true)
    {
        $setting = null;

        try {
            if (! $this->settings) {
                $this->settings = $this->model->all()->lists('value', 'name');
            }

            if (array_key_exists($settingName, $this->settings)) {
                return $this->settings[$settingName];
            }
        } catch (ErrorException $e) {
            if ($checkEnv) {
                $env = getenv(strtoupper($settingName));
                if (!$env) {
                    return $env;
                }
            }

            return $setting;
        }

        return $setting;
    }
}
