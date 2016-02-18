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

    'dashboard' => 'Dashbord',

    // Incidents
    'incidents' => [
        'title'                    => 'Hendelser &amp; Timeplan',
        'incidents'                => 'Hendelser',
        'logged'                   => '{0} Det er ingen hendelser, bra jobbet.|Du har en logget hendelse.|Du har rapportert <strong>:count</strong> hendelser.',
        'incident-create-template' => 'Opprett mal',
        'incident-templates'       => 'Hendelsesmaler',
        'add'                      => [
            'title'   => 'Report an incident',
            'success' => 'Hendelse lagt til.',
            'failure' => 'Noe gikk galt med hendelsen.',
        ],
        'edit' => [
            'title'   => 'Edit an incident',
            'success' => 'Hendelse oppdatert.',
            'failure' => 'Noe gikk halt med hendelsen.',
        ],
        'delete' => [
            'success' => 'The incident has been deleted and will not show on your status page.',
            'failure' => 'The incident could not be deleted. Please try again.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Hendelsesmaler',
            'add'   => [
                'title'   => 'Create an incident template',
                'message' => 'You should add an incident template.',
                'success' => 'Mal opprettet.',
                'failure' => 'Noe gikk galt med hendelsesmalen.',
            ],
            'edit' => [
                'title'   => 'Edit Template',
                'success' => 'Mal har blitt oppdatert!',
                'failure' => 'Noe gikk galt under oppdatering av hendelsesmal',
            ],
            'delete' => [
                'success' => 'The incident template has been deleted.',
                'failure' => 'The incident template could not be deleted. Please try again.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Planlagt vedlikehold',
        'logged'       => '{0} There are no schedules, good work.|You have logged one schedule.|You have reported <strong>:count</strong> schedules.',
        'scheduled_at' => 'Planlagt til :timestamp',
        'add'          => [
            'title'   => 'Legg til planlagt vedlikehold',
            'success' => 'Plan lagt til.',
            'failure' => 'Noe gikk galt ved opprettelse av plan.',
        ],
        'edit' => [
            'title'   => 'Endre planlagt vedlikehold',
            'success' => 'Plan har blitt oppdatert!',
            'failure' => 'Noe gikk galt ved redigering av plan.',
        ],
        'delete' => [
            'success' => 'PLanen har blitt slettet og vil ikke vises på din statusside.',
            'failure' => 'Planen kunne ikke slettes. Vennligst forsøk igjen.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Komponenter',
        'component_statuses' => 'Komponentstatus',
        'listed_group'       => 'Gruppert under :name',
        'add'                => [
            'title'   => 'Add a component',
            'message' => 'Du burde legge til en komponent.',
            'success' => 'Komponent lagt til.',
            'failure' => 'Noe gikk galt med komponenten.',
        ],
        'edit' => [
            'title'   => 'Edit a component',
            'success' => 'Komponent oppdatert.',
            'failure' => 'Noe gikk galt med komponenten.',
        ],
        'delete' => [
            'success' => 'The component has been deleted!',
            'failure' => 'The component could not be deleted. Please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Komponentgruppe | Komponentgrupper',
            'no_components' => 'Du burde legge til en komponentgruppe.',
            'add'           => [
                'title'   => 'Add a component group',
                'success' => 'Komponentgruppe lagt til.',
                'failure' => 'Noe gikk galt med komponentgruppen.',
            ],
            'edit' => [
                'title'   => 'Edit a component group',
                'success' => 'Komponentgruppe oppdatert.',
                'failure' => 'Noe gikk galt med komponentgruppen.',
            ],
            'delete' => [
                'success' => 'Component group has been deleted!',
                'failure' => 'The component group could not be deleted. Please try again.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Beregninger',
        'add'     => [
            'title'   => 'Create a metric',
            'message' => 'You should add a metric.',
            'success' => 'Beregning opprettet.',
            'failure' => 'Noe gikk galt med beregningen.',
        ],
        'edit' => [
            'title'   => 'Edit a metric',
            'success' => 'Beregning oppdatert.',
            'failure' => 'Noe gikk galt med beregningen.',
        ],
        'delete' => [
            'success' => 'The metric has been deleted and will no longer display on your status page.',
            'failure' => 'The metric could not be deleted. Please try again.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'  => 'Subscribers',
        'description'  => 'Subscribers will receive email updates when incidents are created.',
        'verified'     => 'Verified',
        'not_verified' => 'Not verified',
        'add'          => [
            'title'   => 'Add a new subscriber',
            'success' => 'Subscriber has been added!',
            'failure' => 'Noe gikk galt med komponenten.',
        ],
        'edit' => [
            'title'   => 'Update subscriber',
            'success' => 'Subscriber has been updated!',
            'failure' => 'The subscriber could not be updated. Please try again.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Team',
        'member'      => 'Bruker',
        'profile'     => 'Profil',
        'description' => 'Team Members will be able to add, modify &amp; edit components and incidents.',
        'add'         => [
            'title'   => 'Add a new team member',
            'success' => 'Team member has been added!',
            'failure' => 'The team member could not be added. Please try again.',
        ],
        'edit' => [
            'title'   => 'Update profile',
            'success' => 'Team member has been updated!',
            'failure' => 'The team member could not be updated. Please try again.',
        ],
        'delete' => [
            'success' => 'Team member has been deleted and will no longer have access to the dashboard!',
            'failure' => 'The team member could not be added. Please try again.',
        ],
        'invite' => [
            'title'   => 'Invite a new team member',
            'success' => 'An invite has been sent',
            'failure' => 'The invite could not be sent. Please try again.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Innstillinger',
        'app-setup' => [
            'app-setup'   => 'Applikasjonsoppsett',
            'images-only' => 'Only images may be uploaded.',
            'too-big'     => 'The file you uploaded is too big. Upload an image smaller than :size',
        ],
        'analytics' => [
            'analytics' => 'Analytics',
        ],
        'localization' => [
            'localization' => 'Localization',
        ],
        'security' => [
            'security'   => 'Sikkerhet',
            'two-factor' => 'Users without two-factor authentication',
        ],
        'stylesheet' => [
            'stylesheet' => 'Stilark',
        ],
        'theme' => [
            'theme' => 'Tema',
        ],
        'edit' => [
            'success' => 'Settings saved.',
            'failure' => 'Settings could not be saved.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Login',
        'logged_in'  => 'You\'re logged in.',
        'welcome'    => 'Welcome Back!',
        'two-factor' => 'Please enter your token.',
    ],

    // Sidebar footer
    'help'        => 'Hjelp',
    'status_page' => 'Statusside',
    'logout'      => 'Logg ut',

    // Notifications
    'notifications' => [
        'notifications' => 'Varslinger',
        'awesome'       => 'Awesome.',
        'whoops'        => 'Whoops.',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welcome to your status page!',
        'message' => 'Your status page is almost ready! You might want to configure these extra settings',
        'close'   => 'Just go straight to my dashboard',
        'steps'   => [
            'component'  => 'Create components',
            'incident'   => 'Create incidents',
            'customize'  => 'Customize',
            'team'       => 'Add users',
            'api'        => 'Generate API token',
            'two-factor' => 'Two Factor Authentication',
        ],
    ],

];
