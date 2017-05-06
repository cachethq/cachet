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
            1 => 'Operasioneel',
            2 => 'Prestasieprobleme',
            3 => 'Gedeeltelike Onderbreking',
            4 => 'Groot Onderbreking',
        ],
        'group' => [
            'other' => 'Other Components',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'         => 'No incidents reported',
        'past'         => 'Vorige Voorvalle',
        'stickied'     => 'Stickied Incidents',
        'scheduled'    => 'Geskeduleerde Instandhouding',
        'scheduled_at' => ', scheduled :timestamp',
        'posted'       => 'Posted :timestamp',
        'status'       => [
            1 => 'Onder die Loep',
            2 => 'Geïdentifiseerd',
            3 => 'Hou Dop',
            4 => 'Opgelos',
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
        'regenerate' => 'Regenerate API Key',
        'revoke'     => 'Revoke API Key',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Last Hour',
            'hourly'    => 'Afgelope 12 Uur',
            'weekly'    => 'Weekliks',
            'monthly'   => 'Maandeliks',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe'   => 'Subscribe to get the updates',
        'unsubscribe' => 'Unsubscribe at :link',
        'button'      => 'Teken aan',
        'manage'      => [
            'no_subscriptions' => 'You\'re currently subscribed to all updates.',
            'my_subscriptions' => 'You\'re currently subscribed to the following updates.',
        ],
        'email' => [
            'subscribe'          => 'Subscribe to email updates.',
            'subscribed'         => 'You\'ve been subscribed to email notifications, please check your email to confirm your subscription.',
            'verified'           => 'Your email subscription has been confirmed. Thank you!',
            'manage'             => 'Bestuur Subskripsies',
            'unsubscribe'        => 'Unsubscribe from email updates.',
            'unsubscribed'       => 'Your email subscription has been cancelled.',
            'failure'            => 'Something went wrong with the subscription.',
            'already-subscribed' => 'Cannot subscribe :email because they\'re already subscribed.',
        ],
    ],

    'signup' => [
        'title'    => 'Teken Aan',
        'username' => 'Username',
        'email'    => 'EPos',
        'password' => 'Wagwoord',
        'success'  => 'U rekening is geskep.',
        'failure'  => 'Something went wrong with the signup.',
    ],

    'system' => [
        'update' => 'There is a newer version of Cachet available. You can learn how to update <a href="https://docs.cachethq.io/docs/updating-cachet">here</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Maak toe',
        'subscribe' => [
            'title'  => 'Subscribe to component updates',
            'body'   => 'Enter your email address to subscribe to updates for this component. If you\'re already subscribed, you\'ll already receive emails for this component.',
            'button' => 'Teken aan',
        ],
    ],

    // Other
    'home'            => 'Tuiste',
    'description'     => 'Stay up to date with the latest service updates from :app.',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Times are shown in :timezone.',
    'about_this_site' => 'About This Site',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];