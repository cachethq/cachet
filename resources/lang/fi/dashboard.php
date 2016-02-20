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

    'dashboard' => 'Hallintanäkymä',

    // Incidents
    'incidents' => [
        'title'                    => 'Tapahtumat &amp; ajastaminen',
        'incidents'                => 'Tapahtumat',
        'logged'                   => '{0} There are no incidents, good work.|You have logged one incident.|You have reported <strong>:count</strong> incidents.',
        'incident-create-template' => 'Luo mallipohja',
        'incident-templates'       => 'Tapahtuma pohja',
        'add'                      => [
            'title'   => 'Ilmoita tapahtuma',
            'success' => 'Tapahtuma lisätty.',
            'failure' => 'Tapahtumaa ei voitu ilmoittaa. Yritä uudelleen.',
        ],
        'edit' => [
            'title'   => 'Muokkaa tapahtumaa',
            'success' => 'Tapahtuma päivitetty.',
            'failure' => 'Tapahtumaa ei voitu muokata. Yritä uudelleen.',
        ],
        'delete' => [
            'success' => 'Tapaus on poistettu ja ei näytetä tila-sivulla.',
            'failure' => 'Tapahtumaa ei voitu poistaa. Yritä uudelleen.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Tapahtuma pohja',
            'add'   => [
                'title'   => 'Create an incident template',
                'message' => 'You should add an incident template.',
                'success' => 'Mallipohja on luotu.',
                'failure' => 'The incident template could not be created. Please try again.',
            ],
            'edit' => [
                'title'   => 'Edit Template',
                'success' => 'The incdent template has been updated!',
                'failure' => 'The incident template could not be edited. Please try again.',
            ],
            'delete' => [
                'success' => 'The incident template has been deleted.',
                'failure' => 'The incident template could not be deleted. Please try again.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Ajastettu huolto',
        'logged'       => '{0} There are no schedules, good work.|You have logged one schedule.|You have reported <strong>:count</strong> schedules.',
        'scheduled_at' => 'Scheduled at :timestamp',
        'add'          => [
            'title'   => 'Add scheduled maintenance',
            'success' => 'Scheduled maintenance has been reported!',
            'failure' => 'The scheduled maintenance could not be reported. Please try again.',
        ],
        'edit' => [
            'title'   => 'Edit scheduled maintenance',
            'success' => 'Scheduled maintenance has been edited!',
            'failure' => 'The scheduled maintenance could not be edited. Please try again.',
        ],
        'delete' => [
            'success' => 'Scheduled maintenance has been deleted!',
            'failure' => 'The scheduled maintenance could not be deleted. Please try again.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Komponentit',
        'component_statuses' => 'Komponenttien tilat',
        'listed_group'       => 'Grouped under :name',
        'add'                => [
            'title'   => 'Lisää komponentti',
            'message' => 'You should add a component.',
            'success' => 'Komponentti on lisätty!',
            'failure' => 'The component could not be added. Please try again.',
        ],
        'edit' => [
            'title'   => 'Muokkaa komponenttia',
            'success' => 'Component has been updated!',
            'failure' => 'The component could not be updated. Please try again.',
        ],
        'delete' => [
            'success' => 'The component has been deleted!',
            'failure' => 'The component could not be deleted. Please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Component group|Component groups',
            'no_components' => 'You should add a component group.',
            'add'           => [
                'title'   => 'Lisää komponentti-ryhmä',
                'success' => 'Component group has been added!',
                'failure' => 'The component group could not be added. Please try again.',
            ],
            'edit' => [
                'title'   => 'Edit a component group',
                'success' => 'Component group has been edited!',
                'failure' => 'The component group could not be edited. Please try again.',
            ],
            'delete' => [
                'success' => 'Component group has been deleted!',
                'failure' => 'The component group could not be deleted. Please try again.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Mittarit',
        'add'     => [
            'title'   => 'Create a metric',
            'message' => 'You should add a metric.',
            'success' => 'Metric has been added!',
            'failure' => 'The metric could not be added. Please try again.',
        ],
        'edit' => [
            'title'   => 'Edit a metric',
            'success' => 'Metric has been updated!',
            'failure' => 'The metric could not be updated. Please try again.',
        ],
        'delete' => [
            'success' => 'The metric has been deleted and will no longer display on your status page.',
            'failure' => 'The metric could not be deleted. Please try again.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'  => 'Tilaajat',
        'description'  => 'Subscribers will receive email updates when incidents are created.',
        'verified'     => 'Vahvistettu',
        'not_verified' => 'Not verified',
        'add'          => [
            'title'   => 'Add a new subscriber',
            'success' => 'Tilaaja lisätty.',
            'failure' => 'The subscriber could not be added. Please try again.',
        ],
        'edit' => [
            'title'   => 'Update subscriber',
            'success' => 'Subscriber has been updated!',
            'failure' => 'Tapahtui virhe päivitettäessä.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Ryhmä',
        'member'      => 'Jäsen',
        'profile'     => 'Profiili',
        'description' => 'Team Members will be able to add, modify &amp; edit components and incidents.',
        'add'         => [
            'title'   => 'Add a new team member',
            'success' => 'Ryhmän jäsen lisätty.',
            'failure' => 'The team member could not be added. Please try again.',
        ],
        'edit' => [
            'title'   => 'Update profile',
            'success' => 'Profiili päivitetty.',
            'failure' => 'Tapahtui virhe päivitettäessä.',
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
        'settings'  => 'Asetukset',
        'app-setup' => [
            'app-setup'   => 'Sovelluksen asetukset',
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
            'security'   => 'Turvallisuus',
            'two-factor' => 'Käyttäjät ilman kaksivaiheista todennusta',
        ],
        'stylesheet' => [
            'stylesheet' => 'Stylesheet',
        ],
        'theme' => [
            'theme' => 'Teema',
        ],
        'edit' => [
            'success' => 'Asetukset tallennettu.',
            'failure' => 'Asetuksia ei voitu tallentaa.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Kirjaudu',
        'logged_in'  => 'Olet kirjautunut sisään.',
        'welcome'    => 'Tervetuloa takaisin!',
        'two-factor' => 'Please enter your token.',
    ],

    // Sidebar footer
    'help'        => 'Tuki',
    'status_page' => 'Tila-sivu',
    'logout'      => 'Kirjaudu ulos',

    // Notifications
    'notifications' => [
        'notifications' => 'Ilmoitukset',
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
            'customize'  => 'Muokkaa',
            'team'       => 'Lisää käyttäjä',
            'api'        => 'Luo API tunnus',
            'two-factor' => 'Kaksivaiheinen todennus',
        ],
    ],

];
