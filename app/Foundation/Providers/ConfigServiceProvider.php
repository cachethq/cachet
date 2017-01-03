<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Foundation\Providers;

use CachetHQ\Cachet\Models\Setting as SettingModel;
use CachetHQ\Cachet\Settings\Cache;
use CachetHQ\Cachet\Settings\Repository;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\ServiceProvider;

/**
 * This is the config service provider class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 * @author Joseph Cohen <joe@alt-three.com>
 */
class ConfigServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $env = $this->app->environment();
        $repo = $this->app->make(Repository::class);
        $cache = $this->app->make(Cache::class);
        $loaded = $cache->load($env);

        $this->app->terminating(function () use ($repo, $cache) {
            if ($repo->stale()) {
                $cache->clear();
            }
        });

        try {
            if ($loaded === false) {
                $loaded = $repo->all();
                $cache->store($env, $loaded);
            }

            $settings = array_merge($this->app->config->get('setting'), $loaded);

            $this->app->config->set('setting', $settings);
        } catch (Exception $e) {
            //
        }

        // Set the app url.
        if ($appDomain = $this->app->config->get('setting.app_domain')) {
            $this->app->config->set('app.url', $appDomain);
        }

        // Set the locale.
        if ($appLocale = $this->app->config->get('setting.app_locale')) {
            $this->app->config->set('app.locale', $appLocale);
            $this->app->translator->setLocale($appLocale);
            Carbon::setLocale($appLocale);
        }

        // Set the timezone.
        if ($appTimezone = $this->app->config->get('setting.app_timezone')) {
            $this->app->config->set('cachet.timezone', $appTimezone);
        }

        // Set allowed domains for CORS.
        $allowedOrigins = $this->app->config->get('cors.defaults.allowedOrigins');

        if ($allowedDomains = $this->app->config->get('setting.allowed_domains')) {
            $domains = explode(',', $allowedDomains);
            foreach ($domains as $domain) {
                $allowedOrigins[] = $domain;
            }
        } else {
            $allowedOrigins[] = $this->app->config->get('app.url');
        }

        $this->app->config->set('cors.paths.api/v1/*.allowedOrigins', $allowedOrigins);

        // Set the mail from address.
        if (!$this->app->config->get('mail.from.address')) {
            $url = parse_url($appDomain)['host'];
            $this->app->config->set('mail.from.address', "notify@{$url}");
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Cache::class, function ($app) {
            return new Cache($app->files, $app->bootstrapPath().'/cachet');
        });

        $this->app->singleton(Repository::class, function () {
            return new Repository(new SettingModel());
        });
    }
}
