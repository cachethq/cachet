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
use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\View\View;

class AppComposer
{
    /**
     * The date factory instance.
     *
     * @var \CachetHQ\Cachet\Dates\DateFactory
     */
    protected $dates;

    /**
     * The illuminate config instance.
     *
     * @var \Illuminate\Contracts\Config\Repository
     */
    protected $config;

    /**
     * Create a new app composer instance.
     *
     * @param \CachetHQ\Cachet\Dates\DateFactory      $dates
     * @param \Illuminate\Contracts\Config\Repository $config
     *
     * @return void
     */
    public function __construct(DateFactory $dates, Repository $config)
    {
        $this->dates = $dates;
        $this->config = $config;
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
        $view->withAboutApp(Markdown::convertToHtml($this->config->get('setting.app_about')));
        $view->withAppAnalytics($this->config->get('setting.app_analytics'));
        $view->withAppAnalyticsGoSquared($this->config->get('setting.app_analytics_gs'));
        $view->withAppAnalyticsPiwikUrl($this->config->get('setting.app_analytics_piwik_url'));
        $view->withAppAnalyticsPiwikSiteId($this->config->get('setting.app_analytics_piwik_site_id'));
        $view->withAppBanner($this->config->get('setting.app_banner'));
        $view->withAppBannerStyleFullWidth($this->config->get('setting.style_fullwidth_header'));
        $view->withAppBannerType($this->config->get('setting.app_banner_type'));
        $view->withAppDomain($this->config->get('setting.app_domain'));
        $view->withAppGraphs($this->config->get('setting.display_graphs'));
        $view->withAppLocale($this->config->get('setting.app_locale'));
        $view->withAppStylesheet($this->config->get('setting.stylesheet'));
        $view->withAppUrl($this->config->get('app.url'));
        $view->withAppHeader($this->config->get('setting.header'));
        $view->withAppFooter($this->config->get('setting.footer'));
        $view->withAppName($this->config->get('setting.app_name'));
        $view->withShowSupport($this->config->get('setting.show_support'));
        $view->withAutomaticLocalization($this->config->get('setting.automatic_localization'));
        $view->withEnableExternalDependencies($this->config->get('setting.enable_external_dependencies'));
        $view->withShowTimezone($this->config->get('setting.show_timezone'));
        $view->withTimezone($this->dates->getTimezone());
        $view->withSiteTitle($this->config->get('setting.app_name'));
        $view->withFontSubset($this->config->get('langs.'.$this->config->get('app.locale').'.subset', 'latin'));
        $view->withOnlyDisruptedDays($this->config->get('setting.only_disrupted_days'));
    }
}
