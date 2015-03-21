<?php

namespace CachetHQ\Cachet\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CachetHQ\Cachet\Services\SettingsService
 */
class Setting extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'setting';
    }
}
