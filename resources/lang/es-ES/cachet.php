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
            0 => 'Unknown',
            1 => 'Operacional',
            2 => 'Problemas de rendimiento',
            3 => 'Interrupción parcial',
            4 => 'Interrupción mayor',
        ],
        'group' => [
            'other' => 'Otros componentes',
        ],
        'select_all'   => 'Select All',
        'deselect_all' => 'Deselect All',
    ],

    // Incidents
    'incidents' => [
        'none'         => 'Ningún incidente reportado',
        'past'         => 'Incidencias anteriores',
        'stickied'     => 'Stickied Incidents',
        'scheduled'    => 'Maintenance',
        'scheduled_at' => ', programado para :timestamp',
        'posted'       => 'Posted :timestamp',
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
            0 => 'Upcoming',
            1 => 'In Progress',
            2 => 'Complete',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1]System operational|[2,*]All systems are operational',
        'bad'   => '[0,1] El sistema está actualmente experimentando problemas|[2,Inf] Algunos sistemas están experimentando problemas',
        'major' => '[0,1]The system is experiencing major issues|[2,*]Some systems are experiencing major issues',
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
        'subscribe'           => 'Subscribe to status changes and incident updates',
        'unsubscribe'         => 'Unsubscribe',
        'button'              => 'Suscríbete',
        'manage_subscription' => 'Manage subscription',
        'manage'              => [
            'notifications'       => 'Notificaciones',
            'notifications_for'   => 'Manage notifications for',
            'no_subscriptions'    => 'Actualmente estás suscrito a todas las actualizaciones.',
            'update_subscription' => 'Update Subscription',
            'my_subscriptions'    => 'Actualmente estás suscrito a las siguientes actualizaciones.',
            'manage_at_link'      => 'Manage your subscriptions at :link',
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

    // Meta descriptions
    'meta' => [
        'description' => [
            'incident'  => 'Details and updates about the :name incident that occurred on :date',
            'schedule'  => 'Details about the scheduled maintenance period :name starting :startDate',
            'subscribe' => 'Subscribe to :app in order to receive updates of incidents and scheduled maintenance periods',
            'overview'  => 'Mantente informado con las últimas actualizaciones de servicio de :app.',
        ],
    ],

    // Other
    'home'            => 'Inicio',
    'powered_by'      => 'La página de estado de :app está proporcionada por <a href="https://cachethq.io">Cachet</a>.',
    'timezone'        => 'Los horarios son mostrados en :timezone.',
    'about_this_site' => 'Acerca de este sitio',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Estado del Feed',

];
