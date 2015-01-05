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
        'none' => 'Nothing to report',
    ],
    // Service Status
    'service' => [
        'good' => 'All systems are functional.',
        'bad'  => 'Some systems are experiencing issues.',
    ],
    // Other
    'powered_by'      => ':app Status Page is powered by <a href="https://cachethq.io">Cachet</a>.',
    'about_this_site' => 'About this site',
    'login_message'   => 'Welcome Back!',
    'login'           => 'Login',
    'logout'          => 'Logout',
    'logged_in'       => 'You\'re logged in.',
    'setup'           => 'Setup Cachet',
    'no_incidents'    => 'No incidents reported.',
    'past_incidents'  => 'Past incidents',
    'previous_week'   => 'Previous week',
    'next_week'       => 'Next week',
    // Dashboard
    'dashboard' => [
        'dashboard'                => 'Dashboard',
        'components'               => 'Components',
        'component-add'            => 'Add Component',
        'component-groups'         => 'Component Groups',
        'component-groups-add'     => 'Create Group',
        'incidents'                => 'Incidents',
        'incident-add'             => 'Add Incident',
        'incident-create-template' => 'Create Template',
        'metrics'                  => 'Metrics',
        'metrics-add'              => 'Add Metric Point',
        'status_page'              => 'Status Page',
        'settings'                 => 'Settings',
        'team'                     => 'Team Members',
        'team-add'                 => 'Add Team Member',
        'notifications'            => 'Notifications',
        'toggle_navigation'        => 'Toggle Navigation',
        'search'                   => 'Search...',
        'user'                     => 'User',
        'help'                     => 'Help',
        'logged_incidents'         => '{0} There are no incidents, good work.|You have logged one incident.|You have reported <strong>:count</strong> incidents.',
        'settings_saved'           => 'Settings saved.',
        'settings_not_saved'       => 'Settings could not be saved.',
        'not_found'                => 'Page Not Found',
        'not_found_title'          => 'That page went missing!',
        'not_found_message'        => 'Sorry, but the page you are looking for has not been found. Check the URL for errors and try again.',
        'not_found_link'           => 'Return to homepage',
    ],
    // Forms
    'forms' => [
        'email'    => 'Email',
        'password' => 'Password',
        // Setup Form
        'setup' => [
            'service_details'   => 'Service Details',
            'status_page_setup' => 'Status Page Setup',
            'site_name'         => 'Site Name',
            'site_domain'       => 'Site Domain',
            'show_support'      => 'Show support for Cachet?',
            'admin_account'     => 'Administrator Account',
            'admin_username'    => 'Username',
            'finish_setup'      => 'Complete Setup',
        ],
    ],
];
