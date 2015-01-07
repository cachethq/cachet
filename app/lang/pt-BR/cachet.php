<?php

return [
    // Components
    'components' => [
        'status' => [
            1 => 'Funcionando',
            2 => 'Identificado',
            3 => 'Observando',
            4 => 'Solucionado',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Nenhum incidente reportado.',
        'past'          => 'Incidentes anteriores',
        'previous_week' => 'Semana anterior',
        'next_week'     => 'Próxima semana',
        'none'          => 'Nada a relatar',
        'status'        => [
            1 => 'Investigando',
            2 => 'Identificado',
            3 => 'Observando',
            4 => 'Solucionado',
        ],
    ],

    // Service Status
    'service' => [
        'good' => 'Todos os serviços estão operando normalmente.',
        'bad'  => 'Alguns serviços estão passando por problemas.',
    ],

    'api' => [
        'regenerate' => 'Gerar nova chave de API',
        'revoke'     => 'Revogar a chave de API',
    ],

    // Other
    'powered_by'      => ':app Esta Status Page é fornecida por <a href="https://cachethq.github.io">Cachet</a>.',
    'about_this_site' => 'Sobre este site',
    'rss-feed'        => 'RSS Feed',
    'atom-feed'       => 'Atom Feed',
    'feed'            => 'Status Feed',
];
