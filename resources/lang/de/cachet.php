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
        'status' => [
            1 => 'Funktionsfähig',
            2 => 'Leistungsprobleme',
            3 => 'Teilweiser Ausfall',
            4 => 'Schwerer Ausfall',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Keine Vorfälle berichtet.',
        'past'          => 'Vergangene Vorfälle',
        'previous_week' => 'Vorherige Woche',
        'next_week'     => 'Nächste Woche',
        'none'          => 'Keine Vorfälle berichtet.',
        'scheduled'     => 'Geplante Wartungen',
        'scheduled_at'  => ', geplant :timestamp',
        'status'        => [
            0 => 'Geplant', // TODO: Hopefully remove this.
            1 => 'Untersuchungen laufen',
            2 => 'Identifiziert',
            3 => 'Unter Beobachtung',
            4 => 'Behoben',
        ],
    ],

    // Service Status
    'service' => [
        'good' => 'Alle Systeme sind funktionsfähig.',
        'bad'  => 'Einige Dienste arbeiten nicht ordnungsgemäß.',
    ],

    'api' => [
        'regenerate' => 'API-Schlüssel neu generieren',
        'revoke'     => 'API-Schlüssel widerrufen',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'hourly'  => 'Stündlich',
            'daily'   => 'Täglich',
            'monthly' => 'Monatlich',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Abonnieren Sie um die neuesten Updates zu erhalten.',
        'button'    => 'Abonnieren',
        'email'     => [
            'subscribe'    => 'Aktualisierungen per e-Mail abonnieren.',
            'subscribed'   => 'Sie haben e-Mail-Benachrichtigungen abonniert, überprüfen Sie bitte Ihre e-Mail, um Ihr Abonnement zu bestätigen.',
            'verified'     => 'Ihre e-Mail-Abonnement ist bestätigt worden. Danke!',
            'unsubscribe'  => 'Von e-Mail-Updates deabonnieren.',
            'unsubscribed' => 'Ihre e-Mail-Abonnement wurde gekündigt.',
            'failure'      => 'Etwas ist mit dem Abonnement schief gelaufen.',
            'verify'       => [
                'text'           => "Bitte bestätigen Sie Ihre e-Mail-Abonnement zu  :app_name Status-Aktualisierungen.\\n:link\\nDanke, :app_name",
                'html-preheader' => 'Bitte bestätigen Sie Ihre e-Mail-Abonnement zu  :app_name Status-Aktualisierungen.',
                'html'           => '',
            ],
            'maintenance' => [
                'text'           => "Neue Wartung wurde für :app_name geplant.\\nDanke, :app_name",
                'html-preheader' => 'Neue Wartung wurde für :app_name geplant.',
                'html'           => '',
            ],
            'incident' => [
                'text'           => "Ein neuer Vorfall wurde auf :app_name berichtet.\\nDanke, :app_name",
                'html-preheader' => 'Ein neuer Vorfall wurde über :app_name berichtet.',
                'html'           => '<p>Ein neuer Vorfall wurde über :app_name berichtet.</p> <p>Danke, :app_name</p>',
            ],
        ],
    ],

    // Other
    'powered_by'      => ':app Statusseite betrieben mit <a href="https://cachethq.github.io">Cachet</a>.',
    'about_this_site' => 'Über diese Seite',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status-Feed',

];
