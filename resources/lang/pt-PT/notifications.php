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
                'subject'  => 'Estado do Componente Atualizado',
                'greeting' => 'O estado de um componente foi atualizado!',
                'content'  => ':name status changed from :old_status to :new_status.',
                'action'   => 'Ver',
            ],
            'slack' => [
                'title'   => 'Estado do Componente Atualizado',
                'content' => ':name status changed from :old_status to :new_status.',
            ],
            'sms' => [
                'content' => ':name status changed from :old_status to :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'Novo Incidente Reportado',
                'greeting' => 'A new incident was reported at :app_name.',
                'content'  => 'Incident :name was reported',
                'action'   => 'Ver',
            ],
            'slack' => [
                'title'   => 'Incidente: name Relatado',
                'content' => 'A new incident was reported at :app_name',
            ],
            'sms' => [
                'content' => 'A new incident was reported at :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Incidente Atualizado',
                'content' => ':name foi actualizado',
                'title'   => ': name foi atualizado para: new_status',
                'action'  => 'Ver',
            ],
            'slack' => [
                'title'   => ':name Atualizado',
                'content' => ': name foi atualizado para: new_status',
            ],
            'sms' => [
                'content' => 'Incidente: name foi atualizado',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Novo Horário Criado',
                'content' => ':name foi agendado para :date',
                'title'   => 'A new scheduled maintenance was created.',
                'action'  => 'Ver',
            ],
            'slack' => [
                'title'   => 'Novo Horário Criado!',
                'content' => ':name foi agendado para :date',
            ],
            'sms' => [
                'content' => ':name foi agendado para :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Verifique A Sua Subscricao',
                'content' => 'Click to verify your subscription to :app_name status page.',
                'title'   => 'Verify your subscription to :app_name status page.',
                'action'  => 'Verificar',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping do Cachet!',
                'content' => 'This is a test notification from Cachet!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'O seu convite está dentro...',
                'content' => 'Você foi convidado para se juntar :app_name pagina de status.',
                'title'   => 'You\'re invited to join :app_name status page.',
                'action'  => 'Aceitar',
            ],
        ],
    ],
];
