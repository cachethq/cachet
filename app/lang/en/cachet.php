<?php

return [
    // Components
    'component' => [
        'status' => [
            1 => 'Operational',
            2 => 'Performance Issues',
            3 => 'Partial Outage',
            4 => 'Major Outage',
        ],
    ],
    // Incidents
    'incident' => [
        'status' => [
            1 => 'Investigating',
            2 => 'Identified',
            3 => 'Watching',
            4 => 'Fixed',
        ],
    ],
    // Service Status
    'service' => [
        'good' => 'All systems are functional.',
        'bad'  => 'Some systems are experiencing issues.',
    ],
    // Other
    'powered_by'   => ':app Status Page is powered by <a href="https://cachethq.github.io">Cachet</a>.',
    'login'        => 'Login',
    'logout'       => 'Logout',
    'logged_in'    => 'You\'re logged in.',
    'setup'        => 'Setup Cachet',
    'no_incidents' => 'No incidents reported.',
    'dashboard'    => [
        'dashboard'                => 'Dashboard',
        'components'               => 'Components',
        'component-add'            => 'Add Component',
        'incidents'                => 'Incidents',
        'incident-add'             => 'Add Incident',
        'incident-create-template' => 'Create Template',
        'metrics'                  => 'Metrics',
        'metrics-add'              => 'Add Metric Point',
        'status_page'              => 'Status Page',
        'settings'                 => 'Settings',
        'notifications'            => 'Notifications',
        'toggle_navigation'        => 'Toggle Navigation',
        'search'                   => 'Search...',
        'user'                     => 'User',
    ],
    // Forms
    'forms' => [
        'email' => 'Email',
        'password' => 'Password',
    ]
];
