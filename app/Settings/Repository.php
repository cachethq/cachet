<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Settings;

use CachetHQ\Cachet\Models\Setting;
use Exception;

/**
 * This is the settings repository class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 */
class Repository
{
    /**
     * Array of numerical settings that are not bools.
     *
     * @var string[]
     */
    protected $notBooleans = [
        'app_incident_days',
    ];

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
     * Create a new settings repository instance.
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
     * @throws \CachetHQ\Cachet\Settings\ReadException
     *
     * @return array
     */
    public function all()
    {
        try {
            return $this->model->all(['name', 'value'])->pluck('value', 'name')->map(function ($value, $name) {
                return $this->castSetting($name, $value);
            })->toArray();
        } catch (Exception $e) {
            throw new ReadException($e);
        }
    }

    /**
     * Updates a setting value.
     *
     * @param string      $name
     * @param string|null $value
     *
     * @throws \CachetHQ\Cachet\Settings\WriteException
     *
     * @return void
     */
    public function set($name, $value)
    {
        $this->stale = true;

        try {
            if ($value === null) {
                $this->model->where('name', '=', $name)->delete();
            } else {
                $this->model->updateOrCreate(compact('name'), compact('value'));
            }
        } catch (Exception $e) {
            throw new WriteException($e);
        }
    }

    /**
     * Get a setting, or the default value.
     *
     * @param string $name
     * @param mixed  $default
     *
     * @throws \CachetHQ\Cachet\Settings\ReadException
     *
     * @return mixed
     */
    public function get($name, $default = null)
    {
        try {
            if ($setting = $this->model->where('name', '=', $name)->first()) {
                return $this->castSetting($name, $setting->value);
            }

            return $default;
        } catch (Exception $e) {
            throw new ReadException($e);
        }
    }

    /**
     * Deletes a setting.
     *
     * @param string $name
     *
     * @throws \CachetHQ\Cachet\Settings\WriteException
     *
     * @return void
     */
    public function delete($name)
    {
        $this->stale = true;

        try {
            $this->model->where('name', '=', $name)->delete();
        } catch (Exception $e) {
            throw new WriteException($e);
        }
    }

    /**
     * Clear all settings.
     *
     * @throws \CachetHQ\Cachet\Settings\WriteException
     *
     * @return void
     */
    public function clear()
    {
        $this->stale = true;

        try {
            $this->model->query()->delete();
        } catch (Exception $e) {
            throw new WriteException($e);
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

    /**
     * Cast setting as the applicable type.
     *
     * @param string $key
     * @param string $value
     *
     * @return mixed
     */
    protected function castSetting($key, $value)
    {
        if (is_null($value)) {
            return $value;
        }

        if (!in_array($key, $this->notBooleans) && in_array($value, ['0', '1'])) {
            return (bool) $value;
        }

        return $value;
    }
}
