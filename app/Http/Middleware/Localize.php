<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Config\Repository;
use Illuminate\Http\Request;

/**
 * This is the localize middleware class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Joseph Cohen <joe@alt-three.com>
 * @author Graham Campbell <james@alt-three.com>
 */
class Localize
{
    /**
     * Array of languages Cachet can use.
     *
     * @var string[]
     */
    protected $langs;

    /**
     * The config repository instance.
     *
     * @var \Illuminate\Config\Repository
     */
    protected $config;

    /**
     * Constructs a new localize middleware instance.
     *
     * @param \Illuminate\Config\Repository $config
     *
     * @return void
     */
    public function __construct(Repository $config)
    {
        $this->config = $config;
        $this->langs = $config->get('langs');
    }

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!(bool) $this->config->get('setting.automatic_localization')) {
            return $next($request);
        }

        $supportedLanguages = $request->getLanguages();
        $userLanguage = $this->config->get('app.locale');

        foreach ($supportedLanguages as $language) {
            $language = str_replace('_', '-', $language);

            if (isset($this->langs[$language])) {
                $userLanguage = $language;
                break;
            }
        }

        app('translator')->setLocale($userLanguage);
        Carbon::setLocale($userLanguage);

        return $next($request);
    }
}
