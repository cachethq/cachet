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
        'last_updated' => 'Letzte Aktualisierung :timestamp',
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
        'select_all'   => 'Alles auswählen',
        'deselect_all' => 'Alles abwählen',
    ],

    // Incidents
    'incidents' => [
        'none'         => 'Es liegen keine Ereignisse vor',
        'past'         => 'Vergangene Ereignisse',
        'stickied'     => 'Angepinnte Ereignisse',
        'scheduled'    => 'Wartungsarbeiten',
        'scheduled_at' => ', geplant :timestamp',
        'posted'       => 'Veröffentlich :timestamp von :username',
        'posted_at'    => 'Veröffentlicht am :timestamp',
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
        'good'  => '[0,1]System funktioniert|[2,*]Alle Systeme funktionieren',
        'bad'   => '[0,1] Das System hat momentan Probleme|[2,*] Mehrere Systeme haben momentan Probleme',
        'major' => '[0,1] Das System hat ein schwerwiegendes Problem|[2,*] Mehrere Systeme haben ein schwerwiegendes Problem',
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
        'subscribe'           => 'Abonniere Status- und Ereignissaktualisierungen',
        'unsubscribe'         => 'Abmelden',
        'button'              => 'Abonnieren',
        'manage_subscription' => 'Abonnements verwalten',
        'manage'              => [
            'notifications'       => 'Benachrichtigungen',
            'notifications_for'   => 'Verwalten von Benachrichtigungen für',
            'no_subscriptions'    => 'Sie haben im Augenblick alle Aktualisierungen abonniert.',
            'update_subscription' => 'Abonnement von Aktualisierungen',
            'my_subscriptions'    => 'Sie haben im Augenblick folgende Aktualisierungen abonniert.',
            'manage_at_link'      => 'Verwalten Sie Ihre Abonnements unter :link',
        ],
        'email' => [
            'manage_subscription' => 'Wir haben Ihnen eine E-Mail geschickt. Bitte öffnen Sie den Link, um Ihre Abonnements zu verwalten.',
            'subscribe'           => 'Aktualisierungen per E-Mail abonnieren.',
            'subscribed'          => 'Sie haben E-Mail-Benachrichtigungen abonniert. Bitte überprüfen Sie Ihre E-Mails, um Ihr Abonnement zu bestätigen.',
            'updated-subscribe'   => 'Sie haben Ihre Abonnements erfolgreich aktualisiert.',
            'verified'            => 'Ihr E-Mail-Abonnement ist bestätigt worden. Danke!',
            'manage'              => 'Ihr Abonnement verwalten',
            'unsubscribe'         => 'Abonnements widerrufen.',
            'unsubscribed'        => 'Ihr E-Mail-Abonnement wurde beendet.',
            'failure'             => 'Beim Aktivieren des Abonnements ist ein Fehler aufgetreten.',
            'already-subscribed'  => 'Abonnement für :email konnte nicht registriert werden, da die E-Mail Adresse schon registriert ist.',
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
        'update' => 'Es ist eine neuere Version von Cachet verfügbar. Erfahren Sie <a href="https://docs.cachethq.io/docs/updating-cachet">hier</a>!, wie sie aktualisieren können!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Schließen',
        'subscribe' => [
            'title'  => 'Abonniere die Komponenten-Updates',
            'body'   => 'Tragen Sie Ihre E-Mail-Adresse ein, um Updates für diese Komponente zu erhalten. Wenn Sie diese Abonnement bereits abgeschlossen haben, erhalten Sie schon E-Mails für diese Komponente.',
            'button' => 'Abonnieren',
        ],
    ],

    // Meta descriptions
    'meta' => [
        'description' => [
            'incident'  => 'Details und Aktualisierung über das :name Ereigniss, das am :date aufgetreten ist.',
            'schedule'  => 'Details zu den geplanten Wartungsarbeiten :name beginnend ab :startDate',
            'subscribe' => 'Abonnieren Sie :app um Aktualisierungen von Ereignissen und geplanten Wartungsarbeiten zu erhalten.',
            'overview'  => 'Bleiben Sie auf dem Laufenden mit den neuesten Service-Aktualisierungen von :app.',
        ],
    ],

    // Other
    'home'            => 'Startseite',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Uhrzeiten werden in :timezone angezeigt.',
    'about_this_site' => 'Über diese Seite',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status-Feed',

];
