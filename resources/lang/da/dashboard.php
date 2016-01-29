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

    'dashboard' => 'Oversigt',

    // Incidents
    'incidents' => [
        'title'                    => 'Hændelser &amp; Planlagte',
        'incidents'                => 'Incidents',
        'logged'                   => '{0} Ingen åbne hændelser.|Der er en åben hændelse.|Der er <strong>:count</strong> åbne hændelser.',
        'incident-create-template' => 'Create Template',
        'incident-templates'       => 'Incident Templates',
        'add'                      => [
            'title'   => 'Opret hændelse',
            'success' => 'Hændelse oprettet.',
            'failure' => 'Noget gik galt i oprettelsen af hændelsen.',
        ],
        'edit' => [
            'title'   => 'Redigér hændelse',
            'success' => 'Hændelse opdateret.',
            'failure' => 'Noget gik galt med hændelsen.',
        ],
        'delete' => [
            'success' => 'The incident has been deleted and will not show on your status page.',
            'failure' => 'The incident could not be deleted. Please try again.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Hændelses skabeloner',
            'add'   => [
                'title'   => 'Opret hændelses skabelon',
                'message' => 'You should add an Incident Template.',
                'success' => 'Template created.',
                'failure' => 'Noget gik galt i oprettelsen af skabelonen.',
            ],
            'edit' => [
                'title'   => 'Redigér skabelon',
                'success' => 'Skabelonen opdateret!',
                'failure' => 'Noget gik galt under opdateringen af skabelonen',
            ],
            'delete' => [
                'success' => 'The tmplate has been deleted.',
                'failure' => 'The template could not be deleted. Please try again.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Planlagt vedligeholdelse',
        'logged'       => '{0} There are no schedules, good work.|You have logged one schedule.|You have reported <strong>:count</strong> schedules.',
        'scheduled_at' => 'Planlagt til :timestamp',
        'add'          => [
            'title'   => 'Tilføj planlagt nedetid',
            'success' => 'Nedetid tilføjet.',
            'failure' => 'Noget gik galt med oprettelsen.',
        ],
        'edit' => [
            'title'   => 'Redigér planlagt nedetid',
            'success' => 'Nedetid opreteret!',
            'failure' => 'Noget gik galt under opdateringen.',
        ],
        'delete' => [
            'success' => 'Planlagt nedetid fjernet og vil ikke længere blive vist.',
            'failure' => 'Planlagt nedetid kunne ikke slettes, prøv igen senere.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Components',
        'component_statuses' => 'Komponentstatus',
        'listed_group'       => 'Grouped under :name',
        'add'                => [
            'title'   => 'Tilføj komponent',
            'message' => 'Du bør tilføje en komponent.',
            'success' => 'Komponent tilføjet.',
            'failure' => 'Noget gik galt med oprettelsen.',
        ],
        'edit' => [
            'title'   => 'Redigér komponent',
            'success' => 'Komponent opdteret.',
            'failure' => 'Noget gik galt med komponenten.',
        ],
        'delete' => [
            'success' => 'Component deleted.',
            'failure' => 'The Component could not be deleted. Please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Komponentgruppe|Komponentgrupper',
            'no_components' => 'You should add a component group.',
            'add'           => [
                'title'   => 'Tilføj komponentgruppe',
                'success' => 'Komponentgruppe tilføjet.',
                'failure' => 'Noget gik galt med oprettelsen.',
            ],
            'edit' => [
                'title'   => 'Redigér komponentgruppe',
                'success' => 'Gruppe opdateret.',
                'failure' => 'Noget gik galt med komponentgruppen.',
            ],
            'delete' => [
                'success' => 'Component Group deleted.',
                'failure' => 'The Component Group could not be deleted. Please try again.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Grafer',
        'add'     => [
            'title'   => 'Opret graf',
            'message' => 'You should add a Metric.',
            'success' => 'Graf oprettet.',
            'failure' => 'Noget gik galt med oprettelsen.',
        ],
        'edit' => [
            'title'   => 'Redigér graf',
            'success' => 'Graf opdateret.',
            'failure' => 'Noget gik galt med målestokken.',
        ],
        'delete' => [
            'success' => 'The metric has been deleted and will not show on your status page.',
            'failure' => 'The metric could not be deleted. Please try again.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'  => 'Subscribers',
        'description'  => 'Abonnenter vil modtage notifikationer når hændelser oprettes.',
        'verified'     => 'Bekræftet',
        'not_verified' => 'Ej bekræftet',
        'add'          => [
            'title'   => 'Tilføj abonnent',
            'success' => 'Subscriber added.',
            'failure' => 'Noget gik galt med oprettelsen.',
        ],
        'edit' => [
            'title'   => 'Redigér abonnent',
            'success' => 'Subscriber updated.',
            'failure' => 'Something went wrong when updating.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Brugere',
        'member'      => 'Bruger',
        'profile'     => 'Profile',
        'description' => 'Brugere kan oprette og rette komponenter og hændelser.',
        'add'         => [
            'title'   => 'Tilføj bruger',
            'success' => 'Bruger tilføjet.',
            'failure' => 'Noget gik galt med oprettelsen.',
        ],
        'edit' => [
            'title'   => 'Redigér profil',
            'success' => 'Profile updated.',
            'failure' => 'Something went wrong when updating.',
        ],
        'delete' => [
            'success' => 'Slet bruger.',
            'failure' => 'Noget gik galt under sletningen af brugeren.',
        ],
        'invite' => [
            'title'   => 'Invite a New Team Member',
            'success' => 'The users invited.',
            'failure' => 'Something went wrong with the invite.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Settings',
        'app-setup' => [
            'app-setup'   => 'Applikationssetup',
            'images-only' => 'Only images may be uploaded.',
            'too-big'     => 'Filen du prøvede at uploade er for stort, billet skal være mindre end :size',
        ],
        'analytics' => [
            'analytics' => 'Analytics',
        ],
        'localization' => [
            'localization' => 'Localization',
        ],
        'security' => [
            'security'   => 'Security',
            'two-factor' => 'Brugere uden two-factor login',
        ],
        'stylesheet' => [
            'stylesheet' => 'Stylesheet',
        ],
        'theme' => [
            'theme' => 'Theme',
        ],
        'edit' => [
            'success' => 'Indstillingerne er gemt.',
            'failure' => 'Settings could not be saved.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Login',
        'logged_in'  => 'You\'re logged in.',
        'welcome'    => 'Velkommen tilbage',
        'two-factor' => 'Indtast venligst din log ind nøgle',
    ],

    // Sidebar footer
    'help'        => 'Help',
    'status_page' => 'Status Siden',
    'logout'      => 'Logout',

    // Notifications
    'notifications' => [
        'notifications' => 'Notifications',
        'awesome'       => 'Fedt!',
        'whoops'        => 'Whoops!',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welcome to your status page!',
        'message' => 'Din statusside er nærmest klar! Måske du skulle gennemgå disse ekstra indstillinger',
        'close'   => 'Til oversigtssiden tak.',
        'steps'   => [
            'component'  => 'Opret Komponent',
            'incident'   => 'Opret hændelse',
            'customize'  => 'Customize',
            'team'       => 'Tilføj bruger',
            'api'        => 'Generer API nøgle',
            'two-factor' => 'Two Factor Log ind',
        ],
    ],

];
