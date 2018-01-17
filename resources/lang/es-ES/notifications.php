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
    'component' => [
        'status_update' => [
            'mail' => [
                'subject'  => 'Estado del componente actualizado',
                'greeting' => '¡El estado de un componente fue actualizado!',
                'content'  => 'El estado de :name cambió de :old_status a :new_status.',
                'action'   => 'Ver',
            ],
            'slack' => [
                'title'   => 'Estado del componente actualizado',
                'content' => 'El estado de :name cambió de :old_status a :new_status.',
            ],
            'sms' => [
                'content' => 'El estado de :name cambió de :old_status a :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'Nuevo incidente reportado',
                'greeting' => 'Nuevo incidente fue reportado en : app_name.',
                'content'  => 'Incidente :name fue reportado',
                'action'   => 'Ver',
            ],
            'slack' => [
                'title'   => 'Incidente :name Reportado',
                'content' => 'Nuevo incidente fue reportado en : app_name',
            ],
            'sms' => [
                'content' => 'Nuevo incidente fue reportado en : app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Incidente Actualizado',
                'content' => ':name fue actualizado',
                'title'   => ':name fue actualizado a :new_status',
                'action'  => 'Ver',
            ],
            'slack' => [
                'title'   => ':name Actualizado',
                'content' => ':name fue actualizado a :new_status',
            ],
            'sms' => [
                'content' => 'Incidente :name fue actualizado',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Nueva Programación Creada',
                'content' => ':name fue programada para :date',
                'title'   => 'Un nuevo mantenimiento programado fue creado.',
                'action'  => 'Ver',
            ],
            'slack' => [
                'title'   => '¡Nueva Programación Creada!',
                'content' => ':name fue programada para :date',
            ],
            'sms' => [
                'content' => ':name fue programada para :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Verifica Tu Suscripción',
                'content' => 'Has clic para verificar tu suscripción a la página de estado de :app_name.',
                'title'   => 'Verifica tu suscripción a la página de estado de :app_name.',
                'action'  => 'Verificar',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => '¡Ping desde Cachet!',
                'content' => '¡Esta es una notificación de prueba de Cachet!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'La invitación está dentro...',
                'content' => 'Has sido invitado a unirte a la página de estado de :app_name.',
                'title'   => 'Has sido invitado a unirte a la página de estado de :app_name.',
                'action'  => 'Aceptar',
            ],
        ],
    ],
];
