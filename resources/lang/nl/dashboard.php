<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    'dashboard' => 'Dashboard',

    // Incidents
    'incidents' => [
        'title'                    => 'Incidenten &amp; planning',
        'incidents'                => 'Incidenten',
        'logged'                   => '{0} Er zijn geen incidenten, goed werk.|Je hebt één incident gemeld.|Je hebt <strong>:count</strong> incidenten gemeld.',
        'incident-create-template' => 'Sjabloon aanmaken',
        'incident-templates'       => 'Incidentsjablonen',
        'add'                      => [
            'title'   => 'Incident toevoegen',
            'success' => 'Incident toegevoegd.',
            'failure' => 'Er ging iets mis met het incident.',
        ],
        'edit' => [
            'title'   => 'Incident bewerken',
            'success' => 'Incident bijwerken.',
            'failure' => 'Er ging iets mis met het incident.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Incidentsjablonen',
            'add'   => [
                'title'   => 'Incidentsjabloon aanmaken',
                'success' => 'Sjabloon aangemaakt.',
                'failure' => 'Er ging iets mis met het incidentsjabloon.',
            ],
            'edit' => [
                'title'   => 'Sjabloon bewerken',
                'success' => 'Sjabloon is bijgewerkt!',
                'failure' => 'Er ging iets mis bij het bijwerken van het incidentsjabloon.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Gepland onderhoud',
        'scheduled_at' => 'Gepland op :timestamp',
        'add'          => [
            'title'   => 'Gepland onderhoud toevoegen',
            'success' => 'Planning toegevoegd.',
            'failure' => 'Er ging iets mis bij het toevoegen van de planning.',
        ],
        'edit' => [
            'title'   => 'Gepland onderhoud bewerken',
            'success' => 'Planning is bijgewerkt!',
            'failure' => 'Er ging iets mis bij het bewerken van de planning.',
        ],
        'delete' => [
            'success' => 'De planning is verwijderd en zal niet worden getoond op je statuspagina.',
            'failure' => 'De planning kon niet worden verwijderd. Probeer het nogmaals.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Componenten',
        'component_statuses' => 'Componentstatussen',
        'listed_group'       => 'Gegroepeerd onder :name',
        'add'                => [
            'title'   => 'Component toevoegen',
            'message' => 'Je moet een component toevoegen.',
            'success' => 'Component aangemaakt.',
            'failure' => 'Er ging iets mis met de component.',
        ],
        'edit' => [
            'title'   => 'Component bewerken',
            'success' => 'Component bijgewerkt.',
            'failure' => 'Er ging iets mis met de component.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Componentgroep|Componentgroepen',
            'no_components' => 'You should add a component group.',
            'add'           => [
                'title'   => 'Componentgroep toevoegen',
                'success' => 'Componentgroep toegevoegd.',
                'failure' => 'Er ging iets mis met de componentgroep.',
            ],
            'edit' => [
                'title'   => 'Componentgroep bewerken',
                'success' => 'Componentgroep bijgewerkt.',
                'failure' => 'Er ging iets mis met de componentgroep.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metingen',
        'add'     => [
            'title'   => 'Meting aanmaken',
            'success' => 'Meting aangemaakt.',
            'failure' => 'Er ging iets mis met de meting.',
        ],
        'edit' => [
            'title'   => 'Meting bewerken',
            'success' => 'Meting bijgewerkt.',
            'failure' => 'Er ging iets mis met de meting.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Team',
        'member'      => 'Lid',
        'profile'     => 'Profiel',
        'description' => 'Teamleden hebben de mogelijkheid om componenten en incidenten toe te voegen, aan te passen en te bewerken.',
        'add'         => [
            'title'   => 'Nieuw teamlid toevoegen',
            'success' => 'Teamlid toegevoegd.',
            'failure' => 'Er ging iets mis met de component.',
        ],
        'edit'        => [
            'title'   => 'Profiel bijwerken',
            'success' => 'Profiel bijgewerkt.',
            'failure' => 'Er ging iets mis met het bijwerken.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Instellingen',
        'app-setup' => [
            'app-setup'   => 'Installatie applicatie',
            'images-only' => 'Alleen afbeeldingen mogen worden geüpload.',
            'too-big'     => 'Het bestand dat je hebt geüpload is te groot. Upload een afbeelding kleinder dan :size',
        ],
        'security' => [
            'security'   => 'Beveiliging',
            'two-factor' => 'Gebruikers zonder authenticatie in twee stappen',
        ],
        'stylesheet' => [
            'stylesheet' => 'Stylesheet',
        ],
        'theme' => [
            'theme' => 'Thema',
        ],
        'edit' => [
            'success' => 'Instellingen opgeslagen.',
            'failure' => 'Instellingen konden niet worden opgeslagen.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Inloggen',
        'logged_in'  => 'Je bent ingelogd.',
        'welcome'    => 'Welkom terug!',
        'two-factor' => 'Vul je token in.',
    ],

    // Sidebar footer
    'help'        => 'Help',
    'status_page' => 'Statuspagina',
    'logout'      => 'Uitloggen',

    // Notifications
    'notifications'     => [
        'notifications' => 'Meldingen',
        'awesome'       => 'Geweldig.',
        'whoops'        => 'Oeps.',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welkom bij Cachet',
        'message' => 'Je statuspagina is bijna klaar! Je wilt misschien deze extra instellingen configureren',
        'close'   => 'Ga direct naar mijn dashboard',
        'steps'   => [
            'component'  => 'Componenten aanmaken',
            'incident'   => 'Incidenten aanmaken',
            'customize'  => 'Aanpassen',
            'team'       => 'Gebruikers toevoegen',
            'api'        => 'API-token genereren',
            'two-factor' => 'Authenticatie in twee stappen',
        ],
    ],

];
