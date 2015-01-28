<?php

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
    ],

    // Login form fields
    'login' => [
        'email'         => 'Correo electrónico',
        'password'      => 'Contraseña',
        '2fauth'        => 'Código de Autenticación',
        'invalid'       => 'Dirección de correo o contraseña incorrectos',
        'invalid-token' => 'Token inválido',
    ],

    // Incidents form fields
    'incidents' => [
        'name'         => 'Nombre',
        'status'       => 'Estado',
        'component'    => 'Componente',
        'message'      => 'Mensaje',
        'message-help' => 'También puedes usar Markdown.',

        'templates' => [
            'name'     => 'Nombre',
            'template' => 'Plantilla',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Nombre',
        'status'      => 'Estatus',
        'group'       => 'Grupo',
        'description' => 'Descripción',
        'link'        => 'Enlace',
        'tags'        => 'Etiquetas',
        'tags-help'   => 'Separado por comas.',

        'groups' => [
            'name' => 'Nombre',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'         => 'Nombre del sitio',
            'site-url'          => 'URL del sitio',
            'site-timezone'     => 'Zona horaria del sitio',
            'site-locale'       => 'Idioma del sitio',
            'date-format'       => 'Formato de la fecha',
            'about-this-page'   => 'Sobre esta página',
            'days-of-incidents' => '¿Cuántos días de incidentes mostrar?',
            'banner'            => 'Imagen de inicio',
            'banner-help'       => "Se recomienda subir una imagen no más grande de 930px de ancho .",
            'google-analytics'  => "Código de Google Analytics",
        ],
        'security' => [
            'allowed-domains'      => 'Dominios permitidos',
            'allowed-domains-help' => 'Separados por coma. El dominio establecido en la configuración del sitio formará automáticamente parte de los dominios permitidos.',
        ],
        'stylesheet' => [
            'custom-css' => 'Hoja de estilo personalizada',
        ],
        'theme' => [
            'background-color' => 'Color de fondo',
            'text-color'       => 'Color de Texto',
        ],
    ],

    'user' => [
        'username'       => 'Nombre de usario',
        'email'          => 'Correo electrónico',
        'password'       => 'Contraseña',
        'api-token'      => 'API Token',
        'api-token-help' => 'Al regenerar su API key revocara todas las aplicaciones existentes.',
        '2fa'            => [
            'help' => 'Habilitar autenticación de dos pasos aumenta la seguridad de tu cuenta. Necesitarás descargar <a href="https://support.google.com/accounts/answer/1066447?hl=en"> Google Authenticator</a> o una aplicación similar a su dispositivo móvil. Al iniciar sesión, te pedirá proporcionar un token generado por la aplicación.',
        ],
    ],

    // Buttons
    'add'    => 'Agregar',
    'save'   => 'Guardar',
    'update' => 'Actualizar',
    'create' => 'Crear',
    'edit'   => 'Editar',
    'delete' => 'Eliminar',
    'submit' => 'Enviar',
    'cancel' => 'Cancelar',
    'remove' => 'Remover',

    // Other
    'optional' => '* Opcional',
];
