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
        'title'                    => 'Ereignisse & Wartungsarbeiten',
        'incidents'                => 'Ereignisse',
        'logged'                   => '{0}Es gibt keine Ereignisse, gute Arbeit.|[1]Sie haben ein Ereignis gemeldet.|[2,*]Sie haben <strong>:count</strong> Ereignisse gemeldet.',
        'incident-create-template' => 'Vorlage erstellen',
        'incident-templates'       => 'Ereignisvorlagen',
        'updates'                  => [
            'title'   => 'Ereignisaktualisierungen für :incident',
            'count'   => '{0}Keine Aktualisierung|[1]Eine Aktualisierung|[2]Zwei Aktualisierungen|[3,*]Mehrere Aktualisierungen',
            'add'     => [
                'title'   => 'Ereignisaktualisierung erstellen',
                'success' => 'Ihre Aktualisierung wurde erstellt.',
                'failure' => 'Etwas ist mit der Aktualisierung des Ereignisses schief gelaufen.',
            ],
            'edit' => [
                'title'   => 'Ereignisaktualisierung bearbeiten',
                'success' => 'Ereignis wurde aktualisiert.',
                'failure' => 'Etwas ist mit der Aktualisierung des Ereignisses schief gelaufen.',
            ],
        ],
        'reported_by'              => 'Erstellt :timestamp von :user',
        'add'                      => [
            'title'   => 'Ereignis hinzufügen',
            'success' => 'Ereignis hinzugefügt.',
            'failure' => 'Es ist ein Fehler beim Hinzufügen des Ereignisses aufgetreten. Bitte versuchen Sie es erneut.',
        ],
        'edit' => [
            'title'   => 'Ereignis bearbeiten',
            'success' => 'Ereignis aktualisiert.',
            'failure' => 'Es ist ein Fehler beim Bearbeiten des Ereignisses aufgetreten. Bitte versuchen Sie es erneut.',
        ],
        'delete' => [
            'success' => 'Das Ereignis wurde gelöscht und wird nicht mehr angezeigt.',
            'failure' => 'Das Ereignis konnte nicht gelöscht werden. Bitte versuchen Sie es erneut.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Ereignisvorlagen',
            'add'   => [
                'title'   => 'Ereignisvorlage erstellen',
                'message' => 'Erstellen Sie Ihre erste Ereignisvorlage.',
                'success' => 'Ihre neue Ereignisvorlage wurde angelegt.',
                'failure' => 'Etwas ist mit der Ereignisvorlage schief gelaufen.',
            ],
            'edit' => [
                'title'   => 'Vorlage bearbeiten',
                'success' => 'Die Ereignisvorlage wurde aktualisiert.',
                'failure' => 'Etwas ist mit dem Aktualisieren der Ereignisvorlage schief gelaufen',
            ],
            'delete' => [
                'success' => 'Die Ereignisvorlage wurde gelöscht.',
                'failure' => 'Die Ereignisvorlage konnte nicht gelöscht werden. Bitte versuchen Sie es erneut.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Wartungsarbeiten',
        'logged'       => '{0}Es gibt keine geplanten Wartungsarbeiten, gute Arbeit.|[1]Sie haben einen Eintrag erstellt.|[2,*]Sie haben <strong>:count</strong> Einträge erstellt.',
        'scheduled_at' => 'Geplant am :timestamp',
        'add'          => [
            'title'   => 'Wartungsarbeiten hinzufügen',
            'success' => 'Wartungsarbeiten hinzugefügt.',
            'failure' => 'Etwas ist mit dem Hinzufügen des Zeitplans schief gelaufen. Bitte versuchen Sie es erneut.',
        ],
        'edit' => [
            'title'   => 'Planmäßige Wartungarbeiten bearbeiten',
            'success' => 'Wartungsarbeiten wurden aktualisiert.',
            'failure' => 'Etwas ist mit dem Bearbeiten der Wartungsarbeiten schief gelaufen. Bitte versuchen Sie es erneut.',
        ],
        'delete' => [
            'success' => 'Der Eintrag für die Wartungsarbeiten wurde gelöscht und wird nicht auf Ihrer Statusseite angezeigt.',
            'failure' => 'Der Eintrag für die Wartungsarbeiten konnte nicht gelöscht werden. Bitte versuchen Sie es erneut.',
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
            'failure' => 'Etwas ist schief gelaufen mit der Komponentengruppe. Bitte versuchen Sie es erneut.',
        ],
        'edit' => [
            'title'   => 'Komponente bearbeiten',
            'success' => 'Komponente aktualisiert.',
            'failure' => 'Etwas ist schief gelaufen mit der Komponentengruppe. Bitte versuchen Sie es erneut.',
        ],
        'delete' => [
            'success' => 'Die Komponente wurde gelöscht!',
            'failure' => 'Die Komponente konnte nicht gelöscht werden. Bitte versuchen Sie es erneut.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Komponentengruppe|Komponentengruppen',
            'no_components' => 'Sie sollten eine Komponentengruppe hinzufügen.',
            'add'           => [
                'title'   => 'Komponentengruppe hinzufügen',
                'success' => 'Komponentengruppe hinzugefügt.',
                'failure' => 'Etwas ist schief gelaufen mit der Komponentengruppe. Bitte versuchen Sie es erneut.',
            ],
            'edit' => [
                'title'   => 'Komponentengruppe bearbeiten',
                'success' => 'Komponentengruppe aktualisiert.',
                'failure' => 'Etwas ist schief gelaufen mit der Komponentengruppe. Bitte versuche Sie es erneut.',
            ],
            'delete' => [
                'success' => 'Die Komponentengruppe wurde gelöscht!',
                'failure' => 'Die Komponentengruppe konnte nicht gelöscht werden. Bitte versuchen Sie es erneut.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metriken',
        'add'     => [
            'title'   => 'Metrik erstellen',
            'message' => 'Du solltest eine Metrik hinzufügen.',
            'success' => 'Metrik erstellt.',
            'failure' => 'Es ist etwas schief gelaufen mit der Metrik. Bitte versuchen Sie es erneut.',
        ],
        'edit' => [
            'title'   => 'Metrik bearbeiten',
            'success' => 'Metrik aktualisiert.',
            'failure' => 'Es ist etwas schief gelaufen mit der Metrik. Bitte versuchen Sie es erneut.',
        ],
        'delete' => [
            'success' => 'Die Metrik wurde gelöscht und wird nicht mehr angezeigt.',
            'failure' => 'Die Metrik konnte nicht gelöscht werden. Bitte versuchen Sie es erneut.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'          => 'Abonnenten',
        'description'          => 'Abonnenten erhalten E-Mail-Benachrichtigungen, wenn Ereignisse erstellt oder Komponenten bearbeitet werden.',
        'description_disabled' => 'Um diese Funktion nutzen zu können, müssen Sie zulassen, dass sich Nutzer für Benachrichtigungen anmelden dürfen.',
        'verified'             => 'Bestätigt',
        'not_verified'         => 'Nicht Bestätigt',
        'subscriber'           => ':email, abonniert am :date',
        'no_subscriptions'     => 'Aktualisierungen per E-Mail abonnieren',
        'global'               => 'Alles abonniert',
        'add'                  => [
            'title'   => 'Neuen Abonnenten hinzufügen',
            'success' => 'Abonnent hinzugefügt.',
            'failure' => 'Etwas ist schief gelaufen mit dem Hinzufügen eines Abonnenten. Bitte versuchen Sie es erneut.',
            'help'    => 'Tragen Sie jeden Abonnenten in eine neue Zeile ein.',
        ],
        'edit' => [
            'title'   => 'Abonnent aktualisieren',
            'success' => 'Abonnent aktualisiert.',
            'failure' => 'Etwas ist schief gelaufen mit dem Bearbeiten eines Abonnenten. Bitte versuchen Sie es erneut.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Team',
        'member'      => 'Mitglied',
        'profile'     => 'Profil',
        'description' => 'Teammitglieder können Komponenten und Ereignisse hinzufügen und verändern.',
        'add'         => [
            'title'   => 'Neues Teammitglied hinzufügen',
            'success' => 'Teammitglied hinzugefügt.',
            'failure' => 'Teammitglied konnte nicht hinzugefügt werden. Bitte versuchen Sie es erneut.',
        ],
        'edit' => [
            'title'   => 'Profil aktualisieren',
            'success' => 'Profil aktualisiert.',
            'failure' => 'Etwas lief schief mit dem Aktualisieren des Profils. Bitte versuchen Sie es erneut.',
        ],
        'delete' => [
            'success' => 'Benutzer aktualisiert.',
            'failure' => 'Teammitglied konnte nicht hinzugefügt werden. Bitte versuchen Sie es erneut.',
        ],
        'invite' => [
            'title'   => 'Neues Teammitglied einladen',
            'success' => 'Eine Einladung wurde verschickt',
            'failure' => 'Diese Einladung konnte nicht versendet werden. Bitte versuchen Sie es erneut.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Einstellungen',
        'app-setup' => [
            'app-setup'   => 'Anwendungsinstallation',
            'images-only' => 'Es können nur Bilder hochgeladen werden.',
            'too-big'     => 'Die von Ihnen hochgeladene Datei ist zu groß. Sie können Dateien bis zu einer Maximalgröße von :size hochladen.',
        ],
        'analytics' => [
            'analytics' => 'Analytik',
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
            'signature'      => 'Benutzerdefinierte HTML E-Mail Signatur',
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
            'failure' => 'Einstellungen konnten nicht gespeichert werden.',
        ],
        'credits' => [
            'credits'       => 'Danksagungen',
            'contributors'  => 'Unterstützer',
            'license'       => 'Cachet ist ein BSD-3-lizensiertes Open Source-Projekt, veröffentlicht von <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => 'Unterstützer & Sponsoren',
            'backers'       => 'Wenn Sie die Entwicklung der Software unterstützen möchten, können Sie unter <a href="https://patreon.com/jbrooksuk" target="_blank">Cachet Patreon</a> einen Beitrag leisten.',
            'thank-you'     => 'Vielen Dank an jeden der :count Unterstützer.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Anmelden',
        'logged_in'  => 'Sie sind angemeldet.',
        'welcome'    => 'Willkommen zurück!',
        'two-factor' => 'Bitte geben Sie Ihren Token ein.',
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
        'support_subtitle' => 'Unterstützen Sie uns unter <strong><a href="https://patreon.com/jbrooksuk" target="_blank">Patreon</a></strong>!',
        'news'             => 'Aktuelle Neuigkeiten',
        'news_subtitle'    => 'Erhalten Sie die neusten Nachrichten',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Willkommen zu Ihrer Statusseite!',
        'message' => 'Ihre Statusseite ist fast fertig! Vielleicht möchten Sie diese zusätzlichen Einstellungen konfigurieren',
        'close'   => 'Gehe einfach direkt zu meinem Dashboard',
        'steps'   => [
            'component'  => 'Komponenten erstellen',
            'incident'   => 'Ereignis erstellen',
            'customize'  => 'Seite anpassen',
            'team'       => 'Benutzer hinzufügen',
            'api'        => 'API-Schlüssel generieren',
            'two-factor' => 'Zwei-Faktor-Authentifizierung',
        ],
    ],

];
