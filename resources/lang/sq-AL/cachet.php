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
    // Components
    'components' => [
        'last_updated' => 'Last updated :timestamp',
        'status'       => [
            0 => 'Unknown',
            1 => 'Funksionim',
            2 => 'Çështje të performancës',
            3 => 'Ndërprerje e pjesshëm',
            4 => 'Ndërprerje Kryesore',
        ],
        'group' => [
            'other' => 'Other Components',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'         => 'No incidents reported',
        'past'         => 'Past Incidents',
        'stickied'     => 'Stickied Incidents',
        'scheduled'    => 'Mirëmbajtje planifikuar',
        'scheduled_at' => ', planifiko :timestamp',
        'posted'       => 'Posted :timestamp',
        'status'       => [
            1 => 'Hetimin',
            2 => 'Identifikohet',
            3 => 'Shikim',
            4 => 'Rregulluar',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => 'Upcoming',
            1 => 'In Progress',
            2 => 'Complete',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] System operational|[2,Inf] All systems are operational',
        'bad'   => '[0,1] The system is experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The system is experiencing major issues|[2,Inf] Some systems are experiencing major issues',
    ],

    'api' => [
        'regenerate' => 'Rikrijo çelësin e API-t',
        'revoke'     => 'Refuzo çelësin e API-t',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Last Hour',
            'hourly'    => 'Last 12 Hours',
            'weekly'    => 'Week',
            'monthly'   => 'Month',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe'   => 'Subscribe to get the updates',
        'unsubscribe' => 'Unsubscribe at :link',
        'button'      => 'Subscribe',
        'manage'      => [
            'no_subscriptions' => 'You\'re currently subscribed to all updates.',
            'my_subscriptions' => 'You\'re currently subscribed to the following updates.',
        ],
        'email' => [
            'subscribe'          => 'Subscribe to email updates.',
            'subscribed'         => 'You\'ve been subscribed to email notifications, please check your email to confirm your subscription.',
            'verified'           => 'Your email subscription has been confirmed. Thank you!',
            'manage'             => 'Manage your subscription',
            'unsubscribe'        => 'Unsubscribe from email updates.',
            'unsubscribed'       => 'Your email subscription has been cancelled.',
            'failure'            => 'Something went wrong with the subscription.',
            'already-subscribed' => 'Cannot subscribe :email because they\'re already subscribed.',
        ],
    ],

    'signup' => [
        'title'    => 'Sign Up',
        'username' => 'Emri i përdoruesit',
        'email'    => 'Email',
        'password' => 'Fjalëkalimi',
        'success'  => 'Your account has been created.',
        'failure'  => 'Something went wrong with the signup.',
    ],

    'system' => [
        'update' => 'There is a newer version of Cachet available. You can learn how to update <a href="https://docs.cachethq.io/docs/updating-cachet">here</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Close',
        'subscribe' => [
            'title'  => 'Subscribe to component updates',
            'body'   => 'Enter your email address to subscribe to updates for this component. If you\'re already subscribed, you\'ll already receive emails for this component.',
            'button' => 'Subscribe',
        ],
    ],

    // Other
    'home'            => 'Home',
    'description'     => 'Stay up to date with the latest service updates from :app.',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Times are shown in :timezone.',
    'about_this_site' => 'About This Site',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];