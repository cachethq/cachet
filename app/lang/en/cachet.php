<?php

return [
    // Components
    'components' => [
        'status' => [
            1 => 'Operational',
            2 => 'Performance Issues',
            3 => 'Partial Outage',
            4 => 'Major Outage',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'No incidents reported.',
        'past'          => 'Past incidents',
        'previous_week' => 'Previous week',
        'next_week'     => 'Next week',
        'none'          => 'Nothing to report',
        'status'        => [
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

    'api' => [
        'regenerate' => 'Regenerate API Key',
        'revoke'     => 'Revoke API Key',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'hourly'  => 'Hourly',
            'daily'   => 'Daily',
            'monthly' => 'Monthly',
        ],
    ],

    // Other
    'powered_by'      => ':app Status Page is powered by <a href="https://cachethq.io">Cachet</a>.',
    'about_this_site' => 'About this site',
    'rss-feed'        => 'RSS Feed',
    'atom-feed'       => 'Atom Feed',
    'feed'            => 'Status Feed',

];
