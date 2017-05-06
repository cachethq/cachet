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
            0 => 'Unbekannt',
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
        'none'         => 'Es liegen keine Ereignisse vor',
        'past'         => 'Vergangene Ereignisse',
        'stickied'     => 'Angepinnte Vorfälle',
        'scheduled'    => 'Geplante Wartungen',
        'scheduled_at' => ', geplant :timestamp',
        'posted'       => 'Veröffentlicht :timestamp',
        'status'       => [
            1 => 'Untersuchungen laufen',
            2 => 'Identifiziert',
            3 => 'Unter Beobachtung',
            4 => 'Behoben',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => 'Bevorstehend',
            1 => 'In Bearbeitung',
            2 => 'Abgeschlossen',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] System funktioniert einwandfrei|[2,Inf] Alle Systeme funktionieren einwandfrei',
        'bad'   => '[0,1] System hat momentan Probleme|[2,Inf] Mehrere Systeme haben momentan Probleme',
        'major' => '[0,1] System hat ein schwerwiegendes Problem|[2,Inf] Mehrere Systeme haben ein schwerwiegendes Problem',
    ],

    'api' => [
        'regenerate' => 'API-Schlüssel erneuern',
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
        'subscribe'   => 'Abonnieren Sie um die neuesten Updates zu erhalten.',
        'unsubscribe' => 'Deabonnieren unter :link',
        'button'      => 'Abonnieren',
        'manage'      => [
            'no_subscriptions' => 'Du hast im Augenblick alle Updates abonniert.',
            'my_subscriptions' => 'Du hast im Augenblick folgende Updates abonniert.',
        ],
        'email' => [
            'subscribe'          => 'Aktualisierungen per E-Mail abonnieren.',
            'subscribed'         => 'Sie haben E-Mail-Benachrichtigungen abonniert, überprüfen Sie bitte Ihre E-Mail, um Ihr Abonnement zu bestätigen.',
            'verified'           => 'Ihre E-Mail-Abonnement ist bestätigt worden. Danke!',
            'manage'             => 'Verwalte deine Abonnements',
            'unsubscribe'        => 'Abonnement widerrufen.',
            'unsubscribed'       => 'Ihre E-Mail-Abonnement wurde beendet.',
            'failure'            => 'Beim aktivieren des Abonnements ist ein Fehler aufgetreten.',
            'already-subscribed' => 'Abonnement für :email konnte nicht registriert werden, da die E-Mail Adresse schon registriert ist.',
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
    'description'     => 'Bleiben sie auf dem Laufenden mit den neuesten Service-Updates von :app.',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Uhrzeiten werden in :timezone angezeigt.',
    'about_this_site' => 'Über diese Seite',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status-Feed',

];