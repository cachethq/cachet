<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joseph.cohen@dinkbit.com>
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    'dashboard' => 'Dashboard',

    // Incidents
    'incidents' => [
        'incidents'                => 'Vorfälle',
        'logged'                   => '{0} Es gibt keine Vorfälle, gute Arbeit.|Sie haben ein Vorfall eingetragen.|Es gibt <strong>:count</strong> Vorfälle.',
        'incident-create-template' => 'Template anlegen',
        'add'                      => [
            'title'   => 'Vorfall hinzufügen',
            'success' => 'Vorfall hinzugefügt.',
            'failure' => 'Es ist ein Fehler bei dem Erstellen eines Vorfälles aufgetreten.',
        ],
        'edit' => [
            'title'   => 'Vorfall aktualisieren',
            'success' => 'Vorfall aktualisiert.',
            'failure' => 'Es ist ein Fehler bei der Aktualisierung des Vorfälles aufgetreten.',
        ],

        // Incident templates
        'templates' => [
            'add' => [
                'title'   => 'Vorfall-Template anlegen',
                'success' => 'Template angelegt.',
                'failure' => 'Es ist ein Fehler bei der Erstellung eines Templates aufgetreten.',
            ],
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Komponente|Komponenten',
        'component_statuses' => 'Komponenten-Statuus', # this is not a typo (statuus=plural)
        'add'                => [
            'title'   => 'Komponente hinzufügen',
            'message' => 'Sie sollten eine Komponente hinzufügen.',
            'success' => 'Komponente hinzugefügt.',
            'failure' => 'Es ist ein Fehler bei der Erstellung der Komponente aufgetreten.',
        ],
        'edit' => [
            'title'   => 'Komponente aktualisieren',
            'success' => 'Komponente aktualisiert.',
            'failure' => 'Es ist ein Fehler bei der Aktualisierung der Komponente aufgetreten.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Komponenten-Gruppe|Komponenten-Gruppen',
            'no_components' => 'You should add a component group.',
            'add'           => [
                'title'   => 'Komponenten-Gruppe hinzufügen',
                'success' => 'Komponenten-Gruppe hinzugefügt.',
                'failure' => 'Es ist ein Fehler bei der Erstellung einer Komponenten-Gruppe aufgetreten.',
            ],
            'edit' => [
                'title'   => 'Edit a component group',
                'success' => 'Component group updated.',
                'failure' => 'Something went wrong with the component group.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metrics',
        'add'     => [
            'title'   => 'Einen Metrik-Punkt anlegen',
            'success' => 'Metrik-Punkt angelegt.',
            'failure' => 'Es ist ein Fehler bei der Erstellung eines Metrik-Punktes aufgetreten.',
        ],
        'edit' => [
            'title'   => 'Edit a metric',
            'success' => 'Metric updated.',
            'failure' => 'Something went wrong with the metric.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Team',
        'member'      => 'Mitglied',
        'profile'     => 'Profil',
        'description' => 'Team-Mitgleider können Komponenten und Vorfälle hinzufügen und modifizieren.',
        'add'         => [
            'title'   => 'Team-Mitglied hinzufügen',
            'success' => 'Team-Mitglied hinzugefügt.',
            'failure' => 'Es ist ein Fehler bei der Erstellung eines neuen Team-Mitglieds aufgetreten.',
        ],
        'edit'        => [
            'title'   => 'Profil aktualisieren',
            'success' => 'Profile aktualisiert.',
            'failure' => 'Es ist ein Fehler bei der Aktualisierung des Profils aufgetreten.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Einstellungen',
        'app-setup' => [
            'app-setup'   => 'Setup',
            'images-only' => 'Es dürfen nur Bild-Dateien hochgeladen werden.',
            'too-big'     => 'Die Datei die Sie hochgeladen haben ist zu groß. Die Datei muss kleiner als :size sein.',
        ],
        'security' => [
            'security' => 'Sicherheit',
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
    ],

    // Login
    'login' => [
        'login'      => 'Login',
        'logged_in'  => 'Sie sind angemeldet.',
        'welcome'    => 'Willkommen zurück!',
        'two-factor' => 'Bitte geben Sie den Wert Ihres Authentifikations-Tokens ein.',
    ],

    // Sidebar footer
    'help'        => 'Hilfe',
    'status_page' => 'Status-Seite',
    'logout'      => 'Logout',

    // Notifications
    'notifications'     => [
        'notifications' => 'Benachrichtigungen',
        'awesome'       => 'Großartig.',
        'whoops'        => 'Oops.',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welcome to Cachet',
        'message' => 'Your status page is almost ready! You might want to configure these extra settings',
        'close'   => 'Just go straight to my dashboard',
        'steps'   => [
            'component'  => 'Create components',
            'incident'   => 'Create incidents',
            'customize'  => 'Customize your Cachet Status Page.',
            'team'       => 'Add users to your team.',
            'api'        => 'Generate API token.',
            'two-factor' => 'Enable Two Factor Authetication.',
        ],
    ],

];
