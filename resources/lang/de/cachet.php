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
            4 => 'Schwerer Ausfall',
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
        'good'  => '[0,1] System funktioniert|[2,Inf] Alle Systeme funktionieren',
        'bad'   => '[0,1] System hat momentan Probleme|[2,Inf] Mehrere Systeme haben momentan Probleme',
        'major' => '[0,1] System hat ein schwerwiegendes Problem|[2,Inf] Mehrere Systeme haben ein schwerwiegendes Problem',
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
            'no_subscriptions' => 'Du hast im Augenblick alle Updates abonniert.',
            'my_subscriptions' => 'Du hast im Augenblick folgende Updates abonniert.',
        ],
        'email' => [
            'subscribe'          => 'Aktualisierungen per E-Mail abonnieren.',
            'subscribed'         => 'Sie haben E-Mail-Benachrichtigungen abonniert, überprüfen Sie bitte Ihre E-Mail, um Ihr Abonnement zu bestätigen.',
            'verified'           => 'Ihre E-Mail-Abonnement ist bestätigt worden. Danke!',
            'manage'             => 'Verwalte deine Abonnements.',
            'unsubscribe'        => 'Von E-Mail-Updates deabonnieren.',
            'unsubscribed'       => 'Ihre E-Mail-Abonnement wurde gekündigt.',
            'failure'            => 'Etwas ist mit dem Abonnement schief gelaufen.',
            'already-subscribed' => 'Abonnement für :email konnte nicht registriert werden, da die E-Mail Adresse schon registriert ist.',
            'verify'             => [
                'text'           => "Bitte bestätigen Sie Ihre E-Mail-Abonnement zu :app_name Status-Aktualisierungen.\n:link\nDanke, :app_name",
                'html-preheader' => 'Bitte bestätigen Sie Ihre E-Mail-Abonnement zu :app_name Status-Aktualisierungen.',
                'html'           => '<p>Bestätigen Sie bitte Ihr E-Mail-Abonnement für :app_name Statusaktualisierungen.</p><p><a href=":link">:link</a></p><p>Danke, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "Neue Wartung wurde für :app_name geplant.\nDanke, :app_name",
                'html-preheader' => 'Neue Wartung wurde für :app_name geplant.',
                'html'           => '<p>Neue Wartung wurde für :app_name geplant.</p>',
            ],
            'incident' => [
                'text'           => "Ein neuer Vorfall wurde auf :app_name berichtet.\nDanke, :app_name",
                'html-preheader' => 'Ein neuer Vorfall wurde über :app_name berichtet.',
                'html'           => '<p>Ein neuer Vorfall wurde über :app_name berichtet.</p> <p>Danke, :app_name</p>',
            ],
            'component' => [
                'subject'        => 'Komponent Status Update',
                'text'           => 'Der Komponent :component_name hatte eine Status-Änderung. Der Komponent befindet sich nun im :component_human_status.\nDanke, :app_name',
                'html-preheader' => 'Komponenten Update von :app_name',
                'html'           => '<p>Der Komponent :component_name hatte eine Status-Änderung. Der Komponent befindet sich nun im :component_human_status.</p><p>Danke, :app_name</p>',
                'tooltip-title'  => 'Neuigkeiten für :component_name abonnieren.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text'           => "Du wurdest in das Team :app_name Status Seite eingeladen. Um dich zu registrieren klicke den Link.\n:link\nDanke, :app_name",
                'html-preheader' => 'Du wurdest in das Team :app_name eingeladen.',
                'html'           => '<p>Du wurdest in das Team :app_name Status Seite eingeladen. Um dich zu registrieren klicke den Link.</p><p><a href=":link">:link</a></p><p>Danke, :app_name</p>',
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
        'update' => 'Es ist eine neuere Version von Cachet verfügbar. Lerne <a href="https://docs.cachethq.io/docs/updating-cachet">hier</a>!, wie du updaten kannst!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Schließen',
        'subscribe' => [
            'title'  => 'Abonniere die Komponenten-Updates',
            'body'   => 'Gib deine E-Mail Adresse ein, um Updates für diesen Komponenten zu erhalten. Wenn du bereits abonniert bist, erhälst du schon Updates für diesen Komponenten.',
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
