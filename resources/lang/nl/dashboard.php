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
        'title'                    => 'Incidenten &amp; planning',
        'incidents'                => 'Incidenten',
        'logged'                   => '{0} Proficiat, er zijn geen incidenten.|Er heeft zich één incident voorgedaan.|Er zijn <strong>:count</strong> incidenten gerapporteerd.',
        'incident-create-template' => 'Maak template',
        'incident-templates'       => 'Incident Sjablonen',
        'add'                      => [
            'title'   => 'Meld een incident',
            'success' => 'Incident toegevoegd.',
            'failure' => 'Er ging iets mis met het incident.',
        ],
        'edit' => [
            'title'   => 'Wijzig een incident',
            'success' => 'Incident bijgewerkt.',
            'failure' => 'Er ging iets mis met het incident.',
        ],
        'delete' => [
            'success' => 'Het incident is verwijderd en zal niet meer worden weergegeven op de statuspagina.',
            'failure' => 'Het incident kon niet worden verwijderd. Probeer het opnieuw.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Incident Sjablonen',
            'add'   => [
                'title'   => 'Creëer een incident template',
                'message' => 'Voeg een incident template toe.',
                'success' => 'Sjabloon aangemaakt.',
                'failure' => 'Er ging iets mis met het incident sjabloon.',
            ],
            'edit' => [
                'title'   => 'Wijzig template',
                'success' => 'Sjabloon is bijgewerkt!',
                'failure' => 'Er ging iets mis bij het bijwerken van het sjabloon',
            ],
            'delete' => [
                'success' => 'De incident template is verwijderd.',
                'failure' => 'De incident template kon niet worden verwijderd. Probeer het opnieuw.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Gepland onderhoud',
        'logged'       => '{0} Er zijn geen schema\'s, goed werk.|Je hebt één schema aangemaakt.|Je hebt <strong>:count</strong> schema\'s aangegeven.',
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
        'component_statuses' => 'Onderdeel statussen',
        'listed_group'       => 'Gegroepeerd onder :name',
        'add'                => [
            'title'   => 'Voeg een component toe',
            'message' => 'Gelieve een onderdeel toe te voegen.',
            'success' => 'Onderdeel aangemaakt.',
            'failure' => 'Er ging iets mis met het onderdeel.',
        ],
        'edit' => [
            'title'   => 'Wijzig een component',
            'success' => 'Onderdeel bijgewerkt.',
            'failure' => 'Er ging iets mis met het onderdeel.',
        ],
        'delete' => [
            'success' => 'Het component is verwijderd!',
            'failure' => 'Het component kon niet worden verwijderd. Probeer het opnieuw.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Onderdeel groep|Onderdeel groepen',
            'no_components' => 'U moet een componentgroep toevoegen.',
            'add'           => [
                'title'   => 'Componentgroep toevoegen',
                'success' => 'Onderdeel groep toegevoegd.',
                'failure' => 'Er ging iets mis met de onderdeel groep.',
            ],
            'edit' => [
                'title'   => 'Componentgroep bewerken',
                'success' => 'Componentgroep bijgewerkt.',
                'failure' => 'Er ging iets mis met de componentgroep.',
            ],
            'delete' => [
                'success' => 'De component groep is verwijderd!',
                'failure' => 'De component groep kon niet worden verwijderd. Probeer het opnieuw.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Statistieken',
        'add'     => [
            'title'   => 'Meting aanmaken',
            'message' => 'Voeg een meting toe.',
            'success' => 'Meting aangemaakt.',
            'failure' => 'Er ging iets mis met de meting.',
        ],
        'edit' => [
            'title'   => 'Meting bewerken',
            'success' => 'Meting bijgewerkt.',
            'failure' => 'Er ging iets mis met de meting.',
        ],
        'delete' => [
            'success' => 'De meting is verwijderd en zal niet meer worden weergegeven op de statuspagina.',
            'failure' => 'De meting kon niet verwijderd worden. Probeer het opnieuw.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'  => 'Abonnees',
        'description'  => 'Abonnees ontvangen email updates wanneer incidenten worden aangemaakt.',
        'verified'     => 'Geverifiëerd',
        'not_verified' => 'Niet geverifiëerd',
        'add'          => [
            'title'   => 'Voeg een nieuwe abonnee toe',
            'success' => 'Abonnee is toegevoegd!',
            'failure' => 'Er ging iets mis met het onderdeel.',
        ],
        'edit' => [
            'title'   => 'Abonnee bijwerken',
            'success' => 'Abonnee is gewijzigd!',
            'failure' => 'Er ging iets mis tijdens het bijwerken.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Team',
        'member'      => 'Lid',
        'profile'     => 'Profiel',
        'description' => 'Teamleden zullen onderdelen en incidenten kunnen aanpassen &amp; toevoegen.',
        'add'         => [
            'title'   => 'Voeg een nieuw teamlid toe',
            'success' => 'Teamlid toegevoegd.',
            'failure' => 'Het teamlid kon niet worden toegevoegd. Probeer het opnieuw.',
        ],
        'edit' => [
            'title'   => 'Profiel bijwerken',
            'success' => 'Profiel bijgewerkt.',
            'failure' => 'Er ging iets mis tijdens het bijwerken.',
        ],
        'delete' => [
            'success' => 'Het teamlid is verwijderd en heeft geen toegang meer tot het dashboard!',
            'failure' => 'Het teamlid kon niet worden toegevoegd. Probeer het opnieuw.',
        ],
        'invite' => [
            'title'   => 'Nodig een nieuw teamlid uit',
            'success' => 'De uitnodiging is verzonden',
            'failure' => 'De uitnodiging kon niet verzonden worden. Probeer het opnieuw.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Instellingen',
        'app-setup' => [
            'app-setup'   => 'Applicatie Installatie',
            'images-only' => 'Alleen afbeeldingen kunnen worden geüpload.',
            'too-big'     => 'Het bestand dat u heeft geüpload is te groot. Upload een afbeelding kleiner dan :size',
        ],
        'analytics' => [
            'analytics' => 'Analyses',
        ],
        'localization' => [
            'localization' => 'Lokalisatie',
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
            'success' => 'Instellingen bewaard.',
            'failure' => 'Instellingen kunnen niet worden opgeslagen.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Login',
        'logged_in'  => 'U bent ingelogd.',
        'welcome'    => 'Welkom Terug!',
        'two-factor' => 'Voer uw token in.',
    ],

    // Sidebar footer
    'help'        => 'Help',
    'status_page' => 'Status Pagina',
    'logout'      => 'Uitloggen',

    // Notifications
    'notifications' => [
        'notifications' => 'Notificaties',
        'awesome'       => 'Geweldig.',
        'whoops'        => 'Oepsie.',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welkom op je statuspagina!',
        'message' => 'Uw statuspagina is bijna klaar! U kunt deze extra instellingen configureren',
        'close'   => 'Ga direct naar mijn dashboard',
        'steps'   => [
            'component'  => 'Onderdelen maken',
            'incident'   => 'Incidenten aanmaken',
            'customize'  => 'Aanpassen',
            'team'       => 'Gebruikers toevoegen',
            'api'        => 'API-token genereren',
            'two-factor' => 'Authenticatie in twee stappen',
        ],
    ],

];
