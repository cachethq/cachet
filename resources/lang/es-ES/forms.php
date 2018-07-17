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

    // Setup form fields
    'setup' => [
        'email'            => 'Correo electrónico',
        'username'         => 'Nombre de usario',
        'password'         => 'Contraseña',
        'site_name'        => 'Nombre del sitio',
        'site_domain'      => 'Dominio de sitio',
        'site_timezone'    => 'Selecciona tu zona horaria',
        'site_locale'      => 'Selecciona tu idioma',
        'enable_google2fa' => 'Habilitar la verificación en dos pasos de Google',
        'cache_driver'     => 'Controlador de Memoria Cache',
        'queue_driver'     => 'Queue Driver',
        'session_driver'   => 'Controlador de Sesion',
        'mail_driver'      => 'Valora al conductor',
        'mail_host'        => 'Host de correo',
        'mail_address'     => 'Dirección de Correo Físico',
        'mail_username'    => 'Nombre de usuario de correo',
        'mail_password'    => 'Contraseña de correo',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Nombre de usuario o dirección de correo electrónico',
        'email'         => 'Correo electrónico',
        'password'      => 'Contraseña',
        '2fauth'        => 'Código de Autenticación',
        'invalid'       => 'Nombre de usuario o contraseña incorrecto',
        'invalid-token' => 'Token inválido',
        'cookies'       => 'Usted debe habilitar cookies para logearse o iniciar sesion.',
        'rate-limit'    => 'Límite de transferencia excedido.',
        'remember_me'   => 'Remember me',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Nombre',
        'status'             => 'Estado',
        'component'          => 'Componente',
        'component_status'   => 'Component Status',
        'message'            => 'Mensaje',
        'message-help'       => 'También puedes usar Markdown.',
        'occurred_at'        => 'When did this incident occur?',
        'notify_subscribers' => '¿Notificar a los suscriptores?',
        'notify_disabled'    => 'Due to scheduled maintenance, notifications about this incident or its components will be suppressed.',
        'visibility'         => 'Visibilidad del incidente',
        'stick_status'       => 'Stick Incident',
        'stickied'           => 'Stickied',
        'not_stickied'       => 'Not Stickied',
        'public'             => 'Visible por el público',
        'logged_in_only'     => 'Solo visible para usuarios logeados',
        'templates'          => [
            'name'     => 'Nombre',
            'template' => 'Plantilla',
            'twig'     => 'Las plantillas de incidentes pueden hacer uso del lenguaje de plantillas <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>.',
        ],
    ],

    'schedules' => [
        'name'         => 'Nombre',
        'status'       => 'Estado',
        'message'      => 'Mensaje',
        'message-help' => 'También puedes usar Markdown.',
        'scheduled_at' => 'When is this maintenance scheduled for?',
        'completed_at' => 'When did this maintenance complete?',
        'templates'    => [
            'name'     => 'Nombre',
            'template' => 'Plantilla',
            'twig'     => 'Las plantillas de incidentes pueden hacer uso del lenguaje de plantillas <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Nombre',
        'status'      => 'Estado',
        'group'       => 'Grupo',
        'description' => 'Descripción',
        'link'        => 'Enlace',
        'tags'        => 'Etiquetas',
        'tags-help'   => 'Separado por comas.',
        'enabled'     => '¿Componente habilitado?',

        'groups' => [
            'name'                     => 'Nombre',
            'collapsing'               => 'Expand/Collapse options',
            'visible'                  => 'Siempre expandido',
            'collapsed'                => 'Contraer el grupo por defecto',
            'collapsed_incident'       => 'Contraer el grupo, pero ampliar si hay problemas',
            'visibility'               => 'Visibility',
            'visibility_public'        => 'Visible to public',
            'visibility_authenticated' => 'Visible only to logged in users',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => 'Nombre',
        'description'        => 'Descripción',
        'start_at'           => 'Schedule start time',
        'timezone'           => 'Timezone',
        'schedule_frequency' => 'Schedule frequency (in seconds)',
        'completion_latency' => 'Completion latency (in seconds)',
        'group'              => 'Grupo',
        'active'             => 'Active?',
        'groups'             => [
            'name' => 'Group Name',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'                     => 'Nombre',
        'suffix'                   => 'Sufijo',
        'description'              => 'Descripción',
        'description-help'         => 'También puedes usar Markdown.',
        'display-chart'            => '¿Mostrar gráficas en la pagina de estado?',
        'default-value'            => 'Valor predeterminado',
        'calc_type'                => 'Cálculo de métricas',
        'type_sum'                 => 'Suma',
        'type_avg'                 => 'Promedio',
        'places'                   => 'Cantidad de decimales',
        'default_view'             => 'Vista predeterminada',
        'threshold'                => '¿Cuántos minutos de umbral entre púntos de métrica?',
        'visibility'               => 'Visibility',
        'visibility_authenticated' => 'Visible to authenticated users',
        'visibility_public'        => 'Visible to everybody',
        'visibility_hidden'        => 'Always hidden',

        'points' => [
            'value' => 'Valor',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                             => 'Nombre del sitio',
            'site-url'                              => 'URL del sitio',
            'display-graphs'                        => '¿Mostrar gráficas en la pagina de estado?',
            'about-this-page'                       => 'Sobre esta página',
            'days-of-incidents'                     => '¿Cuántos días de incidentes mostrar?',
            'time_before_refresh'                   => 'Status page refresh rate (in seconds)',
            'major_outage_rate'                     => 'Major outage threshold (in %)',
            'banner'                                => 'Imagen del banner',
            'banner-help'                           => "It's recommended that you upload files no bigger than 930px wide",
            'subscribers'                           => '¿Permitir a la gente inscribirse mediante noficiacion por correo electronico?',
            'suppress_notifications_in_maintenance' => 'Suppress notifications when incident occurs during maintenance period?',
            'skip_subscriber_verification'          => 'Skip verifying of users? (Be warned, you could be spammed)',
            'automatic_localization'                => '¿Traducir automáticamente la página de estado según el lenguaje del visitante?',
            'enable_external_dependencies'          => 'Enable Third Party Dependencies (Google Fonts, Trackers, etc...)',
            'show_timezone'                         => 'Show the timezone the status page is running in',
            'only_disrupted_days'                   => 'Only show days containing incidents in the timeline?',
        ],
        'analytics' => [
            'analytics_google'       => 'Código de Google Analytics',
            'analytics_gosquared'    => 'Código de GoSquared Analytics',
            'analytics_piwik_url'    => 'URL de tu instancia Piwik (sin el http(s)://)',
            'analytics_piwik_siteid' => 'Id de tu sitio Piwik',
        ],
        'localization' => [
            'site-timezone'        => 'Zona horaria del sitio',
            'site-locale'          => 'Idioma del sitio',
            'date-format'          => 'Formato de la fecha',
            'incident-date-format' => 'Formato de fecha de incidente',
        ],
        'security' => [
            'allowed-domains'           => 'Dominios permitidos',
            'allowed-domains-help'      => 'Separados por coma. El dominio establecido en la configuración del sitio formará automáticamente parte de los dominios permitidos.',
            'always-authenticate'       => 'Always authenticate',
            'always-authenticate-help'  => 'Require login to view any Cachet page',
        ],
        'stylesheet' => [
            'custom-css' => 'Hoja de estilo personalizada',
        ],
        'theme' => [
            'background-color'        => 'Color de fondo',
            'background-fills'        => 'Relleno del fondo (componentes, incidentes, pie)',
            'banner-background-color' => 'Color de fondo del banner',
            'banner-padding'          => 'Padding del banner',
            'fullwidth-banner'        => 'Enable full width banner?',
            'text-color'              => 'Color del texto',
            'dashboard-login'         => '¿Mostrar el botón de Panel de Control en el pie?',
            'reds'                    => 'Rojo (usado para errores)',
            'blues'                   => 'Azul (usado para información)',
            'greens'                  => 'Verde (usado para operaciones correctas)',
            'yellows'                 => 'Amarillo (usado para alertas)',
            'oranges'                 => 'Naranja (usado para avisos)',
            'metrics'                 => 'Relleno de las métricas',
            'links'                   => 'Enlaces',
        ],
    ],

    'user' => [
        'username'       => 'Nombre de usario',
        'email'          => 'Correo electrónico',
        'password'       => 'Contraseña',
        'api-token'      => 'API Token',
        'api-token-help' => 'Regenerando tu token de API evitaras que las aplicaciones existentes puedan acceder a Cachet.',
        'gravatar'       => 'Change your profile picture at Gravatar.',
        'user_level'     => 'Nivel de usuario',
        'levels'         => [
            'admin' => 'Administrador',
            'user'  => 'Usuario',
        ],
        '2fa' => [
            'help' => 'Habilitar autenticación de dos pasos aumenta la seguridad de tu cuenta. Necesitarás descargar <a href="https://support.google.com/accounts/answer/1066447?hl=en"> Google Authenticator</a> o una aplicación similar a su dispositivo móvil. Al iniciar sesión, te pedirá proporcionar un token generado por la aplicación.',
        ],
        'team' => [
            'description' => 'Invita a los miembros de equipo introduciendo sus direcciones de correo electrónico aquí.',
            'email'       => 'Your Team Members Email Address',
        ],
    ],

    'general' => [
        'timezone' => 'Select Timezone',
    ],

    // Buttons
    'add'            => 'Agregar',
    'save'           => 'Guardar',
    'update'         => 'Actualizar',
    'create'         => 'Crear',
    'edit'           => 'Editar',
    'delete'         => 'Eliminar',
    'submit'         => 'Enviar',
    'cancel'         => 'Cancelar',
    'remove'         => 'Remover',
    'invite'         => 'Invitar',
    'signup'         => 'Registrarse',
    'manage_updates' => 'Manage Updates',

    // Other
    'optional' => '* Opcional',
];
