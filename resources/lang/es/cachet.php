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
        'status' => [
            1 => 'Operacional',
            2 => 'Problemas de rendimiento',
            3 => 'Interrupción parcial',
            4 => 'Interrupción mayor',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'No hay ningún incidente reportado.',
        'past'          => 'Incidentes anteriores',
        'previous_week' => 'Semana anterior',
        'next_week'     => 'Siguiente semana',
        'none'          => 'No hay ningún incidente reportado.',
        'status'        => [
            0 => '',
            1 => 'Investigando',
            2 => 'Identificado',
            3 => 'Observando',
            4 => 'Corregido',
        ],
    ],

    // Service Status
    'service' => [
        'good' => 'Todos los sistemas funcionando.',
        'bad'  => 'Algunos sistemas están experimentando problemas.',
    ],

    'api' => [
        'regenerate' => 'Regenerar API Key',
        'revoke'     => 'Revocar API Key',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'hourly'  => 'Últimas 12 horas',
            'weekly'  => 'Semana',
            'monthly' => 'Mes',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Suscríbete para recibir las actualizaciones más recientes.',
        'button'    => 'Suscribirse',
        'email'     => [
            'subscribe'    => 'Suscríbete a las actualizaciones por correo electrónico.',
            'subscribed'   => 'Se te ha suscrito a la la lista de notificaciones por correo electónico, por favor comprueba tu email para confirmar la suscripción.',
            'verified'     => 'Tu suscripción a la lista de notificaciones por correo electrónico ha sido confirmada. ¡Gracias!',
            'unsubscribe'  => 'Desuscribirse de la lista de notificaciones por correo electrónico.',
            'unsubscribed' => 'Tu suscripción a la lista de notificaciones por correo electrónico has sido cancelada.',
            'failure'      => 'Algo salió mal con la suscripción.',
            'verify'       => [
                'text'           => "Por favor confirma tu suscripción por correo electrónico a las actualizaciones de estado de :app_name.\n:link\nGracias, :app_name",
                'html-preheader' => 'Por favor confirma tu suscripción por correo electrónico a las actualizaciones de estado de :app_name.',
                'html'           => '<p>Por favor confirma tu suscripción por correo electrónico a las actualizaciones de estado de :app_name.</p><p><a href=":link">:link</a></p><p>Gracias, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "Se ha programado una tarea de mantenimiento en :app_name.\nGracias, :app_name",
                'html-preheader' => 'Se ha programado una tarea de mantenimiento en :app_name.',
                'html'           => '<p>Se ha programado una tarea de mantenimiento en :app_name.</p><p>Gracias, :app_name</p>',
            ],
            'incident' => [
                'text'           => "Se ha informado de un nuevo incidente en :app_name.\nGracias, :app_name",
                'html-preheader' => 'Se ha informado de un nuevo incidente en :app_name.',
                'html'           => '<p>Se ha informado de un nuevo incidente en :app_name.</p><p>Gracias, :app_name</p>',
            ],
        ],
    ],

    // Other
    'powered_by'      => ':app La página de estado es alimentada por <a href="https://cachethq.github.io">Cachet</a>.',
    'about_this_site' => 'Acerca de este sitio',
    'rss-feed'        => 'Feed RSS',
    'atom-feed'       => 'Atom Feed',
    'feed'            => 'Estado del Feed',

];
