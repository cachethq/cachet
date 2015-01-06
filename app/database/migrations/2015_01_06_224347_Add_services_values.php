<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use CachetHQ\Cachet\Models\Service;


class AddServicesValues extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$services = [
            [
                'type' => 'slack',
                'active' => 0,
                'properties' => [
                    'endpoint' => 'endpointUrl',
                    'channel' => '#general',
                    'username' => 'Bot',
                    'notifierName' => 'SlackNotifier',
                ]
            ],
            [
                'type' => 'twilio',
                'active' => 0,
                'properties' => [
                    'account_id' => 'Account SID',
                    'from' => '+1',
                    'to' => '+1',
                    'token' => 'Auth Token',
                    'notifierName' => 'TwilioNotifier',
                ]
            ]
        ];
        Model::unguard();
        foreach($services as $service)
        {
            Service::create($service);
        }
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
