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

    'dashboard'          => 'Översiktspanel',
    'writeable_settings' => 'The Cachet settings directory is not writeable. Please make sure that <code>./bootstrap/cachet</code> is writeable by the web server.',

    // Incidents
    'incidents' => [
        'title'                    => 'Händelser &amp; Schema',
        'incidents'                => 'Händelser',
        'logged'                   => '{0} Det finns inga händelser, bra jobbat!|Du har skapat en händelse.|Du har skapat <strong>:count</strong> händelser.',
        'incident-create-template' => 'Skapa mall',
        'incident-templates'       => 'Händelsemallar',
        'updates'                  => '{0} Zero Updates|One Update|:count Updates',
        'add'                      => [
            'title'   => 'Lägg till händelse',
            'success' => 'Incident skapad.',
            'failure' => 'There was an error adding the incident, please try again.',
        ],
        'edit' => [
            'title'   => 'Redigera en händelse',
            'success' => 'Händelse uppdaterad.',
            'failure' => 'There was an error editing the incident, please try again.',
        ],
        'delete' => [
            'success' => 'Händelsen har tagits bort och kommer inte visas på din statussida.',
            'failure' => 'The incident could not be deleted, please try again.',
        ],
        'update' => [
            'title'    => 'Skapa en ny incidentuppdatering',
            'subtitle' => 'Lägg till en uppdatering till <strong>:händelsen</strong>',
            'success'  => 'Update added.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Händelsemallar',
            'add'   => [
                'title'   => 'Skapa en händelsemall',
                'message' => 'Du borde lägga till en händelsemall.',
                'success' => 'Händelsemallen har skapats.',
                'failure' => 'Något gick fel med uppdateringen av incidentmallen.',
            ],
            'edit' => [
                'title'   => 'Redigera mall',
                'success' => 'The incident template has been updated.',
                'failure' => 'Something went wrong updating the incident template',
            ],
            'delete' => [
                'success' => 'Händelsen har tagits bort.',
                'failure' => 'The incident template could not be deleted, please try again.',
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
            'success' => 'Schema tillagt.',
            'failure' => 'Something went wrong adding the schedule, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit Scheduled Maintenance',
            'success' => 'Schemat har uppdaterats!',
            'failure' => 'Something went wrong editing the schedule, please try again.',
        ],
        'delete' => [
            'success' => 'The scheduled maintenance has been deleted and will not show on your status page.',
            'failure' => 'The scheduled maintenance could not be deleted, please try again.',
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
            'success' => 'Komponent skapad.',
            'failure' => 'Something went wrong with the component group, please try again.',
        ],
        'edit' => [
            'title'   => 'Redigera komponent',
            'success' => 'Komponenten har uppdaterats.',
            'failure' => 'Something went wrong with the component group, please try again.',
        ],
        'delete' => [
            'success' => 'Komponenten har tagits bort!',
            'failure' => 'The component could not be deleted, please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Komponentgrupp|Komponentgrupper',
            'no_components' => 'Du borde lägga till en komponentgrupp.',
            'add'           => [
                'title'   => 'Lägg till en komponentgrupp',
                'success' => 'Komponentgrupp tillagd.',
                'failure' => 'Something went wrong with the component group, please try again.',
            ],
            'edit' => [
                'title'   => 'Redigera komponentgrupp',
                'success' => 'Komponentgrupp uppdaterad.',
                'failure' => 'Something went wrong with the component group, please try again.',
            ],
            'delete' => [
                'success' => 'Komponentgruppen har tagits bort!',
                'failure' => 'The component group could not be deleted, please try again.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Mätvärden',
        'add'     => [
            'title'   => 'Skapa ett mätetal',
            'message' => 'Du borde lägga till ett mätetal.',
            'success' => 'Metric created.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'edit' => [
            'title'   => 'Redigera ett mätetal',
            'success' => 'Metric updated.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'delete' => [
            'success' => 'Mätetalet har tagits bort och kommer inte längre visas på din statussida.',
            'failure' => 'The metric could not be deleted, please try again.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'      => 'Prenumeranter',
        'description'      => 'Subscribers will receive email updates when incidents are created or components are updated.',
        'verified'         => 'Bekräftad',
        'not_verified'     => 'Inte bekräftad',
        'subscriber'       => ':email, subscribed :date',
        'no_subscriptions' => 'Subscribed to all updates',
        'add'              => [
            'title'   => 'Lägg till en prenumerant',
            'success' => 'Prenumerant tillagd!',
            'failure' => 'Something went wrong adding the subscriber, please try again.',
            'help'    => 'Enter each subscriber on a new line.',
        ],
        'edit' => [
            'title'   => 'Uppdatera prenumerant',
            'success' => 'Prenumerant uppdaterad!',
            'failure' => 'Something went wrong editing the subscriber, please try again.',
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
            'success' => 'Gruppmedlem tilllagd.',
            'failure' => 'Teammedlemmen kunde inte läggas till. Vänligen försök igen.',
        ],
        'edit' => [
            'title'   => 'Uppdatera profil',
            'success' => 'Profil uppdaterad.',
            'failure' => 'Something went wrong updating the profile, please try again.',
        ],
        'delete' => [
            'success' => 'Teammedlemen har tagits bort och kommer inte längre ha tillgång till översiktspanelen!',
            'failure' => 'Teammedlemmen kunde inte läggas till. Vänligen försök igen.',
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
        'log' => [
            'log' => 'Log',
        ],
        'localization' => [
            'localization' => 'Platsanpassning',
        ],
        'customization' => [
            'customization' => 'Anpassning',
            'header'        => 'Anpassat sidhuvud HTML',
            'footer'        => 'Anpassad sidfot HTML',
        ],
        'mail' => [
            'mail'  => 'Mail',
            'test'  => 'Test',
            'email' => [
                'subject' => 'Test notification from Cachet',
                'body'    => 'Detta är ett testmeddelande från Cachet.',
            ],
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
        'credits' => [
            'credits'       => 'Tack till',
            'contributors'  => 'Medverkande',
            'license'       => 'Cachet is a BSD-3-licensed open source project, released by <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => 'Backers & Sponsors',
            'backers'       => 'If you\'d like to support future development, check out the <a href="https://patreon.com/jbrooksuk" target="_blank">Cachet Patreon</a> campaign.',
            'thank-you'     => 'Thank you to each and every one of the :count contributors.',
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

    // Widgets
    'widgets' => [
        'support'          => 'Stöd Cachet',
        'support_subtitle' => 'Check out our <strong><a href="https://patreon.com/jbrooksuk" target="_blank">Patreon</a></strong> page!',
        'news'             => 'Senaste nytt',
        'news_subtitle'    => 'Hämta senaste uppdateringen',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Välkommen till din statussida!',
        'message' => 'Din statussida är nästan redo. Du kan vilja konfigerara de här extra inställningarna',
        'close'   => 'Jag är nöjd, tack!',
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