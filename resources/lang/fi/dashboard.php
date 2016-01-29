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
            'title'   => 'Add an Incident',
            'success' => 'Tapahtuma lisätty.',
            'failure' => 'Something went wrong with the incident.',
        ],
        'edit' => [
            'title'   => 'Edit an Incident',
            'success' => 'Tapahtuma päivitetty.',
            'failure' => 'Something went wrong with the incident.',
        ],
        'delete' => [
            'success' => 'The incident has been deleted and will not show on your status page.',
            'failure' => 'The incident could not be deleted. Please try again.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Tapahtuma pohja',
            'add'   => [
                'title'   => 'Create an Incident Template',
                'message' => 'You should add an Incident Template.',
                'success' => 'Mallipohja on luotu.',
                'failure' => 'Something went wrong with the incident template.',
            ],
            'edit' => [
                'title'   => 'Edit Template',
                'success' => 'Template has been updated!',
                'failure' => 'Something went wrong updating the incident template',
            ],
            'delete' => [
                'success' => 'The tmplate has been deleted.',
                'failure' => 'The template could not be deleted. Please try again.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Ajastettu huolto',
        'logged'       => '{0} There are no schedules, good work.|You have logged one schedule.|You have reported <strong>:count</strong> schedules.',
        'scheduled_at' => 'Scheduled at :timestamp',
        'add'          => [
            'title'   => 'Add Scheduled Maintenance',
            'success' => 'Schedule added.',
            'failure' => 'Something went wrong adding the schedule.',
        ],
        'edit' => [
            'title'   => 'Edit Scheduled Maintenance',
            'success' => 'Schedule has been updated!',
            'failure' => 'Something went wrong editing the schedule.',
        ],
        'delete' => [
            'success' => 'The schedule has been deleted and will not show on your status page.',
            'failure' => 'The schedule could not be deleted. Please try again.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Komponentit',
        'component_statuses' => 'Komponenttien tilat',
        'listed_group'       => 'Grouped under :name',
        'add'                => [
            'title'   => 'Add a Component',
            'message' => 'You should add a component.',
            'success' => 'Component created.',
            'failure' => 'Something went wrong with the component.',
        ],
        'edit' => [
            'title'   => 'Edit a Component',
            'success' => 'Component updated.',
            'failure' => 'Something went wrong with the component.',
        ],
        'delete' => [
            'success' => 'Component deleted.',
            'failure' => 'The Component could not be deleted. Please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Component group|Component groups',
            'no_components' => 'You should add a component group.',
            'add'           => [
                'title'   => 'Add a Component Group',
                'success' => 'Component group added.',
                'failure' => 'Something went wrong with the component group.',
            ],
            'edit' => [
                'title'   => 'Edit a Component Group',
                'success' => 'Component group updated.',
                'failure' => 'Something went wrong with the component group.',
            ],
            'delete' => [
                'success' => 'Component Group deleted.',
                'failure' => 'The Component Group could not be deleted. Please try again.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Mittarit',
        'add'     => [
            'title'   => 'Create a Metric',
            'message' => 'You should add a Metric.',
            'success' => 'Metric created.',
            'failure' => 'Something went wrong with the metric.',
        ],
        'edit' => [
            'title'   => 'Edit a Metric',
            'success' => 'Metric updated.',
            'failure' => 'Something went wrong with the metric.',
        ],
        'delete' => [
            'success' => 'The metric has been deleted and will not show on your status page.',
            'failure' => 'The metric could not be deleted. Please try again.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'  => 'Tilaajat',
        'description'  => 'Subscribers will receive email updates when incidents are created.',
        'verified'     => 'Vahvistettu',
        'not_verified' => 'Not Verified',
        'add'          => [
            'title'   => 'Add a New Subscriber',
            'success' => 'Tilaaja lisätty.',
            'failure' => 'Something went wrong with the component.',
        ],
        'edit' => [
            'title'   => 'Update Subscriber',
            'success' => 'Subscriber updated.',
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
            'title'   => 'Add a New Team Member',
            'success' => 'Ryhmän jäsen lisätty.',
            'failure' => 'Something went wrong with the user.',
        ],
        'edit' => [
            'title'   => 'Update Profile',
            'success' => 'Profiili päivitetty.',
            'failure' => 'Tapahtui virhe päivitettäessä.',
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
