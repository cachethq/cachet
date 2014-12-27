<?php

return [
    // Components
    'component' => [
        'status' => [
            1 => 'Fungerar',
            2 => 'Prestandaproblem',
            3 => 'Delvisa avbrott',
            4 => 'Större avbrott',
        ],
    ],
    // Incidents
    'incident' => [
        'status' => [
            1 => 'Undersöker',
            2 => 'Prestandaproblem',
            3 => 'Delvisa avbrott',
            4 => 'Större avbrott',
        ],
    ],
    // Service Status
    'service' => [
        'good' => 'Alla system fungerar.',
        'bad'  => 'Vissa system har problem.',
    ],
    // Other
    'powered_by'   => ':app Statussida körs via <a href="https://cachethq.github.io">Cachet</a>.',
    'logout'       => 'Logga ut',
    'logged_in'    => 'Du är inloggad.',
    'setup'        => 'Ställ in Cachet',
    'no_incidents' => 'Inga händelser har rapporterats.',
    'dashboard'    => [
        'dashboard'                => 'Översiktspanel',
        'components'               => 'Komponenter',
        'component-add'            => 'Lägg till komponent',
        'incidents'                => 'Händelser',
        'incident-add'             => 'Lägg till händelse',
        'incident-create-template' => 'Skapa mall',
        'metrics'                  => 'Mått',
        'metrics-add'              => 'Lägg till mätpunkt',
        'status_page'              => 'Statussida',
        'settings'                 => 'Inställningar',
        'notifications'            => 'Aviseringar',
        'toggle_navigation'        => 'Växla navigering',
        'search'                   => 'Sök...',
        'user'                     => 'Konto',
    ],
];
