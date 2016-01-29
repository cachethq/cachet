<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers;

use CachetHQ\Cachet\Models\User;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class SetupController extends Controller
{
    /**
     * Array of cache drivers.
     *
     * @var string[]
     */
    protected $cacheDrivers = [
        'apc'       => 'APC(u)',
        'array'     => 'Array',
        'file'      => 'File',
        'database'  => 'Database',
        'memcached' => 'Memcached',
        'redis'     => 'Redis',
    ];

    /**
     * Array of step1 rules.
     *
     * @var string[]
     */
    protected $rulesStep1;

    /**
     * Array of step2 rules.
     *
     * @var string[]
     */
    protected $rulesStep2;

    /**
     * Array of step3 rules.
     *
     * @var string[]
     */
    protected $rulesStep3;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->rulesStep1 = [
            'env.cache_driver'   => 'required|in:'.implode(',', array_keys($this->cacheDrivers)),
            'env.session_driver' => 'required|in:'.implode(',', array_keys($this->cacheDrivers)),
        ];

        $this->rulesStep2 = [
            'settings.app_name'     => 'required',
            'settings.app_domain'   => 'required',
            'settings.app_timezone' => 'required',
            'settings.app_locale'   => 'required',
            'settings.show_support' => 'bool',
        ];

        $this->rulesStep3 = [
            'user.username' => ['required', 'regex:/\A(?!.*[:;]-\))[ -~]+\z/'],
            'user.email'    => 'email|required',
            'user.password' => 'required',
        ];
    }

    /**
     * Returns the setup page.
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        // If we've copied the .env.example file, then we should try and reset it.
        if (strlen(Config::get('app.key')) !== 32) {
            $this->keyGenerate();
        }

        $supportedLanguages = Request::getLanguages();
        $userLanguage = Config::get('app.locale');

        foreach ($supportedLanguages as $language) {
            $language = str_replace('_', '-', $language);

            if (isset($this->langs[$language])) {
                $userLanguage = $language;
                break;
            }
        }

        return View::make('setup')
            ->withPageTitle(trans('setup.setup'))
            ->withCacheDrivers($this->cacheDrivers)
            ->withUserLanguage($userLanguage)
            ->withAppUrl(Request::root());
    }

    /**
     * Handles validation on step one of the setup form.
     *
     * @return \Illuminate\Http\Response
     */
    public function postStep1()
    {
        $postData = Binput::all();

        $v = Validator::make($postData, $this->rulesStep1);

        if ($v->passes()) {
            return Response::json(['status' => 1]);
        }

        return Response::json(['errors' => $v->getMessageBag()], 400);
    }

    /**
     * Handles validation on step two of the setup form.
     *
     * @return \Illuminate\Http\Response
     */
    public function postStep2()
    {
        $postData = Binput::all();

        $v = Validator::make($postData, $this->rulesStep1 + $this->rulesStep2);

        if ($v->passes()) {
            return Response::json(['status' => 1]);
        }

        return Response::json(['errors' => $v->getMessageBag()], 400);
    }

    /**
     * Handles the actual app setup, including user, settings and env.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function postStep3()
    {
        $postData = Binput::all();

        $v = Validator::make($postData, $this->rulesStep1 + $this->rulesStep2 + $this->rulesStep3);

        if ($v->passes()) {
            // Pull the user details out.
            $userDetails = array_pull($postData, 'user');

            $user = User::create([
                'username' => $userDetails['username'],
                'email'    => $userDetails['email'],
                'password' => $userDetails['password'],
                'level'    => User::LEVEL_ADMIN,
            ]);

            Auth::login($user);

            $setting = app('setting');

            $settings = array_pull($postData, 'settings');

            foreach ($settings as $settingName => $settingValue) {
                $setting->set($settingName, $settingValue);
            }

            $envData = array_pull($postData, 'env');

            // Write the env to the .env file.
            foreach ($envData as $envKey => $envValue) {
                $this->writeEnv($envKey, $envValue);
            }

            Session::flash('setup.done', true);

            if (Request::ajax()) {
                return Response::json(['status' => 1]);
            }

            return Redirect::to('dashboard');
        }

        if (Request::ajax()) {
            return Response::json(['errors' => $v->getMessageBag()], 400);
        }

        return Redirect::route('setup.index')->withInput()->withErrors($v->getMessageBag());
    }

    /**
     * Writes to the .env file with given parameters.
     *
     * @param string $key
     * @param mixed  $value
     *
     * @return void
     */
    protected function writeEnv($key, $value)
    {
        static $path = null;

        if ($path === null || ($path !== null && file_exists($path))) {
            $path = base_path('.env');
            file_put_contents($path, str_replace(
                env(strtoupper($key)), $value, file_get_contents($path)
            ));
        }
    }

    /**
     * Generate the app.key value.
     *
     * @return void
     */
    protected function keyGenerate()
    {
        $key = str_random(32);

        $path = base_path('.env');

        file_put_contents($path, str_replace(
            Config::get('app.key'), $key, file_get_contents($path)
        ));

        Config::set('app.key', $key);
    }
}
