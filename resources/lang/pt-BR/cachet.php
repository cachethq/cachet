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
            2 => 'Problemas de performance',
            3 => 'Indisponibilidade parcial',
            4 => 'Indisponibilidade total',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Nenhum incidente reportado.',
        'past'          => 'Incidentes anteriores',
        'previous_week' => 'Semana anterior',
        'next_week'     => 'Próxima semana',
        'none'          => 'Nenhum incidente reportado.',
        'scheduled'     => 'Manutenção agendada',
        'scheduled_at'  => 'Manutenção agendada em :timestamp',
        'status'        => [
            0 => 'Agendada', // TODO: Hopefully remove this.
            1 => 'Investigando',
            2 => 'Identificado',
            3 => 'Observando',
            4 => 'Resolvido',
        ],
    ],

    // Service Status
    'service' => [
        'good' => 'Todos os serviços estão operando normalmente.',
        'bad'  => 'Alguns serviços estão passando por problemas.',
    ],

    'api' => [
        'regenerate' => 'Gerar nova chave de API',
        'revoke'     => 'Revogar a chave de API',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Last Hour',
            'hourly'    => 'Últimas 12 horas',
            'weekly'    => 'Semana',
            'monthly'   => 'Mês',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Inscreva-se para receber as atualizações mais recentes',
        'button'    => 'Inscrever',
        'email'     => [
            'subscribe'    => 'Inscreva-se para receber emails com atualizações.',
            'subscribed'   => 'Você se inscreveu e receberá as notificações por email, verifique sua caixa de entrada para confirmar a inscrição.',
            'verified'     => 'Sua inscrição foi confirmada. Obrigado!',
            'unsubscribe'  => 'Cancelar a inscrição',
            'unsubscribed' => 'Sua inscrição foi cancelada.',
            'failure'      => 'Algo deu errado com sua inscrição',
            'verify'       => [
                'text'           => "Por favor, confirme a inscrição para :app_name .\n:link\nObrigado, :app_name",
                'html-preheader' => 'Por favor, confirme a inscrição para :app_name.',
                'html'           => '<p>Por favor, confirme a inscrição para :app_name.</p><p><a href=":link">:link</a></p><p>Obrigado, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "Nova manutenção agendada para :app_name.\nObrigado, :app_name",
                'html-preheader' => 'Nova manutenção agendada para :app_name.',
                'html'           => '<p>Nova manutenção agendada para :app_name.</p><p>Obrigado, :app_name</p>',
            ],
            'incident' => [
                'text'           => "Novo incidente relatado em :app_name.\nObrigado, :app_name",
                'html-preheader' => 'Novo incidente relatado em :app_name.',
                'html'           => '<p>Novo incidente relatado em :app_name.</p><p>Obrigado, :app_name</p>',
            ],
        ],
    ],

    // Other
    'powered_by'      => ':app Esta Status Page é fornecida por <a href="https://cachethq.github.io">Cachet</a>.',
    'about_this_site' => 'Sobre este site',
    'rss-feed'        => 'RSS Feed',
    'atom-feed'       => 'Atom Feed',
    'feed'            => 'Status Feed',

];
