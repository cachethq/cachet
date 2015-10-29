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
        'incidents'                => 'Hændelser',
        'logged'                   => '{0} Ingen åbne hændelser.|Der er en åben hændelse.|Der er <strong>:count</strong> åbne hændelser.',
        'incident-create-template' => 'Opret skabelon',
        'incident-templates'       => 'Hændelses skabeloner',
        'add'                      => [
            'title'   => 'Opret hændelse',
            'success' => 'Hændelse oprettet.',
            'failure' => 'Noget gik galt i oprettelsen af hændelsen.',
        ],
        'edit' => [
            'title'   => 'Redigér hændelse',
            'success' => 'Hændelse opdateret.',
            'failure' => 'Noget gik galt under opdateringen af hændelsen.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Hændelses skabeloner',
            'add'   => [
                'title'   => 'Opret hændelses skabelon',
                'success' => 'Skabelon oprettet.',
                'failure' => 'Noget gik galt i oprettelsen af skabelonen.',
            ],
            'edit' => [
                'title'   => 'Redigér skabelon',
                'success' => 'Skabelonen opdateret!',
                'failure' => 'Noget gik galt under opdateringen af skabelonen',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Planlagt nedetid',
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
        'components'         => 'Komponenter',
        'component_statuses' => 'Komponentstatus',
        'listed_group'       => 'Grupperet under :name',
        'add'                => [
            'title'   => 'Tilføj komponent',
            'message' => 'Du bør tilføje en komponent.',
            'success' => 'Komponent tilføjet.',
            'failure' => 'Noget gik galt med oprettelsen.',
        ],
        'edit' => [
            'title'   => 'Redigér komponent',
            'success' => 'Komponent opdteret.',
            'failure' => 'Noget gik galt under opdateringen.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Komponentgruppe|Komponentgrupper',
            'no_components' => 'Du bør tilføje en komponentgruppe.',
            'add'           => [
                'title'   => 'Tilføj komponentgruppe',
                'success' => 'Komponentgruppe tilføjet.',
                'failure' => 'Noget gik galt med oprettelsen.',
            ],
            'edit' => [
                'title'   => 'Redigér komponentgruppe',
                'success' => 'Gruppe opdateret.',
                'failure' => 'Noget gik galt under opdateringen.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Grafer',
        'add'     => [
            'title'   => 'Opret graf',
            'success' => 'Graf oprettet.',
            'failure' => 'Noget gik galt med oprettelsen.',
        ],
        'edit' => [
            'title'   => 'Redigér graf',
            'success' => 'Graf opdateret.',
            'failure' => 'Noget gik galt under opdateringen.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'  => 'Abonnenter',
        'description'  => 'Abonnenter vil modtage notifikationer når hændelser oprettes.',
        'verified'     => 'Bekræftet',
        'not_verified' => 'Ej bekræftet',
        'add'          => [
            'title'   => 'Tilføj abonnent',
            'success' => 'Abonnent tilføjet.',
            'failure' => 'Noget gik galt med oprettelsen.',
        ],
        'edit' => [
            'title'   => 'Redigér abonnent',
            'success' => 'Abonnent opdateret.',
            'failure' => 'Noget gik galt under opdateringen.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Brugere',
        'member'      => 'Bruger',
        'profile'     => 'Profil',
        'description' => 'Brugere kan oprette og rette komponenter og hændelser.',
        'add'         => [
            'title'   => 'Tilføj bruger',
            'success' => 'Bruger tilføjet.',
            'failure' => 'Noget gik galt med oprettelsen.',
        ],
        'edit' => [
            'title'   => 'Redigér profil',
            'success' => 'Profil opdateret.',
            'failure' => 'Noget gik galt under opdateringen.',
        ],
        'delete' => [
            'success' => 'Slet bruger.',
            'failure' => 'Noget gik galt under sletningen af brugeren.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Indstillinger',
        'app-setup' => [
            'app-setup'   => 'Applikationssetup',
            'images-only' => 'Kun billeder kan uploades.',
            'too-big'     => 'Filen du prøvede at uploade er for stort, billet skal være mindre end :size',
        ],
        'analytics' => [
            'analytics' => 'Analytics',
        ],
        'localization' => [
            'localization' => 'Localization',
        ],
        'security' => [
            'security'   => 'Sikkerhed',
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
            'failure' => 'Indstillingerne kunne ikke gemmes.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Log ind',
        'logged_in'  => 'Du er logget ind.',
        'welcome'    => 'Velkommen tilbage',
        'two-factor' => 'Indtast venligst din log ind nøgle',
    ],

    // Sidebar footer
    'help'        => 'Hjælp',
    'status_page' => 'Status Siden',
    'logout'      => 'Log ud',

    // Notifications
    'notifications' => [
        'notifications' => 'Notifikationer',
        'awesome'       => 'Fedt!',
        'whoops'        => 'Whoops!',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Velkommen til Cachet',
        'message' => 'Din statusside er nærmest klar! Måske du skulle gennemgå disse ekstra indstillinger',
        'close'   => 'Til oversigtssiden tak.',
        'steps'   => [
            'component'  => 'Opret Komponent',
            'incident'   => 'Opret hændelse',
            'customize'  => 'Tilpas',
            'team'       => 'Tilføj bruger',
            'api'        => 'Generer API nøgle',
            'two-factor' => 'Two Factor Log ind',
        ],
    ],

];
