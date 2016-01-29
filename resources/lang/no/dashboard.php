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
            'title'   => 'Add an Incident',
            'success' => 'Hendelse lagt til.',
            'failure' => 'Noe gikk galt med hendelsen.',
        ],
        'edit' => [
            'title'   => 'Edit an Incident',
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
                'title'   => 'Create an Incident Template',
                'message' => 'You should add an Incident Template.',
                'success' => 'Mal opprettet.',
                'failure' => 'Noe gikk galt med hendelsesmalen.',
            ],
            'edit' => [
                'title'   => 'Edit Template',
                'success' => 'Mal har blitt oppdatert!',
                'failure' => 'Noe gikk galt under oppdatering av hendelsesmal',
            ],
            'delete' => [
                'success' => 'The tmplate has been deleted.',
                'failure' => 'The template could not be deleted. Please try again.',
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
            'title'   => 'Add a Component',
            'message' => 'Du burde legge til en komponent.',
            'success' => 'Komponent lagt til.',
            'failure' => 'Noe gikk galt med komponenten.',
        ],
        'edit' => [
            'title'   => 'Edit a Component',
            'success' => 'Komponent oppdatert.',
            'failure' => 'Noe gikk galt med komponenten.',
        ],
        'delete' => [
            'success' => 'Component deleted.',
            'failure' => 'The Component could not be deleted. Please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Komponentgruppe | Komponentgrupper',
            'no_components' => 'Du burde legge til en komponentgruppe.',
            'add'           => [
                'title'   => 'Add a Component Group',
                'success' => 'Komponentgruppe lagt til.',
                'failure' => 'Noe gikk galt med komponentgruppen.',
            ],
            'edit' => [
                'title'   => 'Edit a Component Group',
                'success' => 'Komponentgruppe oppdatert.',
                'failure' => 'Noe gikk galt med komponentgruppen.',
            ],
            'delete' => [
                'success' => 'Component Group deleted.',
                'failure' => 'The Component Group could not be deleted. Please try again.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Beregninger',
        'add'     => [
            'title'   => 'Create a Metric',
            'message' => 'You should add a Metric.',
            'success' => 'Beregning opprettet.',
            'failure' => 'Noe gikk galt med beregningen.',
        ],
        'edit' => [
            'title'   => 'Edit a Metric',
            'success' => 'Beregning oppdatert.',
            'failure' => 'Noe gikk galt med beregningen.',
        ],
        'delete' => [
            'success' => 'The metric has been deleted and will not show on your status page.',
            'failure' => 'The metric could not be deleted. Please try again.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'  => 'Subscribers',
        'description'  => 'Subscribers will receive email updates when incidents are created.',
        'verified'     => 'Verified',
        'not_verified' => 'Not Verified',
        'add'          => [
            'title'   => 'Add a New Subscriber',
            'success' => 'Subscriber added.',
            'failure' => 'Noe gikk galt med komponenten.',
        ],
        'edit' => [
            'title'   => 'Update Subscriber',
            'success' => 'Subscriber updated.',
            'failure' => 'Something went wrong when updating.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Team',
        'member'      => 'Bruker',
        'profile'     => 'Profil',
        'description' => 'Team Members will be able to add, modify &amp; edit components and incidents.',
        'add'         => [
            'title'   => 'Add a New Team Member',
            'success' => 'Team member added.',
            'failure' => 'Something went wrong with the user.',
        ],
        'edit' => [
            'title'   => 'Update Profile',
            'success' => 'Profile updated.',
            'failure' => 'Something went wrong when updating.',
        ],
        'delete' => [
            'success' => 'User deleted.',
            'failure' => 'Something went wrong when deleting this user.',
        ],
        'invite' => [
            'title'   => 'Invite a New Team Member',
            'success' => 'The users invited.',
            'failure' => 'Something went wrong with the invite.',
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
