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
        'queue_driver'     => 'Controlador de cola',
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
        'remember_me'   => 'Recuérdame',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Nombre',
        'status'             => 'Estado',
        'component'          => 'Componente',
        'message'            => 'Mensaje',
        'message-help'       => 'También puedes usar Markdown.',
        'occurred_at'        => '¿Cuando ocurrió este incidente?',
        'notify_subscribers' => '¿Notificar a los suscriptores?',
        'visibility'         => 'Visibilidad del incidente',
        'stick_status'       => 'Pega Incidente',
        'stickied'           => 'Fijado',
        'not_stickied'       => 'No Pegado',
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
        'scheduled_at' => '¿Cuándo será programado este mantenimiento?',
        'completed_at' => '¿Cuándo terminó este mantenimiento?',
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
            'collapsing'               => 'Opciones de Expandir/Colapsar',
            'visible'                  => 'Siempre expandido',
            'collapsed'                => 'Contraer el grupo por defecto',
            'collapsed_incident'       => 'Contraer el grupo, pero ampliar si hay problemas',
            'visibility'               => 'Visibilidad',
            'visibility_public'        => 'Público',
            'visibility_authenticated' => 'Visible solamente a usuarios conectados',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => 'Nombre',
        'description'        => 'Descripción',
        'start_at'           => 'Programar hora de inicio',
        'timezone'           => 'Zona horaria',
        'schedule_frequency' => 'Programar frecuencia (en segundos)',
        'completion_latency' => 'Latencia de completado (en segundos)',
        'group'              => 'Grupo',
        'active'             => '¿Activo?',
        'groups'             => [
            'name' => 'Nombre del grupo',
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
        'visibility'               => 'Visibilidad',
        'visibility_authenticated' => 'Visible para los usuarios autenticados',
        'visibility_public'        => 'Visible para todos',
        'visibility_hidden'        => 'Siempre escondido',

        'points' => [
            'value' => 'Valor',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                    => 'Nombre del sitio',
            'site-url'                     => 'URL del sitio',
            'display-graphs'               => '¿Mostrar gráficas en la pagina de estado?',
            'about-this-page'              => 'Sobre esta página',
            'days-of-incidents'            => '¿Cuántos días de incidentes mostrar?',
            'time_before_refresh'          => 'Status page refresh rate (in seconds).',
            'banner'                       => 'Imagen del banner',
            'banner-help'                  => "Se recomienda subir una imagen no más grande de 930px de ancho .",
            'subscribers'                  => '¿Permitir a la gente inscribirse mediante noficiacion por correo electronico?',
            'skip_subscriber_verification' => '¿Omitir verificación de usuarios? (Advertencia, podrías ser spammeado)',
            'automatic_localization'       => '¿Traducir automáticamente la página de estado según el lenguaje del visitante?',
            'enable_external_dependencies' => 'Activar Dependencias de Terceros (Google Fonts, Trackers, etc...)',
            'show_timezone'                => 'Mostrar la zona horaria en la que se está ejecutando la página de estado.',
            'only_disrupted_days'          => '¿Solamente mostrar en la línea de tiempo días que contengan incidentes?',
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
            'allowed-domains'      => 'Dominios permitidos',
            'allowed-domains-help' => 'Separados por coma. El dominio establecido en la configuración del sitio formará automáticamente parte de los dominios permitidos.',
        ],
        'stylesheet' => [
            'custom-css' => 'Hoja de estilo personalizada',
        ],
        'theme' => [
            'background-color'        => 'Color de fondo',
            'background-fills'        => 'Relleno del fondo (componentes, incidentes, pie)',
            'banner-background-color' => 'Color de fondo del banner',
            'banner-padding'          => 'Padding del banner',
            'fullwidth-banner'        => '¿Habilitar banner de ancho completo?',
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
            'email'       => 'Email #:id',
        ],
    ],

    'general' => [
        'timezone' => 'Seleccionar la zona horaria',
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
