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
    'powered_by'   => ':app Está página ha sido creada por <a href="https://cachethq.github.io">Cachet</a>.',
    'login'        => 'Entrar',
    'logout'       => 'Salir',
    'logged_in'    => 'Estás conectado.',
    'setup'        => 'Configurar Cachet',
    'no_incidents' => 'Sin incidentes reportados.',
    'dashboard'    => [
        'dashboard'                => 'Panel de control',
        'components'               => 'Componentes',
        'component-add'            => 'Agregar componente',
        'incidents'                => 'Incidencias',
        'incident-add'             => 'Agregar incidencia',
        'incident-create-template' => 'Crear plantilla',
        'metrics'                  => 'Métricas',
        'metrics-add'              => 'Añadir punto de métrica',
        'status_page'              => 'Página de estado del sistema',
        'settings'                 => 'Ajustes',
        'notifications'            => 'Notificaciones',
        'toggle_navigation'        => 'Alternar Navegación',
        'search'                   => 'Buscar',
        'user'                     => 'Usuario',
    ],
    // Forms
    'forms' => [
        'email'    => 'Correo electrónico',
        'password' => 'Contraseña',
        // Setup Form
        'setup' => [
            'service_details'   => 'Detalles del servicio',
            'status_page_setup' => 'Configuración página de estado del sistema',
            'site_name'         => 'Nombre del sitio',
            'site_domain'       => 'Dominio del sitio',
            'show_support'      => 'Mostrar apoyo por Cachet',
            'admin_account'     => 'Cuenta de administrador',
            'admin_username'    => 'Usuario de administrador',
            'finish_setup'      => 'Terminar configuración',
        ],
    ],
];
