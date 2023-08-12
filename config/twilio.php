<?php

return [

    /*
    |--------------------------------------------------------------------------
    | SMS "From" Number
    |--------------------------------------------------------------------------
    |
    | This configuration option defines the phone number that will be used as
    | the "from" number for all outgoing text messages. You should provide
    | the number you have already reserved within your TWILIO dashboard.
    |
    */

    'sms_from' => env('TWILIO_SMS_FROM'),

    /*
    |--------------------------------------------------------------------------
    | API Credentials
    |--------------------------------------------------------------------------
    |
    | The following configuration options contain your API credentials, which
    | may be accessed from your TWILIO dashboard. These credentials may be
    | used to authenticate with the TWILIO API so you may send messages.
    |
    */

    'api_sid' => env('TWILIO_SID'),

    'api_token' => env('TWILIO_TOKEN'),

    /*
    |--------------------------------------------------------------------------
    | Application Identifiers
    |--------------------------------------------------------------------------
    |
    | Adding an application name and version may assist you in identifying
    | problems with your application or when viewing analytics for your
    | application's API usage within the dedicated TWILIO dashboards.
    |
    */

    'app' => [
        'name' =>  env('TWILIO_APP_NAME', 'Laravel'),
        'version' => env('TWILIO_APP_VERSION', '1.1.2'),
    ],

];
