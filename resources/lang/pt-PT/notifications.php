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
                'content'  => 'estado :name mudou de :old_status para :new_status.',
                'action'   => 'Ver',
            ],
            'slack' => [
                'title'   => 'Estado do Componente Atualizado',
                'content' => 'estado :name mudou de :old_status para :new_status.',
            ],
            'sms' => [
                'content' => 'estado :name mudou de :old_status para :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'Novo Incidente Reportado',
                'greeting' => 'Novo incidente reportado na :app_name.',
                'content'  => 'O incidente :name foi reportado',
                'action'   => 'Ver',
            ],
            'slack' => [
                'title'   => 'Incidente: name Relatado',
                'content' => 'Um novo incidente reportado na :app_name',
            ],
            'sms' => [
                'content' => 'Novo incidente reportado na :app_name.',
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
                'title'   => 'Foi criada uma nova manutenção programada.',
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
                'content' => 'Clique para verificar a sua subscrição para a página de status :app_name.',
                'title'   => 'Verifique a sua subscrição para a página de status :app_name.',
                'action'  => 'Verificar',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping do Cachet!',
                'content' => 'Isto é uma notificação de teste do Cachet!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'O seu convite está dentro...',
                'content' => 'Você foi convidado para se juntar :app_name pagina de status.',
                'title'   => 'Você foi convidado para a página de status da :app_name .',
                'action'  => 'Aceitar',
            ],
        ],
    ],
];
