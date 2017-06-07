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
        'last_updated' => 'Letztes Update :timestamp',
        'status'       => [
            1 => 'Funktionsfähig',
            2 => 'Leistungsprobleme',
            3 => 'Teilweiser Ausfall',
            4 => 'Schwerwiegende Störung',
        ],
        'group' => [
            'other' => 'Andere Komponenten',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Es liegen keine Vorfälle vor',
        'past'          => 'Vergangene Vorfälle',
        'previous_week' => 'Vorherige Woche',
        'next_week'     => 'Nächste Woche',
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
        'good'  => '[0,1] Alle Systeme sind online|[2,Inf] Alle Systeme funktionieren',
        'bad'   => '[0,1] Es liegen Störungen vor|[2,Inf] Mehrere Systeme sind von Störungen betroffen',
        'major' => '[0,1] Es liegen schwerwiegende Störungen vor|[2,Inf] Mehrere Systeme haben ein schwerwiegendes Problem',
    ],

    'api' => [
        'regenerate' => 'API-Schlüssel neu generieren',
        'revoke'     => 'API-Schlüssel widerrufen',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Letzte Stunde',
            'hourly'    => 'Letzte 12 Stunden',
            'weekly'    => 'Wöchentlich',
            'monthly'   => 'Monatlich',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Abonnieren Sie um die neuesten Updates zu erhalten.',
        'button'    => 'Abonnieren',
        'manage'    => [
            'no_subscriptions' => 'Sie haben alle Updates abonniert.',
            'my_subscriptions' => 'Sie haben folgende Updates abonniert.',
        ],
        'email' => [
            'subscribe'          => 'Aktualisierungen per E-Mail abonnieren.',
            'subscribed'         => 'Sie haben E-Mail-Benachrichtigungen abonniert, überprüfen Sie bitte Ihre E-Mail, um Ihr Abonnement zu bestätigen.',
            'verified'           => 'Ihre E-Mail-Abonnement ist bestätigt worden. Danke!',
            'manage'             => 'Verwalte deine Abonnements',
            'unsubscribe'        => 'Von E-Mail-Updates deabonnieren.',
            'unsubscribed'       => 'Ihre E-Mail-Abonnement wurde gekündigt.',
            'failure'            => 'Etwas ist mit dem Abonnement schief gelaufen.',
            'already-subscribed' => 'Abonnement für :email konnte nicht registriert werden, da die E-Mail Adresse schon registriert ist.',
            'verify'             => [
                'text'   => "Bitte bestätigen Siee die E-Mail-Benachrichtigungen unter :app_name status updates.\n:link",
                'html'   => '<p>Bitte bestätigen Sie Ihre E-Mail-Benachrichtigung unter :app_name status updates.</p>',
                'button' => 'Abonnement bestätigen',
            ],
            'maintenance' => [
                'subject' => '[Planmäßige Wartung] :name',
            ],
            'incident' => [
                'subject' => '[Neuer Vorfall] :status: :name',
            ],
            'component' => [
                'subject'       => 'Komponent Status Update',
                'text'          => 'Der Komponent :component_name hatte eine Status-Änderung. Der Komponent befindet sich nun im :component_human_status.\nDanke, :app_name',
                'html'          => '<p>Der Komponent :component_name hatte eine Status-Änderung. Der Komponent befindet sich nun im :component_human_status.</p><p>Danke, :app_name</p>',
                'tooltip-title' => 'Neuigkeiten für :component_name abonnieren.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text' => "Sie wurden in das Team :app_name Status Seite eingeladen. Um sich zu registrieren, klicken Sie auf den Link.\n:link\nDanke, :app_name",
                'html' => '<p>Sie wurden in das Team :app_name Status Seite eingeladen. Um sich zu registrieren klicken Sie auf den Link.</p><p><a href=":link">:link</a></p><p>Danke, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Registrieren',
        'username' => 'Benutzername',
        'email'    => 'E-Mail',
        'password' => 'Passwort',
        'success'  => 'Ihr Konto wurde erfolgreich erstellt.',
        'failure'  => 'Mit der Registrierung ist etwas schief gelaufen.',
    ],

    'system' => [
        'update' => 'Es ist eine neuere Version von Cachet verfügbar. Lernen Sie <a href="https://docs.cachethq.io/docs/updating-cachet">hier</a>!, wie Sie updaten können!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Schließen',
        'subscribe' => [
            'title'  => 'Abonniere die Komponenten-Updates',
            'body'   => 'Geben Sie Ihre E-Mail Adresse ein, um Updates für diesen Komponenten zu erhalten. Wenn Sie bereits Abonnent sind, erhalten Sie schon Updates für diesen Komponenten.',
            'button' => 'Abonnieren',
        ],
    ],

    // Other
    'home'            => 'Startseite',
    'description'     => 'Bleiben sie up to date mit den neuesten Service-Updates von: app.',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'Über diese Seite',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status-Feed',

];
