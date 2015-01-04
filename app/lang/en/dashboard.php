<?php

return [

    'dashboard'         => 'Dashboard',

    // Incidents
    'incidents'         => [
        'incidents'                => 'Incidents',
        'logged'                   => '{0} There are no incidents, good work.|You have logged one incident.|You have reported <strong>:count</strong> incidents.',
        'incident-create-template' => 'Create Template',
        'add'                      => [
            'title'   => 'Add Incident',
            'success' => 'Incident added.',
            'failure' => 'Something went wrong with the incident.'
        ],
        'edit'                     => [
            'title'   => 'Edit an Incident',
            'success' => 'Incident updated.',
            'failure' => 'Something went wrong with the incident.'
        ],

        // Incident templates
        'templates'                => [
            'add' => [
                'title'   => 'Create an Incident Template',
                'success' => 'Template added.',
                'failure' => 'Something went wrong with the incident template.'
            ]
        ]
    ],

    // Components
    'components'        => [
        'components'         => 'Component|Components',
        'component_statuses' => 'Component Statuses',
        'add'                => [
            'title'   => 'Add component',
            'message' => 'You should add a component.',
            'success' => 'Component added.',
            'failure' => 'Something went wrong with the component.'
        ],
        'edit'               => [
            'title'   => 'Edit component',
            'success' => 'Component updated.',
            'failure' => 'Something went wrong with the component.'
        ]
    ],

    // Metrics
    'metrics'           => [
        'metrics' => 'Metrics',
        'add'     => [
            'title' => 'Add Metric Point'
        ]
    ],

    // Settings
    'settings'          => [
        'settings'   => 'Settings',
        'app-setup'  => [
            'app-setup' => 'Application Setup'
        ],
        'security'   => [
            'security' => 'Security'
        ],
        'stylesheet' => [
            'stylesheet' => 'Stylesheet'
        ],
        'theme'      => [
            'theme' => 'Theme'
        ],
        'edit'       => [
            'success' => 'Settings saved.',
            'failure' => 'Settings could not be saved.'
        ]
    ],

    // User profile
    'user'              => [
        'user' => 'User',
        'edit' => [
            'success' => 'Profile updated.',
            'failure' => 'Something went wrong when updating.'
        ]
    ],

    // Login
    'login'             => [
        'login'     => 'Login',
        'logged_in' => "You're logged in.",
        'welcome'   => 'Welcome Back!',
    ],

    // Sidebar footer
    'help'              => 'Help',
    'status_page'       => 'Status Page',
    'logout'            => 'Logout',

    // Notifications
    'notifications'     => [
        'notifications' => 'Notifications',
        'awesome'       => 'Awesome.',
        'whoops'        => 'Whoops.'
    ],

    // ?
    'toggle_navigation' => 'Toggle Navigation',
    'search'            => 'Search...',

];