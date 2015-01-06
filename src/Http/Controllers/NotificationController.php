<?php

namespace CachetHQ\Cachet\Http\Controllers;

use CachetHQ\Cachet\Models\Service;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;

class NotificationController extends Controller
{

    /**
     *
     *
     */
    public function slack()
    {
        $properties = [
            'endpoint'     => Binput::get('slack_webhookurl'),
            'channel'      => Binput::get('slack_channel'),
            'username'     => Binput::get('slack_botname'),
            'notifierName' => 'SlackNotifier',
        ];
        $slack = new Service();
        $slack->properties = $properties;
        $slack->type = "slack";
        $slack->active = 1;
        $slack->save();
    }

    /**
     *
     *
     */
    public function twilio()
    {
        $properties = [
            'token'        => Binput::get('twilio_token'),
            'account_id'   => Binput::get('twilio_sid'),
            'from'         => Binput::get('twilio_from'),
            'to'           => Binput::get('twilio_to'),
            'notifierName' => 'TwilioNotifier'
        ];

        $twilio = new Service();
        $twilio->properties = $properties;
        $twilio->type= 'Twilio';
        $twilio->active = 1;
        $twilio->save();
    }
}
