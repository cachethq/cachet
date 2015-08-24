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

use CachetHQ\Cachet\Facades\Setting;
use Illuminate\Contracts\View\View;

class ThemeComposer
{
    /**
     * Bind data to the view.
     *
     * @param \Illuminate\Contracts\View\View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        // Theme colors.
        $view->withThemeBackgroundColor(Setting::get('style_background_color', '#F0F3F4'));
        $view->withThemeTextColor(Setting::get('style_text_color', '#333333'));
        $view->withThemeReds(Setting::get('style_reds', '#ff6f6f'));
        $view->withThemeBlues(Setting::get('style_blues', '#3498db'));
        $view->withThemeGreens(Setting::get('style_greens', '#7ED321'));
        $view->withThemeYellows(Setting::get('style_yellows', '#F7CA18'));
        $view->withThemeOranges(Setting::get('style_oranges', '#FF8800'));
        $view->withThemeMetrics(Setting::get('style_metrics', '#0dccc0'));
        $view->withThemeLinks(Setting::get('style_links', '#7ED321'));
    }
}
