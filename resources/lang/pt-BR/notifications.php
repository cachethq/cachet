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
                'subject'  => 'Novo incidente reportado',
                'greeting' => 'Um novo incidente foi reportado em :app_name.',
                'content'  => 'O Incidente :name foi reportado',
                'action'   => 'Visualizar',
            ],
            'slack' => [
                'title'   => 'Incidente :name reportado',
                'content' => 'Um novo incidente foi relatado em :app_name',
            ],
            'sms' => [
                'content' => 'Um novo incidente foi reportado em :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Incidente Atualizado',
                'content' => ':name foi atualizado',
                'title'   => ':name was updated to :new_status',
                'action'  => 'Visualizar',
            ],
            'slack' => [
                'title'   => ':name Updated',
                'content' => ':name was updated to :new_status',
            ],
            'sms' => [
                'content' => 'Incident :name was updated',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'New Schedule Created',
                'content' => ':name was scheduled for :date',
                'title'   => 'A new scheduled maintenance was created.',
                'action'  => 'Visualizar',
            ],
            'slack' => [
                'title'   => 'Novo Agendamento Criado!',
                'content' => ':name was scheduled for :date',
            ],
            'sms' => [
                'content' => ':name was scheduled for :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Verifique a sua inscrição',
                'content' => 'Clique para verificar sua inscrição na página de status :app_name.',
                'title'   => 'Verifique sua inscrição na página de status de :app_name.',
                'action'  => 'Verifique',
            ],
        ],
        'manage' => [
            'mail' => [
                'subject' => 'Gerenciar inscrição',
                'content' => 'Clique para gerenciar sua inscrição na página de status de :app_name.',
                'title'   => 'Clique para gerenciar sua inscrição na página de status de :app_name.',
                'action'  => 'Gerenciar inscrição',
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
                'content' => 'Você foi convidado para fazer parte da página de status :app_name.',
                'title'   => 'Você foi convidado para fazer parte da página de status :app_name.',
                'action'  => 'Aceitar',
            ],
        ],
    ],
];
