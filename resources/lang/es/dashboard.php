<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    'dashboard' => 'Panel de Control',

    // Incidents
    'incidents' => [
        'incidents'                => 'Incidentes',
        'logged'                   => '{0} No hay incidentes, ¡buen trabajo!|Has registrado un incidente.|Has reportado <strong>:count</strong> incidentes.',
        'incident-create-template' => 'Crear plantilla',
        'incident-templates'       => 'Plantillas de incidente',
        'add'                      => [
            'title'   => 'Agregar un incidente',
            'success' => 'Incidente agregado.',
            'failure' => 'Algo salió mal con el incidente.',
        ],
        'edit' => [
            'title'   => 'Editar un incidente',
            'success' => 'Incidente actualizado.',
            'failure' => 'Algo salió mal con el incidente.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Plantillas de incidente',
            'add'   => [
                'title'   => 'Crear una plantilla de incidente',
                'success' => 'Plantilla creada.',
                'failure' => 'Algo salió mal con la plantilla de incidente.',
            ],
            'edit' => [
                'title'   => 'Editar plantilla',
                'success' => '¡Se ha actualizado la plantilla!',
                'failure' => 'Algo salió mal actualizar la plantilla de incidente',
            ],
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Componentes',
        'component_statuses' => 'Estatus de los componentes',
        'add'                => [
            'title'   => 'Agregar un componente',
            'message' => 'Deberías agregar un componente.',
            'success' => 'Componente creado.',
            'failure' => 'Algo salió mal con el componente.',
        ],
        'edit' => [
            'title'   => 'Editar un componente',
            'success' => 'Componente actualizado.',
            'failure' => 'Algo salió mal con el componente.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Grupo de componente|Grupos de componente',
            'no_components' => 'Deberías añadir un grupo de componentes.',
            'add'           => [
                'title'   => 'Agregar un grupo',
                'success' => 'Grupo componente agregado.',
                'failure' => 'Algo salió mal con el grupo del componente.',
            ],
            'edit' => [
                'title'   => 'Editar un grupo de componentes',
                'success' => 'Grupo de componentes actualizado.',
                'failure' => 'Algo salió mal con el grupo de componentes.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Métricas',
        'add'     => [
            'title'   => 'Crear una métrica',
            'success' => 'Métrica creada.',
            'failure' => 'Algo salió mal con la métrica.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Equipo',
        'member'      => 'Miembro',
        'profile'     => 'Perfil',
        'description' => 'Los miembros del equipo será capaces de añadir, modificar y editar componentes e incidentes.',
        'add'         => [
            'title'   => 'Agregar miembro de equipo',
            'success' => 'Miembro del equipo agregado.',
            'failure' => 'Algo salió mal con el componente.',
        ],
        'edit' => [
            'title'   => 'Actualizar perfil',
            'success' => 'Perfil actualizado.',
            'failure' => 'Algo salió mal al actualizar.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Ajustes',
        'app-setup' => [
            'app-setup'   => 'Configuración',
            'images-only' => 'Sólo puedes subir imágenes.',
            'too-big'     => 'El archivo subido es demasiado grande. Sube una imagen con tamaño menor a: tamaño',
        ],
        'analytics' => [
            'analytics' => 'Analytics',
        ],
        'localization' => [
            'localization' => 'Localization',
        ],
        'security' => [
            'security' => 'Seguridad',
        ],
        'stylesheet' => [
            'stylesheet' => 'Hoja de estilo',
        ],
        'theme' => [
            'theme' => 'Tema',
        ],
        'edit' => [
            'success' => 'Configuración guardada.',
            'failure' => 'La configuración no ha podido ser guardada.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Iniciar Sesión',
        'logged_in'  => 'Estás conectado.',
        'welcome'    => '¡Bienvenido!',
        'two-factor' => 'Por favor ingresa tu token.',
    ],

    // Sidebar footer
    'help'        => 'Ayuda',
    'status_page' => 'Página de estado',
    'logout'      => 'Salir',

    // Notifications
    'notifications' => [
        'notifications' => 'Notificaciones',
        'awesome'       => 'Excelente.',
        'whoops'        => 'Ups.',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Bienvenido a Cachet',
        'message' => '¡La página de estado está casi lista! Tal vez quieras configurar estos ajustes adicionales',
        'close'   => 'Ir directo al Panel de Control',
        'steps'   => [
            'component'  => 'Crear componentes',
            'incident'   => 'Crear incidentes',
            'customize'  => 'Personaliza tu página de estado Cachet.',
            'team'       => 'Agregar usuarios a tu equipo.',
            'api'        => 'Generar token API.',
            'two-factor' => 'Habilitar autenticación de dos pasos.',
        ],
    ],

];
