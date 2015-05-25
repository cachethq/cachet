<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Composers;

use CachetHQ\Cachet\Facades\Setting;
use Illuminate\View\View;

class ThemeComposer
{
    /**
     * Bind data to the view.
     *
     * @param \Illuminate\View\View $view
     */
    public function compose(View $view)
    {
        $view->with('themeBackgroundColor', Setting::get('style_background_color'));
        $view->with('themeTextColor', Setting::get('style_text_color'));

        $viewData = $view->getData();
        $themeView = array_only($viewData, preg_grep('/^theme/', array_keys($viewData)));
        $hasThemeSettings = array_filter($themeView, function ($data) {
            return $data != null;
        });

        $view->with('themeSetup', !empty($hasThemeSettings));
    }
}
