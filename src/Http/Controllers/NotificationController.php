<?php

namespace CachetHQ\Cachet\Http\Controllers;

use CachetHQ\Cachet\Models\Service;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class NotificationController extends Controller
{
    protected $subMenu = [];

    public function __construct()
    {
        $this->subMenu = [
            'slack' => [
                'title'  => trans('dashboard.notifications.slack.title'),
                'url'    => '/dashboard/notifications/slack',
                'icon'   => 'ion-gear-b',
                'active' => false,
            ],
            'twilio' => [
                'title'  => trans('dashboard.notifications.twilio.title'),
                'url'    => '/dashboard/notifications/twilio',
                'icon'   => 'ion-lock-combination',
                'active' => false,
            ],
        ];

        View::share('subMenu', $this->subMenu);

        View::share('subTitle', trans('dashboard.notifications.notifications'));
    }

    /**
     * Show Slack's configuration.
     *
     * @return \Illuminate\View\View
     */
    public function showSlack()
    {
        $slackConfiguration = Service::where('type', 'slack')->first();
        if (is_null($slackConfiguration)) {
            $slackConfiguration = new Service();
            $slackConfiguration->active = 0;
            $slackConfiguration->properties = [
                'endpoint'     => 'endpoint url',
                'channel'      => '#Channel',
                'username'     => 'BotName',
                'notifierName' => 'SlackNotifier',
            ];
        }

        $this->subMenu['slack']['active'] = true;

        return View::make('dashboard.notifications.index')->with([
            'pageTitle'  => trans('Notification configuration - Dashboard'),
            'subMenu'    => $this->subMenu,
            'partial'    => 'slack',
            'properties' => $slackConfiguration->properties,
            'active'     => $slackConfiguration->active,
        ]);
    }

    /**
     * Show Twilio's configuration.
     *
     * @return \Illuminate\View\View
     */
    public function showTwilio()
    {
        $twilioConfiguration = Service::where('type', 'twilio')->first();
        if (is_null($twilioConfiguration)) {
            $twilioConfiguration = new Service();
            $twilioConfiguration->active     = 0;
            $twilioConfiguration->properties = [
                'from'         => '+1',
                'to'           => '+1',
                'account_id'   => 'AccountSSI',
                'token'        => 'AuthToken',
                'notifierName' => 'TwilioNotifier',
            ];
        }
        $this->subMenu['twilio']['active'] = true;

        return View::make('dashboard.notifications.index')->with([
            'pageTitle'  => trans('Notification configuration - Dashboard'),
            'subMenu'    => $this->subMenu,
            'partial'    => 'twilio',
            'properties' => $twilioConfiguration->properties,
            'active'     => $twilioConfiguration->active,
        ]);
    }

    /**
     * Edit Slack configuration.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editSlack()
    {
        Service::unguard();
        $slackConfiguration = Service::firstOrCreate(['type' => 'slack']);
        $properties = [
            'endpoint'     => Binput::get('endpoint'),
            'channel'      => Binput::get('channel'),
            'username'     => Binput::get('username'),
            'notifierName' => 'SlackNotifier',
        ];

        $slackConfiguration->properties = $properties;
        $slackConfiguration->active = (Binput::get('active') == 1) ? 1 : 0;

        $slackConfiguration->save();

        return Redirect::back();
    }

    /**
     * Edit Twilio configuration.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editTwilio()
    {
        Service::unguard();
        $twilioConfiguration = Service::firstOrCreate(['type' => 'twilio']);
        $properties = [
            'token'        => Binput::get('token'),
            'from'         => Binput::get('from'),
            'to'           => Binput::get('to'),
            'account_id'   => Binput::get('account_id'),
            'notifierName' => 'TwilioNotifier',
        ];

        $twilioConfiguration->properties = $properties;
        $twilioConfiguration->active = (Binput::get('active') == 1) ? 1 : 0;

        $twilioConfiguration->save();

        return Redirect::back();
    }
}
