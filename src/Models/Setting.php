<?php

namespace CachetHQ\Cachet\Models;

use ErrorException;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int            $id
 * @property string         $name
 * @property string         $value
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Setting extends Model
{
    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = ['name', 'value'];

    /**
     * Returns a setting from the database.
     *
     * @param string $settingName
     * @param bool   $checkEnv
     *
     * @return string|null
     */
    public static function get($settingName, $checkEnv = true)
    {
        $setting = null;

        try {
            $setting = self::whereName($settingName)->first()->value;
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
