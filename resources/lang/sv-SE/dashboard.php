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

    'dashboard' => 'Översiktspanel',

    // Incidents
    'incidents' => [
        'title'                    => 'Händelser &amp; Schema',
        'incidents'                => 'Händelser',
        'logged'                   => '{0} Det finns inga händelser, bra jobbat!|Du har skapat en händelse.|Du har skapat <strong>:count</strong> händelser.',
        'incident-create-template' => 'Skapa mall',
        'incident-templates'       => 'Händelsemallar',
        'add'                      => [
            'title'   => 'Lägg till händelse',
            'success' => 'Händelse rapporterad.',
            'failure' => 'Händelsen kunde inte sparas. Vänligen försök igen.',
        ],
        'edit' => [
            'title'   => 'Redigera en händelse',
            'success' => 'Händelse uppdaterad.',
            'failure' => 'Händelsen kunde inte uppdateras. Vänligen försök igen.',
        ],
        'delete' => [
            'success' => 'Händelsen har tagits bort och kommer inte visas på din statussida.',
            'failure' => 'Händelsen kunde inte tas bort. Vänligen försök igen.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Händelsemallar',
            'add'   => [
                'title'   => 'Skapa en händelsemall',
                'message' => 'Du borde lägga till en händelsemall.',
                'success' => 'Händelsemallen har skapats!',
                'failure' => 'Händelsemallen kunde inte skapas. Vänligen försök igen.',
            ],
            'edit' => [
                'title'   => 'Redigera mall',
                'success' => 'Händelsemallen har uppdaterats!',
                'failure' => 'Något gick fel med uppdateringen av händelsemallen',
            ],
            'delete' => [
                'success' => 'Händelsen har tagits bort.',
                'failure' => 'Händelsemallen kunde inte tas bort. Vänligen försök igen.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Planerat underhåll',
        'logged'       => '{0} Det finns inget schemalagt, bra jobbat!|Du har skapat ett schemalagt underhåll.|Du har skapat <strong>:count</strong> schemalagda underhåll.',
        'scheduled_at' => 'Schemalagd till: tidsstämpel',
        'add'          => [
            'title'   => 'Lägg till planerat underhåll',
            'success' => 'Schemalagt underhåll tillagt!',
            'failure' => 'Det schemalagda underhållet kunde inte sparas. Vänligen försök igen.',
        ],
        'edit' => [
            'title'   => 'Redigera schemalagt underhåll',
            'success' => 'Schemalagt underhåll har redigerats!',
            'failure' => 'Det schemalagda underhållet kunde inte uppdateras. Vänligen försök igen.',
        ],
        'delete' => [
            'success' => 'Schemalagt underhåll har tagits bort!',
            'failure' => 'Det schemalagda underhållet kunde inte tas bort. Vänligen försök igen.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Komponenter',
        'component_statuses' => 'Komponentstatus',
        'listed_group'       => 'Grupperade under: namn',
        'add'                => [
            'title'   => 'Lägg till en komponent',
            'message' => 'Du borde lägga till en komponent.',
            'success' => 'Komponenten tillagd!',
            'failure' => 'Komponenten kunde inte läggas till. Vänligen försök igen.',
        ],
        'edit' => [
            'title'   => 'Redigera komponent',
            'success' => 'Komponenten har uppdaterats!',
            'failure' => 'Komponenten kunde inte uppdateras. Vänligen försök igen.',
        ],
        'delete' => [
            'success' => 'Komponenten har tagits bort!',
            'failure' => 'Komponenten kunde inte tas bort. Vänligen försök igen.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Komponentgrupp|Komponentgrupper',
            'no_components' => 'Du borde lägga till en komponentgrupp.',
            'add'           => [
                'title'   => 'Lägg till en komponentgrupp',
                'success' => 'Komponentgruppen har lagts till!',
                'failure' => 'Komponentgruppen kunde inte läggas till. Vänligen försök igen.',
            ],
            'edit' => [
                'title'   => 'Redigera komponentgrupp',
                'success' => 'Komponentgruppen har uppdaterats!',
                'failure' => 'Komponentgruppen kunde inte uppdateras. Vänligen försök igen.',
            ],
            'delete' => [
                'success' => 'Komponentgruppen har tagits bort!',
                'failure' => 'Komponentgruppen kunde inte tas bort. Vänligen försök igen.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Mätvärden',
        'add'     => [
            'title'   => 'Skapa ett mätetal',
            'message' => 'Du borde lägga till ett mätetal.',
            'success' => 'Mätetal tillagt!',
            'failure' => 'Mätetalet kunde inte läggas till. Vänligen försök igen.',
        ],
        'edit' => [
            'title'   => 'Redigera ett mätetal',
            'success' => 'Mätetal uppdaterat!',
            'failure' => 'Mätetalet kunde inte uppdateras. Vänligen försök igen.',
        ],
        'delete' => [
            'success' => 'Mätetalet har tagits bort och kommer inte längre visas på din statussida.',
            'failure' => 'Mätetalet kunde inte tas bort. Vänligen försök igen.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'  => 'Prenumeranter',
        'description'  => 'Prenumeranter kommer att få uppdateringar via e-post när händelser skapas.',
        'verified'     => 'Bekräftad',
        'not_verified' => 'Inte bekräftad',
        'add'          => [
            'title'   => 'Lägg till en prenumerant',
            'success' => 'Prenumerant tillagd!',
            'failure' => 'Prenumeranten kunde inte läggas till. Vänligen försök igen.',
        ],
        'edit' => [
            'title'   => 'Uppdatera prenumerant',
            'success' => 'Prenumerant uppdaterad!',
            'failure' => 'Prenumeranten kunde inte uppdateras. Vänligen försök igen.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Team',
        'member'      => 'Medlem',
        'profile'     => 'Profil',
        'description' => 'Teammedlemmar kommer kunna lägga till, ändra &amp; redigera komponenter och händelser.',
        'add'         => [
            'title'   => 'Lägg till en ny teammedlem',
            'success' => 'Teammedlem tillagd!',
            'failure' => 'Teammedlemen kunde inte läggas till. Vänligen försök igen.',
        ],
        'edit' => [
            'title'   => 'Uppdatera profil',
            'success' => 'Profil uppdaterad.',
            'failure' => 'Teammedlemen kunde inte uppdateras. Vänligen försök igen.',
        ],
        'delete' => [
            'success' => 'Teammedlemen har tagits bort och kommer inte längre ha tillgång till översiktspanelen!',
            'failure' => 'Teammedlemen kunde inte läggas till. Vänligen försök igen.',
        ],
        'invite' => [
            'title'   => 'Bjud in en ny teammedlem',
            'success' => 'Inbjudan har skickats',
            'failure' => 'Inbjudan kunde inte skickas. Vänligen försök igen.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Inställningar',
        'app-setup' => [
            'app-setup'   => 'Applikationsinstallation',
            'images-only' => 'Endast bilder kan laddas upp.',
            'too-big'     => 'Filen du försöker ladda upp är för stor. Ladda upp en bild som är mindre än :size',
        ],
        'analytics' => [
            'analytics' => 'Analys',
        ],
        'localization' => [
            'localization' => 'Platsanpassning',
        ],
        'security' => [
            'security'   => 'Säkerhet',
            'two-factor' => 'Användare utan tvåfaktorsautentisering',
        ],
        'stylesheet' => [
            'stylesheet' => 'Stilmall',
        ],
        'theme' => [
            'theme' => 'Tema',
        ],
        'edit' => [
            'success' => 'Inställningar sparade.',
            'failure' => 'Inställningarna kunde inte sparas.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Logga in',
        'logged_in'  => 'Du är inloggad.',
        'welcome'    => 'Välkommen tillbaka!',
        'two-factor' => 'Vänligen ange din kod.',
    ],

    // Sidebar footer
    'help'        => 'Hjälp',
    'status_page' => 'Statussida',
    'logout'      => 'Logga ut',

    // Notifications
    'notifications' => [
        'notifications' => 'Notifieringar',
        'awesome'       => 'Enastående.',
        'whoops'        => 'Hoppsan.',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Välkommen till din statussida!',
        'message' => 'Din statussida är nästan redo. Du kan vilja konfigerara de här extra inställningarna',
        'close'   => 'Gå bara direkt till min översiktspanel',
        'steps'   => [
            'component'  => 'Skapa komponenter',
            'incident'   => 'Skapa händelser',
            'customize'  => 'Anpassa',
            'team'       => 'Lägg till användare',
            'api'        => 'Skapa API-nyckel',
            'two-factor' => 'Tvåfaktorsautensiering',
        ],
    ],

];
