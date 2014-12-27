<?php

return [
    // Components
    'component' => [
        'status' => [
            1 => 'Operativo',
            2 => 'Problemi relativi alle Prestazioni',
            3 => 'Interruzione Parziale',
            4 => 'Interruzione Principale',
        ],
    ],
    // Incidents
    'incident' => [
        'status' => [
            1 => 'Indagando',
            2 => 'Problemi relativi alle Prestazioni',
            3 => 'Interruzione Parziale',
            4 => 'Interruzione Principale',
        ],
    ],
    // Service Status
    'service' => [
        'good' => 'Tutti i sistemi sono funzionanti.',
        'bad'  => 'Alcuni sistemi stanno riscontrando dei problemi.',
    ],
    // Other
    'powered_by'   => ':app Pagina di Stato creata utilizzando <a href="https://cachethq.github.io">Cachet</a>.',
    'logout'       => 'Esci',
    'logged_in'    => 'Sei connesso.',
    'setup'        => 'Installa Cachet',
    'no_incidents' => 'Non sono stati segnalati incidenti.',
    'dashboard'    => [
        'dashboard'                => 'Dashboard',
        'components'               => 'Componenti',
        'component-add'            => 'Aggiungi Componente',
        'incidents'                => 'Incidenti',
        'incident-add'             => 'Aggiungi Incidente',
        'incident-create-template' => 'Crea Modello',
        'metrics'                  => 'Metriche',
        'metrics-add'              => 'Aggiungi Punto di Metrica',
        'status_page'              => 'Pagina di Stato',
        'settings'                 => 'Impostazioni',
        'notifications'            => 'Notifiche',
        'toggle_navigation'        => 'Mostra/Nascondi Navigazione',
        'search'                   => 'Cerca...',
        'user'                     => 'Utente',
    ],
];
