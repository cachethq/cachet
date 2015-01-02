<?php

use Illuminate\Support\Facades\Request;

if (!function_exists('elixir')) {
    /**
     * Get the path to a versioned Elixir file.
     *
     * @param string $file
     *
     * @return string
     */
    function elixir($file)
    {
        static $manifest = null;

        if (is_null($manifest)) {
            $manifest = json_decode(file_get_contents(public_path().'/build/rev-manifest.json'), true);
        }

        if (isset($manifest[$file])) {
            return '/build/'.$manifest[$file];
        }

        throw new InvalidArgumentException("File {$file} not defined in asset manifest.");
    }
}

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
