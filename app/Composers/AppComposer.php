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

use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Config;

class AppComposer
{
    /**
     * Index page view composer.
     *
     * @param \Illuminate\Contracts\View\View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $view->withAboutApp(Markdown::convertToHtml(Config::get('setting.app_about')));
        $view->withAppAnalytics(Config::get('setting.app_analytics'));
        $view->withAppAnalyticsGoSquared(Config::get('setting.app_analytics_go_squared'));
        $view->withAppAnalyticsPiwikUrl(Config::get('setting.app_analytics_piwik_url'));
        $view->withAppAnalyticsPiwikSiteId(Config::get('setting.app_analytics_piwik_siteid'));
        $view->withAppBanner(Config::get('setting.app_banner'));
        $view->withAppBannerStyleFullWidth(Config::get('setting.style_fullwidth_header'));
        $view->withAppBannerType(Config::get('setting.app_banner_type'));
        $view->withAppDomain(Config::get('setting.app_domain'));
        $view->withAppGraphs(Config::get('setting.display_graphs'));
        $view->withAppLocale(Config::get('setting.app_locale'));
        $view->withAppStylesheet(Config::get('setting.stylesheet'));
        $view->withAppUrl(Config::get('app.url'));

        $view->withAppName($name =Config::get('setting.app_name'));
        $view->withShowSupport($support = Config::get('setting.show_support'));

        if ($support) {
            $view->withSiteTitle(Config::get('setting.app_name').' | Cachet');
        } else {
            $view->withSiteTitle(Config::get('setting.app_name'));
        }
    }
}
