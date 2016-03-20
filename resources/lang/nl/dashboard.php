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
            'success' => 'Incident added.',
            'failure' => 'There was an error adding the incident, please try again.',
        ],
        'edit' => [
            'title'   => 'Wijzig een incident',
            'success' => 'Incident bijgewerkt.',
            'failure' => 'There was an error editing the incident, please try again.',
        ],
        'delete' => [
            'success' => 'Het incident is verwijderd en zal niet meer worden weergegeven op de statuspagina.',
            'failure' => 'The incident could not be deleted, please try again.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Incident Sjablonen',
            'add'   => [
                'title'   => 'Creëer een incident template',
                'message' => 'Voeg een incident template toe.',
                'success' => 'Your new incident template has been created.',
                'failure' => 'Something went wrong with the incident template.',
            ],
            'edit' => [
                'title'   => 'Wijzig template',
                'success' => 'The incident template has been updated.',
                'failure' => 'Something went wrong updating the incident template',
            ],
            'delete' => [
                'success' => 'De incident template is verwijderd.',
                'failure' => 'The incident template could not be deleted, please try again.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Gepland onderhoud',
        'logged'       => '{0} Er zijn geen schema\'s, goed werk.|Je hebt één schema aangemaakt.|Je hebt <strong>:count</strong> schema\'s aangegeven.',
        'scheduled_at' => 'Gepland op :timestamp',
        'add'          => [
            'title'   => 'Add Scheduled Maintenance',
            'success' => 'Schedule added.',
            'failure' => 'Something went wrong adding the schedule, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit Scheduled Maintenance',
            'success' => 'Schedule has been updated!',
            'failure' => 'Something went wrong editing the schedule, please try again.',
        ],
        'delete' => [
            'success' => 'The scheduled maintenance has been deleted and will not show on your status page.',
            'failure' => 'The scheduled maintenance could not be deleted, please try again.',
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
            'success' => 'Component created.',
            'failure' => 'Something went wrong with the component, please try again.',
        ],
        'edit' => [
            'title'   => 'Wijzig een component',
            'success' => 'Component updated.',
            'failure' => 'Something went wrong with the component, please try again.',
        ],
        'delete' => [
            'success' => 'Het component is verwijderd!',
            'failure' => 'The component could not be deleted, please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Onderdeel groep|Onderdeel groepen',
            'no_components' => 'U moet een componentgroep toevoegen.',
            'add'           => [
                'title'   => 'Componentgroep toevoegen',
                'success' => 'Component group added.',
                'failure' => 'Something went wrong with the component group, please try again.',
            ],
            'edit' => [
                'title'   => 'Componentgroep bewerken',
                'success' => 'Component group updated.',
                'failure' => 'Something went wrong with the component group, please try again.',
            ],
            'delete' => [
                'success' => 'De component groep is verwijderd!',
                'failure' => 'The component group could not be deleted, please try again.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Statistieken',
        'add'     => [
            'title'   => 'Meting aanmaken',
            'message' => 'Voeg een meting toe.',
            'success' => 'Metric created.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'edit' => [
            'title'   => 'Meting bewerken',
            'success' => 'Metric updated.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'delete' => [
            'success' => 'De meting is verwijderd en zal niet meer worden weergegeven op de statuspagina.',
            'failure' => 'The metric could not be deleted, please try again.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'      => 'Abonnees',
        'description'      => 'Subscribers will receive email updates when incidents are created or components are updated.',
        'verified'         => 'Geverifiëerd',
        'not_verified'     => 'Niet geverifiëerd',
        'subscriber'       => ':email, subscribed :date',
        'no_subscriptions' => 'Subscribed to all updates',
        'add'              => [
            'title'   => 'Voeg een nieuwe abonnee toe',
            'success' => 'Abonnee is toegevoegd!',
            'failure' => 'Something went wrong adding the subscriber, please try again.',
        ],
        'edit' => [
            'title'   => 'Abonnee bijwerken',
            'success' => 'Abonnee is gewijzigd!',
            'failure' => 'Something went wrong editing the subscriber, please try again.',
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
            'success' => 'Team member added.',
            'failure' => 'The team member could not be added, please try again.',
        ],
        'edit' => [
            'title'   => 'Profiel bijwerken',
            'success' => 'Profile updated.',
            'failure' => 'Something went wrong updating the profile, please try again.',
        ],
        'delete' => [
            'success' => 'Het teamlid is verwijderd en heeft geen toegang meer tot het dashboard!',
            'failure' => 'The team member could not be added, please try again.',
        ],
        'invite' => [
            'title'   => 'Nodig een nieuw teamlid uit',
            'success' => 'De uitnodiging is verzonden',
            'failure' => 'The invite could not be sent, please try again.',
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
        'customization' => [
            'customization' => 'Customization',
            'header'        => 'Custom Header HTML',
            'footer'        => 'Custom Footer HTML',
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
        'close'   => 'Take me straight to my dashboard',
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
