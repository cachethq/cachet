<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Dashboard Login Link
    |--------------------------------------------------------------------------
    |
    | Whether to show the dashboard link in the footer by default.
    |
    */

    'dashboard_login_link' => true,

    /*
    |--------------------------------------------------------------------------
    | Enable subscribers
    |--------------------------------------------------------------------------
    |
    | Whether to allow people to subscribe to the status page.
    |
    */

    'enable_subscribers' => true,

    /*
    |--------------------------------------------------------------------------
    | Automatic Localization
    |--------------------------------------------------------------------------
    |
    | Whether to automatically localize the status to the visitors default
    | browser language settings.
    |
    */

   'automatic_localization' => false,

    /*
    |--------------------------------------------------------------------------
    | Show Support for Cachet
    |--------------------------------------------------------------------------
    |
    | Whether to show the "Powered by Cachet" text in the footer.
    |
    */

    'show_support' => true,

    /*
     |--------------------------------------------------------------------------
     | Enable External Dependencies
     |--------------------------------------------------------------------------
     |
     | Whether to disable third-party dependencies.
     |
     */

    'enable_external_dependencies' => true,

   /*
    |--------------------------------------------------------------------------
    | Show the timezone
    |--------------------------------------------------------------------------
    |
    | Whether to show the status page timezone in the footer.
    |
    */

    'show_timezone' => false,

   /*
    |--------------------------------------------------------------------------
    | Skip subscriber verifications
    |--------------------------------------------------------------------------
    |
    | Whether to allow skipping of subscriber verifications.
    |
    */

    'skip_subscriber_verification' => false,

   /*
    |--------------------------------------------------------------------------
    | Only disrupted days
    |--------------------------------------------------------------------------
    |
    | Whether to only show days with incidents, or each day in the timeline.
    |
    */

    'only_disrupted_days' => false,
];
