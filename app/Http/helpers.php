<?php

use CachetHQ\Cachet\Facades\Setting;
use CachetHQ\Segment\Facades\Segment;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Request;

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

        return empty($classes) ? '' : "class=\"{$class}\"";
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
                    return Segment::identify([
                        'anonymousId' => Config::get('app.key'),
                        'context'     => [
                            'locale'   => Config::get('app.locale'),
                            'timezone' => Setting::get('app_timezone'),
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
    function segment_track($event, array $properties)
    {
        if (Config::get('segment.write_key')) {
            try {
                if (Setting::get('app_track')) {
                    return Segment::track([
                        'anonymousId' => Config::get('app.key'),
                        'event'       => $event,
                        'properties'  => $properties,
                        'context'     => [
                            'locale'   => Config::get('app.locale'),
                            'timezone' => Setting::get('app_timezone'),
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
                    return Segment::page([
                        'anonymousId' => Config::get('app.key'),
                        'page'        => $page,
                        'context'     => [
                            'locale'   => Config::get('app.locale'),
                            'timezone' => Setting::get('app_timezone'),
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
