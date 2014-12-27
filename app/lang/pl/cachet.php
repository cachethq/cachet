<?php

return [
    // Components
    'component' => [
        'status' => [
            1 => 'Sprawny',
            2 => 'Problemy z wydajnością',
            3 => 'Częściowa awaria',
            4 => 'Poważna awaria',
        ],
    ],
    // Incidents
    'incident' => [
        'status' => [
            1 => 'Badanie',
            2 => 'Problemy z wydajnością',
            3 => 'Częściowa awaria',
            4 => 'Poważna awaria',
        ],
    ],
    // Service Status
    'service' => [
        'good' => 'Wszystkie systemy sprawne.',
        'bad'  => 'Wykryto problemy w części systemów.',
    ],
    // Other
    'powered_by'   => ':app monitor działa na silniku <a href="https://cachethq.github.io">Cachet</a>.',
    'logout'       => 'Wyloguj',
    'logged_in'    => 'Jesteś zalogowany.',
    'setup'        => 'Skonfiguruj Cachet',
    'no_incidents' => 'Brak zgłoszonych problemów.',
    'dashboard'    => [
        'dashboard'                => 'Pulpit',
        'components'               => 'Komponenty',
        'component-add'            => 'Dodaj komponent',
        'incidents'                => 'Problemy',
        'incident-add'             => 'Zgłoś problem',
        'incident-create-template' => 'Stwórz szablon',
        'metrics'                  => 'Metryki',
        'metrics-add'              => 'Dodaj metrykę',
        'status_page'              => 'Strona statusowa',
        'settings'                 => 'Ustawienia',
        'notifications'            => 'Powiadomienia',
        'toggle_navigation'        => 'Schowaj/pokaż nawigację',
        'search'                   => 'Szukaj...',
        'user'                     => 'Użytkownik',
    ],
];
