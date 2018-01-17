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
    // Components
    'components' => [
        'last_updated' => 'Última actualización :timestamp',
        'status'       => [
            0 => 'Desconocido',
            1 => 'Operacional',
            2 => 'Problemas de rendimiento',
            3 => 'Interrupción parcial',
            4 => 'Interrupción mayor',
        ],
        'group' => [
            'other' => 'Otros componentes',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'         => 'Ningún incidente reportado',
        'past'         => 'Incidencias anteriores',
        'stickied'     => 'Incidentes anclados',
        'scheduled'    => 'Mantenimiento programado',
        'scheduled_at' => ', programado para :timestamp',
        'posted'       => 'Publicado :timestamp',
        'posted_at'    => 'Posted at :timestamp',
        'status'       => [
            1 => 'Investigando',
            2 => 'Identificado',
            3 => 'Observando',
            4 => 'Corregido',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => 'Próximamente',
            1 => 'En progreso',
            2 => 'Completo',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Sistema operativo | [2,Inf] Todos los sistemas están operativos',
        'bad'   => '[0,1] El sistema está actualmente experimentando problemas | [2,Inf] Algunos sistemas están experimentando problemas',
        'major' => '[0,1] El servicio está experimentando una interrupción mayor | [2, Inf] Algunos sistemas están experimentando una interrupción mayor',
    ],

    'api' => [
        'regenerate' => 'Regenerar API Key',
        'revoke'     => 'Revocar API Key',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Última hora',
            'hourly'    => 'Últimas 12 horas',
            'weekly'    => 'Semana',
            'monthly'   => 'Mes',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe'   => 'Suscríbete para obtener las actualizaciones más recientes',
        'unsubscribe' => 'Darse de baja en :link',
        'button'      => 'Suscríbete',
        'manage'      => [
            'no_subscriptions' => 'Actualmente estás suscrito a todas las actualizaciones.',
            'my_subscriptions' => 'Actualmente estás suscrito a las siguientes actualizaciones.',
        ],
        'email' => [
            'subscribe'          => 'Suscríbete para recibir actualizaciones por correo electrónico.',
            'subscribed'         => 'Te has subscrito a las notificaciones por correo electrónico, por favor verifica tu correo electrónico para confirmar tu subscripción.',
            'verified'           => 'Tu subscripción por correo electrónico ha sido confirmada. Gracias!',
            'manage'             => 'Administre su suscripción',
            'unsubscribe'        => 'Darse de baja de alertas.',
            'unsubscribed'       => 'Tu subscripción de correo electrónico ha sido cancelada.',
            'failure'            => 'Algo salió mal con la subscripción.',
            'already-subscribed' => 'No se puede suscribir :email porque ya esta suscrito.',
        ],
    ],

    'signup' => [
        'title'    => 'Registrarse',
        'username' => 'Nombre de usario',
        'email'    => 'Correo electrónico',
        'password' => 'Contraseña',
        'success'  => 'Tu cuenta ha sido creada.',
        'failure'  => 'Hubo algún error al registrarse.',
    ],

    'system' => [
        'update' => 'Hay disponible una versión de Cachet más nueva. Puedes aprender sobre cómo actualizarla <a href="https://docs.cachethq.io/docs/updating-cachet">aquí</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Cerrar',
        'subscribe' => [
            'title'  => 'Subscribirse a actualizaciones de componentes',
            'body'   => 'Introduce tu dirección de correo electrónico para subscribirte a las actualizaciones de este componente. Si ya estás subscrito, ya recibirás los correos electrónicos para este componente.',
            'button' => 'Suscríbete',
        ],
    ],

    // Other
    'home'            => 'Inicio',
    'description'     => 'Mantente informado con las últimas actualizaciones de servicio de :app.',
    'powered_by'      => 'La página de estado de :app está proporcionada por <a href="https://cachethq.io">Cachet</a>.',
    'timezone'        => 'Los horarios son mostrados en :timezone.',
    'about_this_site' => 'Acerca de este sitio',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Estado del Feed',

];
