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
use Illuminate\Database\QueryException;
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

        $class = implode(' ', $classes);

        return empty($classes) ? '' : "class={$class}";
    }
}

if (!function_exists('segment_identify')) {
    /**
     * Identifies the user for Segment.com.
     *
     * @return bool
     */
    function segment_identify()
    {
        if (Config::get('segment.write_key')) {
            try {
                if (Setting::get('app_track')) {
                    return app('segment')->identify([
                        'anonymousId' => Config::get('app.key'),
                        'context'     => [
                            'locale'         => Config::get('app.locale'),
                            'timezone'       => Setting::get('app_timezone'),
                            'DB_DRIVER'      => getenv('DB_DRIVER'),
                            'CACHE_DRIVER'   => getenv('CACHE_DRIVER'),
                            'SESSION_DRIVER' => getenv('SESSION_DRIVER'),
                        ],
                    ]);
                } else {
                    return false;
                }
            } catch (QueryException $e) {
                return false;
            }
        }
    }
}

if (!function_exists('segment_track')) {
    /**
     * Tracks events in Segment.com.
     *
     * @param string $event
     * @param array  $properties
     *
     * @return bool
     */
    function segment_track($event, array $properties = [])
    {
        if (Config::get('segment.write_key')) {
            try {
                if (Setting::get('app_track')) {
                    return app('segment')->track([
                        'anonymousId' => Config::get('app.key'),
                        'event'       => $event,
                        'properties'  => $properties,
                        'context'     => [
                            'locale'         => Config::get('app.locale'),
                            'timezone'       => Setting::get('app_timezone'),
                            'DB_DRIVER'      => getenv('DB_DRIVER'),
                            'CACHE_DRIVER'   => getenv('CACHE_DRIVER'),
                            'SESSION_DRIVER' => getenv('SESSION_DRIVER'),
                        ],
                    ]);
                } else {
                    return false;
                }
            } catch (QueryException $e) {
                return false;
            }
        }
    }
}

if (!function_exists('segment_page')) {
    /**
     * Tracks pages in Segment.com.
     *
     * @param string $page
     *
     * @return bool
     */
    function segment_page($page)
    {
        if (Config::get('segment.write_key')) {
            try {
                if (Setting::get('app_track')) {
                    return app('segment')->page([
                        'anonymousId' => Config::get('app.key'),
                        'name'        => $page,
                        'context'     => [
                            'locale'         => Config::get('app.locale'),
                            'timezone'       => Setting::get('app_timezone'),
                            'DB_DRIVER'      => getenv('DB_DRIVER'),
                            'CACHE_DRIVER'   => getenv('CACHE_DRIVER'),
                            'SESSION_DRIVER' => getenv('SESSION_DRIVER'),
                        ],
                    ]);
                } else {
                    return false;
                }
            } catch (QueryException $e) {
                return false;
            }
        }
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
