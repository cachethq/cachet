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

    'dashboard'          => 'Taulell de control',
    'writeable_settings' => 'The Cachet settings directory is not writeable. Please make sure that <code>./bootstrap/cachet</code> is writeable by the web server.',

    // Incidents
    'incidents' => [
        'title'                    => 'Incidències i manteniments',
        'incidents'                => 'Incidències',
        'logged'                   => '{0} There are no incidents, good work.|You have logged one incident.|You have reported <strong>:count</strong> incidents.',
        'incident-create-template' => 'Crear plantilla',
        'incident-templates'       => 'Incident Templates',
        'updates'                  => [
            'title'   => 'Incident updates for :incident',
            'count'   => '{0} Zero Updates|[1] One Update|[2] Two Updates|[3,*] Several Updates',
            'add'     => [
                'title'   => 'Create new incident update',
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
            'title'   => 'Informar d\'una incidència',
            'success' => 'Incidència afegida.',
            'failure' => 'Hi ha hagut un problema afegint l\'incidència, si us plau torni a provar-ho.',
        ],
        'edit' => [
            'title'   => 'Modificar una incidència',
            'success' => 'Incidència actualitzada.',
            'failure' => 'There was an error editing the incident, please try again.',
        ],
        'delete' => [
            'success' => 'The incident has been deleted and will not show on your status page.',
            'failure' => 'The incident could not be deleted, please try again.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Incident Templates',
            'add'   => [
                'title'   => 'Create an incident template',
                'message' => 'You should add an incident template.',
                'success' => 'Your new incident template has been created.',
                'failure' => 'Something went wrong with the incident template.',
            ],
            'edit' => [
                'title'   => 'Modificar plantilla',
                'success' => 'The incident template has been updated.',
                'failure' => 'Something went wrong updating the incident template',
            ],
            'delete' => [
                'success' => 'The incident template has been deleted.',
                'failure' => 'The incident template could not be deleted, please try again.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Interrupció programada',
        'logged'       => '{0} There are no schedules, good work.|You have logged one schedule.|You have reported <strong>:count</strong> schedules.',
        'scheduled_at' => 'Scheduled at :timestamp',
        'add'          => [
            'title'   => 'Add Scheduled Maintenance',
            'success' => 'Manteniment afegit.',
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
        'components'         => 'Components',
        'component_statuses' => 'Estats dels components',
        'listed_group'       => 'Grouped under :name',
        'add'                => [
            'title'   => 'Afegir component',
            'message' => 'You should add a component.',
            'success' => 'Component creat.',
            'failure' => 'Something went wrong with the component group, please try again.',
        ],
        'edit' => [
            'title'   => 'Modificar un component',
            'success' => 'Component actualitzat.',
            'failure' => 'Something went wrong with the component group, please try again.',
        ],
        'delete' => [
            'success' => 'S\'ha eliminat el component!',
            'failure' => 'The component could not be deleted, please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Component group|Component groups',
            'no_components' => 'You should add a component group.',
            'add'           => [
                'title'   => 'Afegir un grup de components',
                'success' => 'Component group added.',
                'failure' => 'Something went wrong with the component group, please try again.',
            ],
            'edit' => [
                'title'   => 'Edit a component group',
                'success' => 'Component group updated.',
                'failure' => 'Something went wrong with the component group, please try again.',
            ],
            'delete' => [
                'success' => 'Component group has been deleted!',
                'failure' => 'The component group could not be deleted, please try again.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metrics',
        'add'     => [
            'title'   => 'Create a metric',
            'message' => 'You should add a metric.',
            'success' => 'Metric created.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit a metric',
            'success' => 'Metric updated.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'delete' => [
            'success' => 'The metric has been deleted and will no longer display on your status page.',
            'failure' => 'The metric could not be deleted, please try again.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'          => 'Subscribers',
        'description'          => 'Subscribers will receive email updates when incidents are created or components are updated.',
        'description_disabled' => 'To use this feature, you need allow people to signup for notifications.',
        'verified'             => 'Verified',
        'not_verified'         => 'Not verified',
        'subscriber'           => ':email, subscribed :date',
        'no_subscriptions'     => 'Subscribed to all updates',
        'global'               => 'Globally subscribed',
        'add'                  => [
            'title'   => 'Afegir un nou subscriptor',
            'success' => 'Subscriptor afegit!',
            'failure' => 'Something went wrong adding the subscriber, please try again.',
            'help'    => 'Afegeix únicament un subscriptor per a cada línia.',
        ],
        'edit' => [
            'title'   => 'Modificar subscriptor',
            'success' => 'El subscriptor ha estat actualitzat!',
            'failure' => 'Something went wrong editing the subscriber, please try again.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Equip',
        'member'      => 'Membre',
        'profile'     => 'Perfil',
        'description' => 'Els membres de l\'equip podran afegir i modificar tant components com incidències.',
        'add'         => [
            'title'   => 'Afegit un nou membre a l\'equip',
            'success' => 'Membre de l\'equip afegit.',
            'failure' => 'The team member could not be added, please try again.',
        ],
        'edit' => [
            'title'   => 'Actualitzar perfil',
            'success' => 'Perfil actualitzat.',
            'failure' => 'Something went wrong updating the profile, please try again.',
        ],
        'delete' => [
            'success' => 'Team member has been deleted and will no longer have access to the dashboard!',
            'failure' => 'The team member could not be added, please try again.',
        ],
        'invite' => [
            'title'   => 'Convidar a un nou membre a l\'equip',
            'success' => 'S\'ha enviat una invitació',
            'failure' => 'The invite could not be sent, please try again.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Configuracions',
        'app-setup' => [
            'app-setup'   => 'Application Setup',
            'images-only' => 'Only images may be uploaded.',
            'too-big'     => 'The file you uploaded is too big. Upload an image smaller than :size',
        ],
        'analytics' => [
            'analytics' => 'Analítiques',
        ],
        'log' => [
            'log' => 'Registres',
        ],
        'localization' => [
            'localization' => 'Localization',
        ],
        'customization' => [
            'customization' => 'Personalització',
            'header'        => 'Custom Header HTML',
            'footer'        => 'Custom Footer HTML',
        ],
        'mail' => [
            'mail'  => 'Mail',
            'test'  => 'Test',
            'email' => [
                'subject' => 'Test notification from Cachet',
                'body'    => 'This is a test notification from Cachet.',
            ],
        ],
        'security' => [
            'security'   => 'Seguretat',
            'two-factor' => 'Users without two-factor authentication',
        ],
        'stylesheet' => [
            'stylesheet' => 'Full d\'estils',
        ],
        'theme' => [
            'theme' => 'Tema',
        ],
        'edit' => [
            'success' => 'Configuració desada.',
            'failure' => 'Settings could not be saved.',
        ],
        'credits' => [
            'credits'       => 'Crèdits',
            'contributors'  => 'Contribuïdors',
            'license'       => 'Cachet is a BSD-3-licensed open source project, released by <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => 'Backers & Sponsors',
            'backers'       => 'If you\'d like to support future development, check out the <a href="https://patreon.com/jbrooksuk" target="_blank">Cachet Patreon</a> campaign.',
            'thank-you'     => 'Thank you to each and every one of the :count contributors.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Iniciar Sessió',
        'logged_in'  => 'You\'re logged in.',
        'welcome'    => 'Welcome back!',
        'two-factor' => 'Please enter your token.',
    ],

    // Sidebar footer
    'help'        => 'Ajuda',
    'status_page' => 'Status Page',
    'logout'      => 'Logout',

    // Notifications
    'notifications' => [
        'notifications' => 'Notifications',
        'awesome'       => 'Awesome.',
        'whoops'        => 'Whoops.',
    ],

    // Widgets
    'widgets' => [
        'support'          => 'Support Cachet',
        'support_subtitle' => 'Check out our <strong><a href="https://patreon.com/jbrooksuk" target="_blank">Patreon</a></strong> page!',
        'news'             => 'Latest News',
        'news_subtitle'    => 'Get the latest update',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welcome to your new status page, :username!',
        'message' => 'You\'re almost ready but you might want to configure these extra settings first...',
        'close'   => 'I\'m good thanks!',
        'steps'   => [
            'component'  => 'Add your components',
            'incident'   => 'Create an incident',
            'customize'  => 'Customize your page',
            'team'       => 'Add your team',
            'api'        => 'Generate an API token',
            'two-factor' => 'Setup Two Factor Authentication',
        ],
    ],

];
