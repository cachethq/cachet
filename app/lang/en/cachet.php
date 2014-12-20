<?php

return array(
    // Components
    'component' => array(
        'status' => array(
            1 => 'Operational',
            2 => 'Performance Issues',
            3 => 'Partial Outage',
            4 => 'Major Outage'
        )
    ),
    // Incidents
    'incident' => array(
        'status' => array(
            1 => 'Investigating',
            2 => 'Identified',
            3 => 'Watching',
            4 => 'Fixed'
        )
    ),
    // Service Status
    'service' => array(
        'good' => 'All systems are functional.',
        'bad' => 'Some systems are experiencing issues.',
    ),
    // Other
    'powered_by' => ':app Status Page is powered by <a href="https://cachethq.github.io">Cachet</a>.',
    'logout' => 'Logout',
    'logged_in' => 'You\'re logged in.',
    'setup' => 'Setup Cachet',
    'dashboard' => array(
        'dashboard' => 'Dashboard',
        'components' => 'Components',
        'component-add' => 'Add Component',
        'incidents' => 'Incidents',
        'incident-add' => 'Add Incident',
        'metrics' => 'Metrics',
        'status_page' => 'Status Page',
        'settings' => 'Settings',
        'notifications' => 'Notifications',
        'toggle_navigation' => 'Toggle Navigation',
        'search' => 'Search...',
    ),
);
