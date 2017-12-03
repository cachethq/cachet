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

use CachetHQ\Cachet\Bus\Commands\System\Config\UpdateConfigCommand;
use CachetHQ\Cachet\Models\User;
use CachetHQ\Cachet\Settings\Repository;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

/**
 * This is the setup controller.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 * @author Joseph Cohen <joe@alt-three.com>
 */
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
     * Array of cache drivers.
     *
     * @var string[]
     */
    protected $mailDrivers = [
        'smtp'      => 'SMTP',
        'mail'      => 'Mail',
        'sendmail'  => 'Sendmail',
        'mailgun'   => 'Mailgun',
        'mandrill'  => 'Mandrill',
        'ses'       => 'Amazon SES',
        'sparkpost' => 'SparkPost',
        'log'       => 'Log (Testing)',
    ];

    /**
     * Array of queue drivers.
     *
     * @var string[]
     */
    protected $queueDrivers = [
        'null'       => 'None',
        'sync'       => 'Synchronous',
        'database'   => 'Database',
        'beanstalkd' => 'Beanstalk',
        'sqs'        => 'Amazon SQS',
        'redis'      => 'Redis',
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
            'env.queue_driver'   => 'required|in:'.implode(',', array_keys($this->queueDrivers)),
            'env.mail_driver'    => 'required|in:'.implode(',', array_keys($this->mailDrivers)),
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
        $supportedLanguages = Request::getLanguages();
        $userLanguage = Config::get('app.locale');

        foreach ($supportedLanguages as $language) {
            $language = str_replace('_', '-', $language);

            if (isset($this->langs[$language])) {
                $userLanguage = $language;
                break;
            }
        }

        // Since .env may already be configured, we should show that data!
        $cacheConfig = [
            'driver' => Config::get('cache.default'),
        ];

        $sessionConfig = [
            'driver' => Config::get('session.driver'),
        ];

        $queueConfig = [
            'driver' => Config::get('queue.default'),
        ];

        $mailConfig = [
            'driver'   => Config::get('mail.driver'),
            'host'     => Config::get('mail.host'),
            'from'     => Config::get('mail.from'),
            'username' => Config::get('mail.username'),
            'password' => Config::get('mail.password'),
        ];

        return View::make('setup.index')
            ->withPageTitle(trans('setup.setup'))
            ->withCacheDrivers($this->cacheDrivers)
            ->withQueueDrivers($this->queueDrivers)
            ->withMailDrivers($this->mailDrivers)
            ->withUserLanguage($userLanguage)
            ->withAppUrl(Request::root())
            ->withCacheConfig($cacheConfig)
            ->withSessionConfig($sessionConfig)
            ->withQueueConfig($queueConfig)
            ->withMailConfig($mailConfig);
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

        $v->sometimes('env.mail_host', 'required', function ($input) {
            return $input->env['mail_driver'] === 'smtp';
        });

        $v->sometimes(['env.mail_address', 'env.mail_username', 'env.mail_password'], 'required', function ($input) {
            return !in_array($input->env['mail_driver'], ['log', 'smtp']);
        });

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

            $setting = app(Repository::class);

            $settings = array_pull($postData, 'settings');

            foreach ($settings as $settingName => $settingValue) {
                $setting->set($settingName, $settingValue);
            }

            $envData = array_pull($postData, 'env');

            // Write the env to the .env file.
            dispatch(new UpdateConfigCommand($envData));

            if (Request::ajax()) {
                return Response::json(['status' => 1]);
            }

            return cachet_redirect('dashboard');
        }

        if (Request::ajax()) {
            return Response::json(['errors' => $v->getMessageBag()], 400);
        }

        return cachet_redirect('setup')->withInput()->withErrors($v->getMessageBag());
    }
}
