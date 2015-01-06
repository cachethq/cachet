<?php

namespace CachetHQ\Cachet\Http\Controllers;

use CachetHQ\Cachet\Models\Service;
use CachetHQ\Cachet\Services\Notifications\SlackNotifier;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;

class NotificationController extends Controller
{
    public function __construct()
    {
    }
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
}
