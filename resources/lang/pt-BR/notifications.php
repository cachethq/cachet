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
                'subject'  => 'Status do Componente Atualizado',
                'greeting' => 'O status de um componente foi atualizado!',
                'content'  => 'O status de :name mudou de :old_status para :new_status.',
                'action'   => 'Visualizar',
            ],
            'slack' => [
                'title'   => 'Status do Componente Atualizado',
                'content' => 'O status de :name mudou de :old_status para :new_status.',
            ],
            'sms' => [
                'content' => 'O status de :name mudou de :old_status para :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'Novo incidente Reportado',
                'greeting' => 'Um novo incidente foi reportado em :app_name.',
                'content'  => 'O Incidente :name foi reportado',
                'action'   => 'Visualizar',
            ],
            'slack' => [
                'title'   => 'Incidente :name Reportado',
                'content' => 'Um novo incidente foi reportado em :app_name',
            ],
            'sms' => [
                'content' => 'Um novo incidente foi reportado em :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Incidente Atualizado',
                'content' => ':name foi atualizado',
                'title'   => ':name foi atualizado para :new_status',
                'action'  => 'Visualizar',
            ],
            'slack' => [
                'title'   => ':name atualizado',
                'content' => ':name foi atualizado para :new_status',
            ],
            'sms' => [
                'content' => 'Incidente :nome foi atualizado',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Novo Agendamento Criado',
                'content' => ':name foi agendado para :date',
                'title'   => 'Uma nova manutenção agendada foi criada.',
                'action'  => 'Visualizar',
            ],
            'slack' => [
                'title'   => 'Novo Agendamento Criado!',
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
                'subject' => 'Verificar a sua inscrição',
                'content' => 'Clique para verificar sua inscrição na página de status de :app_name.',
                'title'   => 'Verificar sua inscrição na página de status de :app_name.',
                'action'  => 'Verificar',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping do Cachet!',
                'content' => 'Esta é uma notificação de teste do Cachet!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Seu convite está aqui dentro...',
                'content' => 'Você foi convidado a juntar-se a página de status de :app_name.',
                'title'   => 'Você está convidado a juntar-se a página de status de :app_name.',
                'action'  => 'Aceitar',
            ],
        ],
    ],
];
