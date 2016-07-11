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

use CachetHQ\Cachet\Dates\DateFactory;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Config;

class AppComposer
{
    /**
     * The date factory instance.
     *
     * @var \CachetHQ\Cachet\Dates\DateFactory
     */
    protected $dates;

    /**
     * Create a new app composer instance.
     *
     * @param \CachetHQ\Cachet\Dates\DateFactory $dates
     *
     * @return void
     */
    public function __construct(DateFactory $dates)
    {
        $this->dates = $dates;
    }

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
        $view->withAppAnalyticsGoSquared(Config::get('setting.app_analytics_gs'));
        $view->withAppAnalyticsPiwikUrl(Config::get('setting.app_analytics_piwik_url'));
        $view->withAppAnalyticsPiwikSiteId(Config::get('setting.app_analytics_piwik_site_id'));
        $view->withAppBanner(Config::get('setting.app_banner'));
        $view->withAppBannerStyleFullWidth(Config::get('setting.style_fullwidth_header'));
        $view->withAppBannerType(Config::get('setting.app_banner_type'));
        $view->withAppDomain(Config::get('setting.app_domain'));
        $view->withAppGraphs(Config::get('setting.display_graphs'));
        $view->withAppLocale(Config::get('setting.app_locale'));
        $view->withAppStylesheet(Config::get('setting.stylesheet'));
        $view->withAppUrl(Config::get('app.url'));
        $view->withAppHeader(Config::get('setting.header'));
        $view->withAppFooter(Config::get('setting.footer'));
        $view->withAppName(Config::get('setting.app_name'));
        $view->withShowSupport(Config::get('setting.show_support'));
        $view->withAutomaticLocalization(Config::get('setting.automatic_localization'));
        $view->withEnableExternalDependencies(Config::get('setting.enable_external_dependencies'));
        $view->withShowTimezone(Config::get('setting.show_timezone'));
        $view->withTimezone($this->dates->getTimezone());
        $view->withSiteTitle(Config::get('setting.app_name'));
        $view->withFontSubset(Config::get('langs.'.Config::get('app.locale').'.subset', 'latin'));
    }
}
