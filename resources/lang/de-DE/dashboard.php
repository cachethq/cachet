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

    'dashboard' => 'Dashboard',

    // Incidents
    'incidents' => [
        'title'                    => 'Ereignisse &amp; Termine',
        'incidents'                => 'Ereignisse',
        'logged'                   => '{0} Es gibt keine Ereignisse, gute Arbeit.|Du hast ein Ereignis gemeldet.|Du hast <strong>:count</strong> Ereignisse gemeldet.',
        'incident-create-template' => 'Vorlage erstellen',
        'incident-templates'       => 'Ereignis Vorlagen',
        'add'                      => [
            'title'   => 'Ereignis hinzufügen',
            'success' => 'Ereignis hinzugefügt.',
            'failure' => 'Es ist ein Fehler beim Hinzufügen der Störung aufgetreten. Bitte erneut versuchen.',
        ],
        'edit' => [
            'title'   => 'Ereignis bearbeiten',
            'success' => 'Ereignis aktualisiert.',
            'failure' => 'Es ist ein Fehler beim Editieren der Störung aufgetreten. Bitte erneut versuchen.',
        ],
        'delete' => [
            'success' => 'Das Ereignis wurde gelöscht und wird nicht mehr angezeigt.',
            'failure' => 'Die Störung konnte nicht gelöscht werden. Bitte versuche es erneut.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Vorfall Vorlagen',
            'add'   => [
                'title'   => 'Ereignisvorlage erstellen',
                'message' => 'Du solltest eine Ereignis-Vorlage hinzufügen.',
                'success' => 'Deine neue Ereignis-Vorlage wurde angelegt.',
                'failure' => 'Etwas ist mit der Ereignis-Vorlage schief gelaufen.',
            ],
            'edit' => [
                'title'   => 'Vorlage bearbeiten',
                'success' => 'Die Ereignis-Vorlage wurde aktualisiert.',
                'failure' => 'Etwas ist mit dem Aktualisieren der Ereignis-Vorlage schief gelaufen',
            ],
            'delete' => [
                'success' => 'Die Ereignis-Vorlage wurde gelöscht.',
                'failure' => 'Die Ereignis-Vorlage konnte nicht gelöscht werden. Bitte versuche es erneut.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Planmäßige Wartung',
        'logged'       => '{0} Es gibt keine Zeitpläne, gute Arbeit.|Du hast einen Zeitplan erstellt.|Du hast <strong>:count</strong> Zeitpläne gemeldet.',
        'scheduled_at' => 'Geplant am :timestamp',
        'add'          => [
            'title'   => 'Planmäßige Wartungsarbeiten hinzufügen',
            'success' => 'Zeitplan hinzugefügt.',
            'failure' => 'Etwas lief schief mit dem Hinzufügen des Zeitplans. Bitte versuchen Sie es erneut.',
        ],
        'edit' => [
            'title'   => 'Planmäßige Wartung bearbeiten',
            'success' => 'Zeitplan wurde aktualisiert!',
            'failure' => 'Etwas lief schief mit dem Editieren des Zeitplans. Bitte versuchen Sie es erneut.',
        ],
        'delete' => [
            'success' => 'Der Zeitplan wurde gelöscht und wird nicht auf Ihrer Statusseite angezeigt.',
            'failure' => 'Der Zeitplan konnte nicht gelöscht werden. Bitte versuchen Sie es erneut.',
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
            'failure' => 'Etwas ist schief gelaufen mit der Komponenten-Gruppe, versuchen sie es erneut.',
        ],
        'edit' => [
            'title'   => 'Komponente bearbeiten',
            'success' => 'Komponente aktualisiert.',
            'failure' => 'Etwas ist schief gelaufen mit der Komponenten-Gruppe, versuchen sie es erneut.',
        ],
        'delete' => [
            'success' => 'Die Komponente wurde gelöscht!',
            'failure' => 'Die Komponente konnte nicht gelöscht werden. Bitte versuche es erneut.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Komponentengruppe|Komponentengruppen',
            'no_components' => 'Sie sollten eine Komponentengruppe hinzufügen.',
            'add'           => [
                'title'   => 'Eine Komponentengruppe hinzufügen',
                'success' => 'Komponentengruppe hinzugefügt.',
                'failure' => 'Etwas ist mit der Komponentengruppe schiefgelaufen, versuchen sie es erneut.',
            ],
            'edit' => [
                'title'   => 'Komponentengruppe bearbeiten',
                'success' => 'Komponentengruppe aktualisiert.',
                'failure' => 'Etwas ist schief gelaufen mit der Komponenten-Gruppe, versuchen sie es erneut.',
            ],
            'delete' => [
                'success' => 'Die Komponentengruppe wurde gelöscht!',
                'failure' => 'Die Komponentengruppe konnte nicht gelöscht werden. Bitte versuche es erneut.',
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
            'failure' => 'Es lieft etwas mit der Metrik schief, bitte nochmal versuchen.',
        ],
        'edit' => [
            'title'   => 'Metrik bearbeiten',
            'success' => 'Metrik aktualisiert.',
            'failure' => 'Es lieft etwas mit der Metrik schief, bitte nochmal versuchen.',
        ],
        'delete' => [
            'success' => 'Die Metrik wurde gelöscht und wird nicht mehr angezeigt.',
            'failure' => 'Die Metrik konnte nicht gelöscht werden. Bitte versuche es erneut.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'      => 'Abonnenten',
        'description'      => 'Abonnenten erhalten E-Mail Updates, wenn Vorfälle erstellt oder Komponenten bearbeitet werden.',
        'verified'         => 'Bestätigt',
        'not_verified'     => 'Nicht Bestätigt',
        'subscriber'       => ':email, abonniert am :date',
        'no_subscriptions' => 'Aktualisierungen per E-Mail abonnieren',
        'add'              => [
            'title'   => 'Einen neuen Abonnenten hinzufügen',
            'success' => 'Abonnent hinzugefügt.',
            'failure' => 'Etwas lief schief dem dem Hinzufügen eines Abonnenten. Bitte versuchen Sie es erneut.',
            'help'    => 'Gib jeden Abonnenten in eine neue Zeile ein.',
        ],
        'edit' => [
            'title'   => 'Abonnent aktualisieren',
            'success' => 'Abonnent aktualisiert.',
            'failure' => 'Etwas lief schief mit dem Bearbeiten eines Abonnenten. Bitte versuchen sie es erneut.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Team',
        'member'      => 'Mitglied',
        'profile'     => 'Profil',
        'description' => 'Team Members will be able to add, modify &amp; edit components and incidents.',
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
            'title'   => 'Ein neues Teammitglied einladen',
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
            'analytics' => 'Analytics',
        ],
        'localization' => [
            'localization' => 'Standort',
        ],
        'customization' => [
            'customization' => 'Individualisierung',
            'header'        => 'Benutzerdefinierter HTML Header',
            'footer'        => 'Benutzerdefinierter HTML Footer',
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
            'backers'       => 'Wenn Du die weitere Entwicklung der Software unterstützen möchtest, kannst Du unter Cachet und GitHub einen Beitrag leisten.',
            'thank-you'     => 'Vielen Dank an jeden der :count Unterstützer.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Einloggen',
        'logged_in'  => 'Sie sind eingeloggt.',
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
        'news'             => 'Aktuelle Neuigkeiten',
        'news_subtitle'    => 'Erhalte die neusten Nachrichten',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Willkommen zu Deiner neuen Status Seite!',
        'message' => 'Ihre Statusseite ist fast fertig! Vielleicht möchten Sie diese zusätlichen Einstellungen vornehmen',
        'close'   => 'Bring mich direkt zu meinem Dashboard',
        'steps'   => [
            'component'  => 'Komponenten erstellen',
            'incident'   => 'Vorfälle erstellen',
            'customize'  => 'Anpassen',
            'team'       => 'Benutzer hinzufügen',
            'api'        => 'API Token generieren',
            'two-factor' => 'Zwei-Faktor-Authentifizierung',
        ],
    ],

];
