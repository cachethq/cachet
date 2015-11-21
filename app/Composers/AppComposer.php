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
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Contracts\View\View;

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
        $isEnabled = (bool) Setting::get('enable_subscribers', false);
        $mailAddress = env('MAIL_ADDRESS', false);
        $mailFrom = env('MAIL_NAME', false);

        $view->withAboutApp(Markdown::convertToHtml(Setting::get('app_about')));
        $view->withAppBanner(Setting::get('app_banner'));
        $view->withAppBannerType(Setting::get('app_banner_type'));
        $view->withAppDomain(Setting::get('app_domain'));
        $view->withAppName(Setting::get('app_name'));
        $view->withShowSupport(Setting::get('show_support'));
        $view->withSubscribersEnabled($isEnabled && $mailAddress && $mailFrom);
    }
}
