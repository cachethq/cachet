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
        'incidents'                => 'Vorfälle',
        'logged'                   => '{0} Es gibt keine Vorfälle, gute Arbeit.|Du hast einen Vorfall gemeldet.|Du hast <strong>:count</strong> Vorfälle gemeldet.',
        'incident-create-template' => 'Vorlage erstellen',
        'incident-templates'       => 'Vorfall Vorlagen',
        'add'                      => [
            'title'   => 'Vorfall hinzufügen',
            'success' => 'Vorfall hinzugefügt.',
            'failure' => 'Es ist ein Fehler beim Hinzufügen der Störung aufgetreten. Bitte erneut versuchen.',
        ],
        'edit' => [
            'title'   => 'Vorfall bearbeiten',
            'success' => 'Vorfall aktualisiert.',
            'failure' => 'Es ist ein Fehler beim Editieren der Störung aufgetreten. Bitte erneut versuchen.',
        ],
        'delete' => [
            'success' => 'Der Vorfall wurde gelöscht und wird nicht mehr angezeigt.',
            'failure' => 'Die Störung konnte nicht gelöscht werden. Bitte versuche es erneut.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Vorfall Vorlagen',
            'add'   => [
                'title'   => 'Vorfallvorlage erstellen',
                'message' => 'Du solltest eine Vorfall-Vorlage hinzufügen.',
                'success' => 'Deine neue Störungsvorlage wurde angelegt.',
                'failure' => 'Etwas ist mit der Vorfallvorlage schiefgelaufen.',
            ],
            'edit' => [
                'title'   => 'Vorlage bearbeiten',
                'success' => 'Die Vorfallvorlage wurde aktualisiert.',
                'failure' => 'Etwas ist mit dem Updaten der Vorfallvorlage schiefgelaufen',
            ],
            'delete' => [
                'success' => 'Die Vorfall-Vorlage wurde gelöscht.',
                'failure' => 'Die Vorfall-Vorlage konnte nicht gelöscht werden. Bitte versuche es erneut.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Planmäßige Wartung',
        'logged'       => '{0} Es gibt keine Zeitpläne, gute Arbeit.|Du hast einen Zeitplan geloggt.|Du hast <strong>:count</strong> Zeitpläne gemeldet.',
        'scheduled_at' => 'Geplant am :timestamp',
        'add'          => [
            'title'   => 'Planmäßige Wartung hinzufügen',
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
        'listed_group'       => 'Gruppiert unter :name',
        'add'                => [
            'title'   => 'Komponente hinzufügen',
            'message' => 'Sie sollten eine Komponente erstellen.',
            'success' => 'Komponente erstellt.',
            'failure' => 'Etwas ist schief gelaufen mit der Komponente, versuchen sie es erneut.',
        ],
        'edit' => [
            'title'   => 'Komponente bearbeiten',
            'success' => 'Komponente aktualisiert.',
            'failure' => 'Etwas ist schief gelaufen mit der Komponente, versuchen sie es erneut.',
        ],
        'delete' => [
            'success' => 'Die Komponente wurde gelöscht!',
            'failure' => 'Die Komponente konnte nicht gelöscht werden. Bitte versuche es erneut.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Komponentgruppe|Komponentgruppen',
            'no_components' => 'Sie sollten eine Komponentengruppe hinzufügen.',
            'add'           => [
                'title'   => 'Eine Komponentengruppe hinzufügen',
                'success' => 'Komponentengruppe hinzugefügt.',
                'failure' => 'Etwas ist mit der Komponentengruppe schiefgelaufen, versuchen sie es erneut.',
            ],
            'edit' => [
                'title'   => 'Komponentengruppe bearbeiten',
                'success' => 'Komponentengruppe aktualisiert.',
                'failure' => 'Etwas ist mit der Komponentengruppe schiefgelaufen, versuchen sie es erneut.',
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
        'verified'         => 'Verifiziert',
        'not_verified'     => 'Nicht verifiziert',
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
        'description' => 'Teammitglieder werden die M&ouml;glichkeit haben, Komponente sowie Vorf&auml;lle hinzuzuf&uuml;gen und zu ver&auml;ndern.',
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
            'too-big'     => 'Die von Ihnen hochgeladene Datei ist zu groß. Laden Sie ein Bild welches kleiner als :size ist hoch',
        ],
        'analytics' => [
            'analytics' => 'Analytics',
        ],
        'localization' => [
            'localization' => 'Localization',
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
            'backers'       => 'If you\'d like to support future development, check out the CrowdIn and GitHub.',
            'thank-you'     => 'Vielen Dank an jeden der :count Unterstützer.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Anmelden',
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
        'welcome' => 'Willkommen zu Deiner Status Seite!',
        'message' => 'Ihre Statusseite ist fast fertig! Vielleicht möchten Sie diese zusätzlichen Einstellungen konfigurieren',
        'close'   => 'Gehe einfach direkt zu meinem Dashboard',
        'steps'   => [
            'component'  => 'Komponenten erstellen',
            'incident'   => 'Vorfälle erstellen',
            'customize'  => 'Personalisieren',
            'team'       => 'Benutzer hinzufügen',
            'api'        => 'API Token generieren',
            'two-factor' => 'Zwei-Faktor-Authentifizierung',
        ],
    ],

];
