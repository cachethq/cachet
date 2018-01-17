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

    'dashboard'          => 'Oversigt',
    'writeable_settings' => 'Cachet-indstillingsmappen er ikke skrivbar. Sørg venligst for at webserveren kan skrive til <code>./bootstrap/cachet</code>.',

    // Incidents
    'incidents' => [
        'title'                    => 'Hændelser &amp; Planlagte',
        'incidents'                => 'Incidents',
        'logged'                   => '{0} Ingen åbne hændelser.|Der er en åben hændelse.|Der er <strong>:count</strong> åbne hændelser.',
        'incident-create-template' => 'Create Template',
        'incident-templates'       => 'Incident Templates',
        'updates'                  => [
            'title'   => 'Incident updates for :incident',
            'count'   => '{0} Zero Updates|[1] One Update|[2] Two Updates|[3,*] Several Updates',
            'add'     => [
                'title'   => 'Opret ny hændelsesopdatering',
                'success' => 'Your new incident update has been created.',
                'failure' => 'Something went wrong with the incident update.',
            ],
            'edit' => [
                'title'   => 'Edit incident update',
                'success' => 'The incident update has been updated.',
                'failure' => 'Something went wrong updating the incident update',
            ],
        ],
        'add'                      => [
            'title'   => 'Opret hændelse',
            'success' => 'Hændelse tilføjet.',
            'failure' => 'Der opstod en fejl i forsøget på at tilføje hændelsen. Prøv venligst igen.',
        ],
        'edit' => [
            'title'   => 'Redigér hændelse',
            'success' => 'Hændelse opdateret.',
            'failure' => 'Der opstod en fejl under forsøget på at redigere hændelsen. Prøv venligst igen.',
        ],
        'delete' => [
            'success' => 'Hændelsen er blevet slettet og vil ikke blive vist på din statusside.',
            'failure' => 'Hændelsen kunne ikke slettes. Prøv venligst igen.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Incident Templates',
            'add'   => [
                'title'   => 'Opret hændelses skabelon',
                'message' => 'Du bør tilføje en hændelses skabelon.',
                'success' => 'Din nye hændelses skabelon er blevet oprettet.',
                'failure' => 'En fejl er opstået med hændelses skabelonen.',
            ],
            'edit' => [
                'title'   => 'Redigér skabelon',
                'success' => 'Hændelses skabelonen er blevet opdateret.',
                'failure' => 'Der opstod en fejl under forsøget på at opdatere hændelses skabelonen',
            ],
            'delete' => [
                'success' => 'Hændelses skabelonen er blevet slettet.',
                'failure' => 'Hændelses skabelonen kunne ikke slettes. Prøv venligst igen.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Planlagt vedligeholdelse',
        'logged'       => '{0} Der er intet planlagt.|Der er 1 planlagt.|Der er <strong>:count</strong> planlagte.',
        'scheduled_at' => 'Planlagt til :timestamp',
        'add'          => [
            'title'   => 'Tilføj planlagt vedligeholdelse',
            'success' => 'Planlagt vedligeholdelse tilføjet.',
            'failure' => 'Noget gik galt under forsøget på at tilføje planlagt vedligeholdelse. Prøv venligst igen.',
        ],
        'edit' => [
            'title'   => 'Rediger planlagt vedligeholdelse',
            'success' => 'Planlagt vedligeholdelse er blevet opdateret!',
            'failure' => 'Noget gik galt under forsøget på at opdatere planlagt vedligeholdelse. Prøv venligst igen.',
        ],
        'delete' => [
            'success' => 'Planlagt vedligeholdelse er blevet slette og vil ikke længere blive vist på din status side.',
            'failure' => 'Den planlagt vedligeholdelse kunne ikke slettes. Prøv venligst igen.',
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
            'success' => 'Komponent oprettet.',
            'failure' => 'Noget gik galt med komponentet. Prøv venligst igen.',
        ],
        'edit' => [
            'title'   => 'Redigér komponent',
            'success' => 'Komponent opdateret.',
            'failure' => 'Noget gik galt med komponentet. Prøv venligst igen.',
        ],
        'delete' => [
            'success' => 'Komponentet er blevet slettet!',
            'failure' => 'Komponentet kunne ikke slettes. Prøv venligst igen.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Komponentgruppe|Komponentgrupper',
            'no_components' => 'You should add a component group.',
            'add'           => [
                'title'   => 'Tilføj komponentgruppe',
                'success' => 'Komponent gruppe tilføjet.',
                'failure' => 'Noget gik galt med komponentet. Prøv venligst igen.',
            ],
            'edit' => [
                'title'   => 'Redigér komponentgruppe',
                'success' => 'Komponent gruppe opdateret.',
                'failure' => 'Noget gik galt med komponentet. Prøv venligst igen.',
            ],
            'delete' => [
                'success' => 'Komponent gruppen er blevet slettet!',
                'failure' => 'Komponent gruppen kunne ikke slettes. Prøv venligst igen.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Grafer',
        'add'     => [
            'title'   => 'Opret graf',
            'message' => 'Du bør tilføje en graf.',
            'success' => 'Graf oprettet.',
            'failure' => 'Noget gik galt med graffen. Prøv venligst igen.',
        ],
        'edit' => [
            'title'   => 'Redigér graf',
            'success' => 'Graf opdateret.',
            'failure' => 'Noget gik galt med graffen. Prøv venligst igen.',
        ],
        'delete' => [
            'success' => 'Grafen er blevet slette og vil ikke længere blive vist på din status side.',
            'failure' => 'Grafen kunne ikke slettes. Prøv venligst igen.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'          => 'Subscribers',
        'description'          => 'Abonnenter vil modtage notifikationer når hændelser oprettes eller komponenter opdateres.',
        'description_disabled' => 'To use this feature, you need allow people to signup for notifications.',
        'verified'             => 'Bekræftet',
        'not_verified'         => 'Ej bekræftet',
        'subscriber'           => ':email, abonnerede :date',
        'no_subscriptions'     => 'Abonnere på alle opdateringer',
        'global'               => 'Globally subscribed',
        'add'                  => [
            'title'   => 'Tilføj abonnent',
            'success' => 'Subscriber added.',
            'failure' => 'Noget gik galt under forsøget på at tilføje en abonnent. Prøv venligst igen.',
            'help'    => 'Angiv hver abonnent på en ny linje.',
        ],
        'edit' => [
            'title'   => 'Redigér abonnent',
            'success' => 'Subscriber updated.',
            'failure' => 'Noget gik galt under forsøget på at redigere abonnenten. Prøv venligst igen.',
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
            'failure' => 'Brugeren kunne ikke tilføjes. Prøv venligst igen.',
        ],
        'edit' => [
            'title'   => 'Redigér profil',
            'success' => 'Profil opdateret.',
            'failure' => 'Noget gik galt under forsøget på at opdatere profilen. Prøv venligst igen.',
        ],
        'delete' => [
            'success' => 'Slet bruger.',
            'failure' => 'Brugeren kunne ikke tilføjes. Prøv venligst igen.',
        ],
        'invite' => [
            'title'   => 'Invite a New Team Member',
            'success' => 'The users invited.',
            'failure' => 'Invitationen kunne ikke sendes. Prøv venligst igen.',
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
        'log' => [
            'log' => 'Log',
        ],
        'localization' => [
            'localization' => 'Localization',
        ],
        'customization' => [
            'customization' => 'Tilpasning',
            'header'        => 'Brugerdefineret header HTML',
            'footer'        => 'Brugerdefineret footer html',
        ],
        'mail' => [
            'mail'  => 'E-mail',
            'test'  => 'Test',
            'email' => [
                'subject' => 'Testnotifikation fra Cachet',
                'body'    => 'Dette er en testnotifikation fra Cachet.',
            ],
        ],
        'security' => [
            'security'   => 'Sikkerhed',
            'two-factor' => 'Brugere uden totrinsbekræftelse',
        ],
        'stylesheet' => [
            'stylesheet' => 'Stylesheet',
        ],
        'theme' => [
            'theme' => 'Tema',
        ],
        'edit' => [
            'success' => 'Indstillingerne er gemt.',
            'failure' => 'Indstillingerne kunne ikke gemmes.',
        ],
        'credits' => [
            'credits'       => 'Anerkendelser',
            'contributors'  => 'Bidragsydere',
            'license'       => 'Cachet er et BSD-3 licenseret open source-projekt udgivet af <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => 'Støtter og Sponsorer',
            'backers'       => 'Ønsker du at støtte fremtidig udvikling, så tjek venligst <a href="https://patreon.com/jbrooksuk" target="_blank"> Cachet Patreon</a>-kampagnen.',
            'thank-you'     => 'Tak til hver og én af de :count bidragsydere.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Log ind',
        'logged_in'  => 'Du er logget ind.',
        'welcome'    => 'Velkommen tilbage!',
        'two-factor' => 'Indtast venligst din totrins bekræftelses nøgle.',
    ],

    // Sidebar footer
    'help'        => 'Hjælp',
    'status_page' => 'Status side',
    'logout'      => 'Log ud',

    // Notifications
    'notifications' => [
        'notifications' => 'Notifikationer',
        'awesome'       => 'Fantastisk.',
        'whoops'        => 'Hov.',
    ],

    // Widgets
    'widgets' => [
        'support'          => 'Støt Cachet',
        'support_subtitle' => 'Tjek vores <strong><a href="https://patreon.com/jbrooksuk" target="_blank">Patreon</a></strong>-side!',
        'news'             => 'Seneste nyheder',
        'news_subtitle'    => 'Få den nyeste opdatering',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Velkommen til din statusside!',
        'message' => 'Din status side er næsten klar! Du ønsker måske at konfigurere disse ekstra indstillinger',
        'close'   => 'Til oversigtssiden tak.',
        'steps'   => [
            'component'  => 'Opret Komponent',
            'incident'   => 'Opret hændelser',
            'customize'  => 'Tilpas',
            'team'       => 'Tilføj bruger',
            'api'        => 'Generer API nøgle',
            'two-factor' => 'Totrinsbekræftelse',
        ],
    ],

];
