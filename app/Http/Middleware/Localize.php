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

use Closure;
use Illuminate\Config\Repository;
use Illuminate\Http\Request;
use Jenssegers\Date\Date;

class Localize
{
    /**
     * Array of languages Cachet can use.
     *
     * @var array
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
        // Early exit optimization.
        if (!$this->config->get('setting.automatic_localization')) {
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
        Date::setLocale($userLanguage);

        return $next($request);
    }
}
