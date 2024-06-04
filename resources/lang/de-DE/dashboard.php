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

    'dashboard'          => 'Dashboard',
    'writeable_settings' => 'Das Cachet-Konfigurationsverzeichnis ist nicht beschreibbar. Bitte stellen Sie sicher, dass <code>./ bootstrap/cachet</code> vom Webserver beschreibbar ist.',

    // Incidents
    'incidents' => [
        'title'                    => 'Vorfälle & Wartungsarbeiten',
        'incidents'                => 'Ereignisse',
        'logged'                   => '{0}Es gibt keine Ereignisse, gute Arbeit.|[1]Du hast ein Ereignis gemeldet.|[2,*]Du hast <strong>:count</strong> Ereignisse gemeldet.',
        'incident-create-template' => 'Vorlage erstellen',
        'incident-templates'       => 'Ereignis-Vorlagen',
        'updates'                  => [
            'title'   => 'Vorfall-Updates für :incident',
            'count'   => '{0}Keine Updates|[1]Ein Update|[2]Zwei Updates|[3,*]Mehrere Updates',
            'add'     => [
                'title'   => 'Vorfall-Update erstellen',
                'success' => 'Dein Vorfall-Update wurde erstellt.',
                'failure' => 'Beim Erstellen des Vorfalls ist ein Fehler aufgetreten. Versuche es bitte erneut.',
            ],
            'edit' => [
                'title'   => 'Vorfall-Update bearbeiten',
                'success' => 'Vorfall wurde aktualisiert.',
                'failure' => 'Beim Bearbeiten des Vorfalls ist ein Fehler aufgetreten. Versuche es bitte erneut.',
            ],
        ],
        'reported_by'              => 'Veröffentlicht :timestamp von :user',
        'add'                      => [
            'title'   => 'Ereignis hinzufügen',
            'success' => 'Ereignis hinzugefügt.',
            'failure' => 'Beim Erstellen des Ereignisses ist ein Fehler aufgetreten. Versuche es bitte erneut.',
        ],
        'edit' => [
            'title'   => 'Ereignis bearbeiten',
            'success' => 'Ereignis aktualisiert.',
            'failure' => 'Beim Bearbeiten des Ereignisses ist ein Fehler aufgetreten. Versuche es bitte erneut.',
        ],
        'delete' => [
            'success' => 'Das Ereignis wurde gelöscht und wird nicht mehr angezeigt.',
            'failure' => 'Beim Löschen des Ereignisses ist ein Fehler aufgetreten. Versuche es bitte erneut.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Ereignis-Vorlagen',
            'add'   => [
                'title'   => 'Ereignisvorlage erstellen',
                'message' => 'Noch keine Ereignis-Vorlage erstellt.',
                'success' => 'Deine neue Ereignis-Vorlage wurde angelegt.',
                'failure' => 'Beim Erstellen der Ereignis-Vorlage ist ein Fehler aufgetreten. Versuche es bitte erneut.',
            ],
            'edit' => [
                'title'   => 'Vorlage bearbeiten',
                'success' => 'Die Ereignis-Vorlage wurde aktualisiert.',
                'failure' => 'Beim Bearbeiten der Ereignis-Vorlage ist ein Fehler aufgetreten. Versuche es bitte erneut.',
            ],
            'delete' => [
                'success' => 'Die Ereignis-Vorlage wurde gelöscht.',
                'failure' => 'Beim Löschen der Ereignis-Vorlage ist ein Fehler aufgetreten. Versuche es bitte erneut.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Wartungsarbeiten',
        'logged'       => '{0}Es gibt keine geplanten Wartungen, gute Arbeit.|[1]Du hast einen Eintrag erstellt.|[2,*]Du hast <strong>:count</strong> Einträge erstellt.',
        'scheduled_at' => 'Geplant am :timestamp',
        'add'          => [
            'title'   => 'Wartungsarbeiten hinzufügen',
            'success' => 'Wartungsarbeiten hinzugefügt.',
            'failure' => 'Beim Erstellen des Zeitplans ist ein Fehler aufgetreten. Versuche es bitte erneut.',
        ],
        'edit' => [
            'title'   => 'Planmäßige Wartung bearbeiten',
            'success' => 'Wartungsarbeiten wurden aktualisiert!',
            'failure' => 'Beim Bearbeiten des Zeitplans ist ein Fehler aufgetreten. Versuche es bitte erneut.',
        ],
        'delete' => [
            'success' => 'Der Zeitplan wurde gelöscht und wird nicht auf Ihrer Statusseite angezeigt.',
            'failure' => 'Beim Löschen des Zeitplans ist ein Fehler aufgetreten. Versuche es bitte erneut.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Komponenten',
        'component_statuses' => 'Komponentenstatus',
        'listed_group'       => 'Gruppenname :name',
        'add'                => [
            'title'   => 'Komponente hinzufügen',
            'message' => 'Sie sollten eine Komponente erstellen.',
            'success' => 'Komponente erstellt.',
            'failure' => 'Beim Erstellen der Komponente ist ein Fehler aufgetreten. Versuche es bitte erneut.',
        ],
        'edit' => [
            'title'   => 'Komponente bearbeiten',
            'success' => 'Komponente aktualisiert.',
            'failure' => 'Beim Bearbeiten der Komponente ist ein Fehler aufgetreten. Versuche es bitte erneut.',
        ],
        'delete' => [
            'success' => 'Die Komponente wurde gelöscht!',
            'failure' => 'Beim Löschen der Komponente ist ein Fehler aufgetreten. Versuche es bitte erneut.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Komponentengruppe|Komponentengruppen',
            'no_components' => 'Sie sollten eine Komponentengruppe hinzufügen.',
            'add'           => [
                'title'   => 'Eine Komponentengruppe hinzufügen',
                'success' => 'Komponentengruppe hinzugefügt.',
                'failure' => 'Beim Erstellen der Komponentengruppe ist ein Fehler aufgetreten. Versuche es bitte erneut.',
            ],
            'edit' => [
                'title'   => 'Komponentengruppe bearbeiten',
                'success' => 'Komponentengruppe aktualisiert.',
                'failure' => 'Beim Bearbeiten der Komponentengruppe ist ein Fehler aufgetreten. Versuche es bitte erneut.',
            ],
            'delete' => [
                'success' => 'Die Komponentengruppe wurde gelöscht!',
                'failure' => 'Beim Löschen der Komponentengruppe ist ein Fehler aufgetreten. Versuche es bitte erneut.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metriken',
        'add'     => [
            'title'   => 'Metrik erstellen',
            'message' => 'Noch keine Metrik erstellt.',
            'success' => 'Metrik erstellt.',
            'failure' => 'Beim Erstellen der Metrik ist ein Fehler aufgetreten. Versuche es bitte erneut.',
        ],
        'edit' => [
            'title'   => 'Metrik bearbeiten',
            'success' => 'Metrik aktualisiert.',
            'failure' => 'Beim Bearbeiten der Metrik ist ein Fehler aufgetreten. Versuche es bitte erneut.',
        ],
        'delete' => [
            'success' => 'Die Metrik wurde gelöscht und wird nicht mehr angezeigt.',
            'failure' => 'Beim Löschen der Metrik ist ein Fehler aufgetreten. Versuche es bitte erneut.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'          => 'Abonnenten',
        'description'          => 'Abonnenten erhalten E-Mail Updates, wenn Vorfälle erstellt oder Komponenten bearbeitet werden.',
        'description_disabled' => 'Um diese Funktion nutzen zu können, musst du zulassen, dass sich Personen für Benachrichtigungen anmelden dürfen.',
        'verified'             => 'Bestätigt',
        'not_verified'         => 'Nicht bestätigt',
        'subscriber'           => ':email, abonniert am :date',
        'no_subscriptions'     => 'Aktualisierungen per E-Mail abonnieren',
        'global'               => 'Alles abonniert',
        'add'                  => [
            'title'   => 'Einen neuen Abonnenten hinzufügen',
            'success' => 'Abonnent hinzugefügt.',
            'failure' => 'Beim Hinzufügen des Abonnenten ist ein Fehler aufgetreten. Versuche es bitte erneut.',
            'help'    => 'Gib jeden Abonnenten in eine neue Zeile ein.',
        ],
        'edit' => [
            'title'   => 'Abonnent aktualisieren',
            'success' => 'Abonnent aktualisiert.',
            'failure' => 'Beim Bearbeiten des Abonnenten ist ein Fehler aufgetreten. Versuche es bitte erneut.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Team',
        'member'      => 'Mitglied',
        'profile'     => 'Profil',
        'description' => 'Teammitglieder werden die Möglichkeit haben, Komponente sowie Vorfälle hinzuzufügen und zu verändern.',
        'add'         => [
            'title'   => 'Neues Teammitglied hinzufügen',
            'success' => 'Teammitglied hinzugefügt.',
            'failure' => 'Beim Hinzufügen des Teammitglieds ist ein Fehler aufgetreten. Versuche es bitte erneut.',
        ],
        'edit' => [
            'title'   => 'Profil aktualisieren',
            'success' => 'Profil aktualisiert.',
            'failure' => 'Beim Bearbeiten des Teammitglieds ist ein Fehler aufgetreten. Versuche es bitte erneut.',
        ],
        'delete' => [
            'success' => 'Benutzer aktualisiert.',
            'failure' => 'Beim Löschen des Teammitglieds ist ein Fehler aufgetreten. Versuche es bitte erneut.',
        ],
        'invite' => [
            'title'   => 'Ein neues Teammitglied einladen',
            'success' => 'Eine Einladung wurde verschickt',
            'failure' => 'Beim Einladen des Teammitglieds ist ein Fehler aufgetreten. Versuche es bitte erneut.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Einstellungen',
        'app-setup' => [
            'app-setup'   => 'Anwendungsinstallation',
            'images-only' => 'Es können nur Bilder hochgeladen werden.',
            'too-big'     => 'Die hochgeladene Datei ist zu groß. Es sind nur Dateien mit einer Maximalgröße von :size erlaubt.',
        ],
        'analytics' => [
            'analytics' => 'Analytics',
        ],
        'log' => [
            'log' => 'Verlauf',
        ],
        'localization' => [
            'localization' => 'Standort',
        ],
        'customization' => [
            'customization' => 'Individualisierung',
            'header'        => 'Benutzerdefinierter HTML Header',
            'footer'        => 'Benutzerdefinierter HTML Footer',
        ],
        'mail' => [
            'mail'  => 'E-Mail-Einstellungen',
            'test'  => 'Test',
            'email' => [
                'subject' => 'Test-Benachrichtigung von Cachet',
                'body'    => 'Dies ist eine Test-Benachrichtigung von Cachet.',
            ],
        ],
        'security' => [
            'security'   => 'Sicherheit',
            'two-factor' => 'Nutzer ohne Zwei-Faktor-Authentifizierung',
        ],
        'stylesheet' => [
            'stylesheet' => 'Stylesheet',
        ],
        'theme' => [
            'theme' => 'Theme',
        ],
        'edit' => [
            'success' => 'Einstellungen gespeichert.',
            'failure' => 'Beim Speichern der Einstellungen ist ein Fehler aufgetreten.',
        ],
        'credits' => [
            'credits'       => 'Danksagungen',
            'contributors'  => 'Unterstützer',
            'license'       => 'Cachet ist ein BSD-3-lizensiertes Open Source-Projekt, veröffentlicht von <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => 'Unterstützer & Sponsoren',
            'backers'       => 'Wenn Du die Entwicklung der Software unterstützen möchtest, kannst Du unter <a href="https://patreon.com/jbrooksuk" target="_blank">Cachet Patreon</a> einen Beitrag leisten.',
            'thank-you'     => 'Vielen Dank an jeden der :count Unterstützer.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Einloggen',
        'logged_in'  => 'Sie sind eingeloggt.',
        'welcome'    => 'Willkommen zurück!',
        'two-factor' => 'Zwei-Faktor-Authentifizierung',
    ],

    // Sidebar footer
    'help'        => 'Hilfe',
    'status_page' => 'Statusseite',
    'logout'      => 'Abmelden',

    // Notifications
    'notifications' => [
        'notifications' => 'Benachrichtigungen',
        'awesome'       => 'Großartig.',
        'whoops'        => 'Hoppla.',
    ],

    // Widgets
    'widgets' => [
        'support'          => 'Cachet unterstützen',
        'support_subtitle' => 'Unterstütze uns auf <strong><a href="https://patreon.com/jbrooksuk" target="_blank">Patreon</a></strong>!',
        'news'             => 'Aktuelle Neuigkeiten',
        'news_subtitle'    => 'Erhalte die neusten Nachrichten',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Willkommen zu Deiner Status Seite!',
        'message' => 'Deine Statusseite ist fast fertig! Vielleicht möchtest Du diese zusätzlichen Einstellungen konfigurieren.',
        'close'   => 'Gehe einfach direkt zu meinem Dashboard',
        'steps'   => [
            'component'  => 'Komponenten erstellen',
            'incident'   => 'Ereignis erstellen',
            'customize'  => 'Seite anpassen',
            'team'       => 'Benutzer hinzufügen',
            'api'        => 'API Token generieren',
            'two-factor' => 'Zwei-Faktor-Authentifizierung',
        ],
    ],

];
