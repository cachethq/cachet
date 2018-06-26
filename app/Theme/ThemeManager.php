<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Theme;

use Illuminate\Contracts\Container\Container;
use Illuminate\Support\Manager;

/**
 * This is the theme manager class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ThemeManager
{
    /**
     * The available themes.
     *
     * @var array
     */
    protected $themes = [];

    /**
     * The active theme.
     *
     * @var \CachetHQ\Cachet\Theme\Manifest
     */
    protected $activeTheme;

    /**
     * The app instance.
     *
     * @var \Illuminate\Contracts\Container\Container
     */
    protected $app;

    /**
     * Create a new theme manager instance.
     *
     * @param \Illuminate\Contracts\Container\Container $app
     *
     * @return void
     */
    public function __construct(Container $app)
    {
        $this->app = $app;
    }

    /**
     * Get the active theme.
     *
     * @return \CachetHQ\Cachet\Theme\Manifest|null
     */
    public function getActiveTheme()
    {
        return $this->activeTheme;
    }

    /**
     * Register a theme.
     *
     * @param \CachetHQ\Cachet\Theme\Manifest $theme
     *
     * @return void
     */
    public function registerTheme(Manifest $theme)
    {
        $this->themes[$theme->name] = $theme;
    }

    /**
     * Load a theme.
     *
     * @param string $theme
     *
     * @return bool
     */
    public function loadTheme($theme)
    {
        if (!array_key_exists($theme, $this->themes)) {
            return false;
        }

        $this->activeTheme = $this->themes[$theme];

        // Load the views.
        $this->app['view']->prependNamespace('theme', [
            realpath($this->activeTheme->getThemePath().'/views'),
            resource_path('views/vendor/theme'),
        ]);

        // Load the public assets, if the theme has any.
        if (is_dir($publicDir = realpath($this->activeTheme->getThemePath().'/public'))) {
            if (!file_exists($linkDir = public_path('theme').'/'.$this->activeTheme->getThemeSlug())) {
                $this->app['files']->link(
                    $publicDir,
                    $linkDir
                );
            }
        }

        return true;
    }
}
