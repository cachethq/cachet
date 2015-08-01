<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use CachetHQ\Cachet\Facades\Setting;
use Illuminate\Support\Facades\Request;
use Jenssegers\Date\Date;

if (!function_exists('set_active')) {

    /**
     * Set active class if request is in path.
     *
     * @param string $path
     * @param array  $classes
     * @param string $active
     *
     * @return string
     */
    function set_active($path, array $classes = [], $active = 'active')
    {
        if (Request::is($path)) {
            $classes[] = $active;
        }

        $class = e(implode(' ', $classes));

        return empty($classes) ? '' : "class=\"{$class}\"";
    }
}

if (!function_exists('formatted_date')) {
    /**
     * Formats a date with the user timezone and the selected format.
     *
     * @param string $date
     *
     * @return \Jenssegers\Date\Date
     */
    function formatted_date($date)
    {
        $dateFormat = Setting::get('date_format', 'jS F Y');

        return (new Date($date))->format($dateFormat);
    }
}

if (!function_exists('subscribers_enabled')) {
    /**
     * Is the subscriber functionality enabled and configured.
     *
     * @return bool
     */
    function subscribers_enabled()
    {
        $isEnabled = Setting::get('enable_subscribers', false);
        $mailAddress = env('MAIL_ADDRESS', false);
        $mailFrom = env('MAIL_NAME', false);

        return $isEnabled && $mailAddress && $mailFrom;
    }
}
