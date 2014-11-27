<?php

class Setting extends Eloquent {
    /**
     * Returns a setting from the database.
     * @param  string $settingName
     * @param  bool $checkEnv
     * @return string
     */
    public static function get($settingName, $checkEnv = true) {
        // Default setting value.
        $setting = null;

        // First try finding the setting in the database.
        try {
            $setting = self::whereName($settingName)->first()->value;
        } catch (\ErrorException $e) {
            // If we don't have a setting, check the env (fallback for original version)
            if ($checkEnv) {
                if (!($setting = getenv(strtoupper($settingName)))) {
                    return $setting;
                }
            } else {
                return $setting;
            }
        }

        return $setting;
    }

    /**
     * Throws an Exception
     * @param  string $setting
     * @throws Exception
     * @return void
     */
    public static function unknownSettingException($setting) {
        throw new \Exception(
            sprintf('Unknown setting %s', $setting)
        );
    }
}
