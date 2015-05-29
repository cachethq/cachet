<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers;

use CachetHQ\Cachet\Models\Setting;
use CachetHQ\Cachet\Models\User;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class SetupController extends AbstractController
{
    /**
     * Array of cache drivers.
     *
     * @var string[]
     */
    protected $cacheDrivers = [
        'apc'      => 'APC(u)',
        'file'     => 'File',
        'database' => 'Database',
    ];

    /**
     * Create a new setup controller instance.
     */
    public function __construct()
    {
        $this->beforeFilter('csrf', ['only' => ['postCachet']]);
    }

    /**
     * Returns the setup page.
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        segment_page('Setup');

        // If we've copied the .env.example file, then we should try and reset it ready for Segment to kick in.
        if (getenv('APP_KEY') === 'SomeRandomString') {
            $this->keyGenerate();
        }

        return View::make('setup')->with([
            'pageTitle'    => trans('setup.setup'),
            'cacheDrivers' => $this->cacheDrivers,
            'appUrl'       => Request::root(),
        ]);
    }

    /**
     * Handles validation on step one of the setup form.
     *
     * @return \Illuminate\Http\Response
     */
    public function postStep1()
    {
        $postData = Binput::all();

        $v = Validator::make($postData, [
            'env.cache_driver'   => 'required|in:'.implode(',', array_keys($this->cacheDrivers)),
            'env.session_driver' => 'required|in:'.implode(',', array_keys($this->cacheDrivers)),
        ]);

        if ($v->passes()) {
            segment_track('Setup', [
                'event'   => 'Step 1',
                'success' => true,
            ]);

            return Response::json(['status' => 1]);
        } else {
            // No good, let's try that again.
            segment_track('Setup', [
                'event'   => 'Step 1',
                'success' => false,
            ]);

            return Response::json(['errors' => $v->messages()], 400);
        }
    }

    /**
     * Handles validation on step two of the setup form.
     *
     * @return \Illuminate\Http\Response
     */
    public function postStep2()
    {
        $postData = Binput::all();

        $v = Validator::make($postData, [
            'env.cache_driver'      => 'required|in:'.implode(',', array_keys($this->cacheDrivers)),
            'env.session_driver'    => 'required|in:'.implode(',', array_keys($this->cacheDrivers)),
            'settings.app_name'     => 'required',
            'settings.app_domain'   => 'required',
            'settings.app_timezone' => 'required',
            'settings.app_locale'   => 'required',
            'settings.show_support' => 'boolean',
        ]);

        if ($v->passes()) {
            segment_track('Setup', [
                'event'   => 'Step 2',
                'success' => true,
            ]);

            return Response::json(['status' => 1]);
        } else {
            // No good, let's try that again.
            segment_track('Setup', [
                'event'   => 'Step 2',
                'success' => false,
            ]);

            return Response::json(['errors' => $v->messages()], 400);
        }
    }

    /**
     * Handles the actual app setup, including user, settings and env.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function postStep3()
    {
        $postData = Binput::all();

        $v = Validator::make($postData, [
            'env.cache_driver'      => 'required|in:'.implode(',', array_keys($this->cacheDrivers)),
            'env.session_driver'    => 'required|in:'.implode(',', array_keys($this->cacheDrivers)),
            'settings.app_name'     => 'required',
            'settings.app_domain'   => 'required',
            'settings.app_timezone' => 'required',
            'settings.app_locale'   => 'required',
            'settings.show_support' => 'boolean',
            'user.username'         => ['required', 'regex:/\A(?!.*[:;]-\))[ -~]+\z/'],
            'user.email'            => 'email|required',
            'user.password'         => 'required',
        ]);

        if ($v->passes()) {
            // Pull the user details out.
            $userDetails = array_pull($postData, 'user');

            $user = User::create([
                'username' => $userDetails['username'],
                'email'    => $userDetails['email'],
                'password' => $userDetails['password'],
                'level'    => 1,
            ]);

            Auth::login($user);

            $settings = array_pull($postData, 'settings');

            foreach ($settings as $settingName => $settingValue) {
                Setting::create([
                    'name'  => $settingName,
                    'value' => $settingValue,
                ]);
            }

            $envData = array_pull($postData, 'env');

            // Write the env to the .env file.
            foreach ($envData as $envKey => $envValue) {
                $this->writeEnv($envKey, $envValue);
            }

            Session::flash('setup.done', true);

            segment_track('Setup', [
                'event'          => 'Step 3',
                'success'        => true,
                'cache_driver'   => $envData['cache_driver'],
                'session_driver' => $envData['session_driver'],
            ]);

            if (Request::ajax()) {
                return Response::json(['status' => 1]);
            }

            return Redirect::to('dashboard');
        } else {
            segment_track('Setup', [
                'event'   => 'Step 3',
                'success' => false,
            ]);

            // No good, let's try that again.
            if (Request::ajax()) {
                return Response::json(['errors' => $v->messages()], 400);
            }

            return Redirect::back()->withInput()->with('errors', $v->messages());
        }
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
                getenv(strtoupper($key)), $value, file_get_contents($path)
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
        $key = str_random(42);

        $path = base_path('.env');

        file_put_contents($path, str_replace(
            Config::get('app.key'), $key, file_get_contents($path)
        ));

        Config::set('app.key', $key);
    }
}
