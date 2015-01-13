<?php

return [
    // Components
    'components' => [
        'status' => [
            1 => 'Operational',
            2 => 'Performance Probleme',
            3 => 'Teilweise Ausfall',
            4 => 'größerer Ausfall',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'keine Ereignisse.',
        'past'          => 'vergangene Ereignisse',
        'previous_week' => 'letzte Woche',
        'next_week'     => 'nächste Woche',
        'none'          => 'keine Ereignisse',
        'status'        => [
            1 => 'in Untersuchung',
            2 => 'identifiziert',
            3 => 'unter Beobachtung',
            4 => 'Problem behoben',
        ],
    ],

    // Service Status
    'service' => [
        'good' => 'Alle Systeme laufen.',
        'bad'  => 'Bei einigen System sind Fehler aufgetreten.',
    ],

    'api' => [
        'regenerate' => 'API-Schlüssel generieren',
        'revoke'     => 'API-Schlüssel löschen',
    ],

    // Other
    'powered_by'      => ':app Status-Seite via <a href="https://cachethq.io">Cachet</a>.',
    'about_this_site' => 'Über diese Seite',
    'rss-feed'        => 'RSS Feed',
    'atom-feed'       => 'Atom Feed',
    'feed'            => 'Status Feed',

];
