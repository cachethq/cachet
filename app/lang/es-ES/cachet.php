<?php

return [
    // Components
    'component' => [
        'status' => [
            1 => 'Operacional',
            2 => 'Problemas de rendimiento',
            3 => 'Interrupción parcial',
            4 => 'Interrupción mayor',
        ],
    ],
    // Incidents
    'incident' => [
        'status' => [
            1 => 'Investigando',
            2 => 'Problemas de rendimiento',
            3 => 'Interrupción parcial',
            4 => 'Interrupción mayor',
        ],
    ],
    // Service Status
    'service' => [
        'good' => 'Todos los sistemas funcionando.',
        'bad'  => 'Algunos sistemas están experimentando problemas.',
    ],
    // Other
    'powered_by'   => '',
    'login'        => '',
    'logout'       => 'Salir',
    'logged_in'    => 'Estás conectado.',
    'setup'        => 'Configurar Cachet',
    'no_incidents' => 'Sin incidentes reportados.',
    'dashboard'    => [
        'dashboard'                => '',
        'components'               => 'Componentes',
        'component-add'            => 'Agregar componente',
        'incidents'                => 'Incidentes',
        'incident-add'             => 'Agregar incidente',
        'incident-create-template' => 'Crear plantilla',
        'metrics'                  => 'Métricas',
        'metrics-add'              => 'Añadir punto de métrica',
        'status_page'              => '',
        'settings'                 => 'Ajustes',
        'notifications'            => 'Notificaciones',
        'toggle_navigation'        => 'Alternar Navegación',
        'search'                   => 'Búscar...',
        'user'                     => 'Usuario',
    ],
    // Forms
    'forms' => [
        'email'    => '',
        'password' => '',
        // Setup Form
        'setup' => [
            'service_details'   => '',
            'status_page_setup' => '',
            'site_name'         => '',
            'site_domain'       => '',
            'show_support'      => '',
            'admin_account'     => '',
            'admin_username'    => '',
            'finish_setup'      => '',
        ],
    ],
];
