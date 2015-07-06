<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Composers;

use DateTime;
use DateTimeZone;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Config;

class TimezoneLocaleComposer
{
    /**
     * Timezones and Locales composer.
     *
     * @param \Illuminate\Contracts\View\View $view
     */
    public function compose(View $view)
    {
        $enabledLangs = Config::get('langs');

        $langs = array_map(function ($lang) use ($enabledLangs) {
            $locale = basename($lang);

            return [$locale => $enabledLangs[$locale]];
        }, glob(base_path('resources/lang').'/*'));

        $langs = call_user_func_array('array_merge', $langs);

        $regions = [
            'Africa'     => DateTimeZone::AFRICA,
            'America'    => DateTimeZone::AMERICA,
            'Antarctica' => DateTimeZone::ANTARCTICA,
            'Asia'       => DateTimeZone::ASIA,
            'Atlantic'   => DateTimeZone::ATLANTIC,
            'Australia'  => DateTimeZone::AUSTRALIA,
            'Europe'     => DateTimeZone::EUROPE,
            'Indian'     => DateTimeZone::INDIAN,
            'Pacific'    => DateTimeZone::PACIFIC,
        ];

        $timezones = [];

        foreach ($regions as $name => $mask) {
            $zones = DateTimeZone::listIdentifiers($mask);

            foreach ($zones as $timezone) {
                // Lets sample the time there right now
                $time = new DateTime(null, new DateTimeZone($timezone));

                $ampm = $time->format('H') > 12 ? ' ('.$time->format('g:i a').')' : '';

                // Remove region name and add a sample time
                $timezones[$name][$timezone] = substr($timezone, strlen($name) + 1).' - '.$time->format('H:i').$ampm;

                $timezones[$name] = str_replace('_', ' ', $timezones[$name]);
            }
        }

        $view->with([
            'timezones' => $timezones,
            'langs'     => $langs,
        ]);
    }
}
