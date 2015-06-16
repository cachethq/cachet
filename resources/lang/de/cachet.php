<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    // Components
    'components' => [
        'status' => [
            1 => 'Funktionsfähig',
            2 => 'Performance Probleme',
            3 => 'Teilweise Ausfall',
            4 => 'größerer Ausfall',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'keine Vorfälle.',
        'past'          => 'vergangene Vorfälle',
        'previous_week' => 'letzte Woche',
        'next_week'     => 'nächste Woche',
        'none'          => 'keine Vorfälle',
        'status'        => [
            0 => '',
            1 => 'Untersuchung läuft',
            2 => 'Problem identifiziert',
            3 => 'Problem unter Beobachtung',
            4 => 'Problem behoben',
        ],
    ],

    // Service Status
    'service' => [
        'good' => 'Alle Systeme laufen.',
        'bad'  => 'Bei einigen System sind Fehler aufgetreten.',
    ],

    'api' => [
        'regenerate' => 'API-Schlüssel generieren',
        'revoke'     => 'API-Schlüssel löschen',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'hourly'  => 'Hourly',
            'daily'   => 'Daily',
            'monthly' => 'Monthly',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Subscribe to get the most recent updates.',
        'button'    => 'Subscribe',
        'email'     => [
            'subscribe'    => 'Subscribe to email updates.',
            'subscribed'   => 'You\'ve been subscribed to email notifications, please check your email to confirm your subscription.',
            'verified'     => 'Your email subscription has been confirmed. Thank you!',
            'unsubscribe'  => 'Unsuscribe from email updates.',
            'unsubscribed' => 'Your email subscription has been cancelled.',
            'failure'      => 'Something went wrong with the subscription.',
            'verify'       => [
                'text'           => "Please confirm your email subscription to :app_name status updates.\n:link\nThank you, :app_name",
                'html-preheader' => 'Please confirm your email subscription to :app_name status updates.',
                'html'           => '<p>Please confirm your email subscription to :app_name status updates.</p><p>:link</p><p>Thank you, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "New maintenance has been scheduled on :app_name.\nThank you, :app_name",
                'html-preheader' => 'New maintenance has been scheduled on :app_name.',
                'html'           => '<p>New maintenance has been scheduled on :app_name.</p><p>Thank you, :app_name</p>',
            ],
            'incident' => [
                'text'           => "New incident has been reported on :app_name.\nThank you, :app_name",
                'html-preheader' => 'New incident has been reported on :app_name.',
                'html'           => '<p>New incident has been reported on :app_name.</p><p>Thank you, :app_name</p>',
            ],
        ],
    ],

    // Other
    'powered_by'      => ':app Status-Seite via <a href="https://cachethq.io">Cachet</a>.',
    'about_this_site' => 'Über diese Seite',
    'rss-feed'        => 'RSS Feed',
    'atom-feed'       => 'Atom Feed',
    'feed'            => 'Status Feed',

];
