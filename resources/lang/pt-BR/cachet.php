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
        'none'          => 'Nenhum incidente reportado',
        'past'          => 'Incidentes anteriores',
        'previous_week' => 'Semana anterior',
        'next_week'     => 'Próxima semana',
        'scheduled'     => 'Manutenção Agendada',
        'scheduled_at'  => ', agendada :timestamp',
        'status'        => [
            0 => 'Agendado', // TODO: Hopefully remove this.
            1 => 'Investigando',
            2 => 'Identificado',
            3 => 'Observando',
            4 => 'Resolvido',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Sistema operacional|[2,Inf] Todos os sistemas estão operacionais',
        'bad'   => '[0,1] The system is currently experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The service experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
    ],

    'api' => [
        'regenerate' => 'Gerar nova chave de API',
        'revoke'     => 'Revogar a chave de API',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Última Hora',
            'hourly'    => 'Últimas 12 horas',
            'weekly'    => 'Semana',
            'monthly'   => 'Mês',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Inscreva-se para obter as atualizações mais recentes',
        'button'    => 'Inscreva-se',
        'email'     => [
            'subscribe'          => 'Inscreva-se para atualizações via e-mail.',
            'subscribed'         => 'Inscrição realizada com sucesso! Por favor verifique o e-mail que enviamos à você para confirmar sua inscrição.',
            'verified'           => 'Sua inscrição foi confirmada! Obrigado!',
            'unsubscribe'        => 'Não desejo mais receber notificações via e-mail.',
            'unsubscribed'       => 'Sua inscrição foi cancelada.',
            'failure'            => 'Ocorreu um problema na sua inscrição.',
            'already-subscribed' => 'Cannot subscribe :email because they\'re already subscribed.',
            'verify'             => [
                'text'           => "Por favor confirme seu e-mail para receber as atualizações do :app_name .\n:link\nAtenciosamente, :app_name",
                'html-preheader' => 'Por favor confirme seu e-mail para receber as atualizações do :app_name.',
                'html'           => '<p>Por favor confirme seu cadastro para receber atualizações do :app_name.</p><p><a href=":link">:link</a></p><p>Atenciosamente, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "Uma manutenção do aplicativo :app_name foi agendada. \n Atenciosamente, :app_name",
                'html-preheader' => 'Uma manutenção do aplicativo :app_name foi agendada.',
                'html'           => '<p>Uma nova manutenção para o aplicativo :app_name foi agendada.</p>',
            ],
            'incident' => [
                'text'           => "Um novo incidente foi reportado no aplicativo :app_name.\n Atenciosamente, :app_name",
                'html-preheader' => 'Um novo incidente foi reportado no aplicativo :app_name.',
                'html'           => '<p>Um novo incidente foi reportado no aplicativo :app_name. </p><p> Obrigado, :app_name</p>',
            ],
            'component' => [
                'subject'        => 'Component Status Update',
                'text'           => 'The component :component_name has seen a status change. The component is now at :component_human_status.\nThank you, :app_name',
                'html-preheader' => 'Component Update from :app_name',
                'html'           => '<p>The component :component_name has seen a status change. The component is now at :component_human_status.</p><p>Thank you, :app_name</p>',
                'tooltip-title'  => 'Subscribe to notifications for :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text'           => "You have been invited to the team :app_name status page, to sign up follow the next link.\n:link\nThank you, :app_name",
                'html-preheader' => 'You have been invited to the team :app_name.',
                'html'           => '<p>You have been invited to the team :app_name status page, to sign up follow the next link.</p><p><a href=":link">:link</a></p><p>Thank you, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Sign Up',
        'username' => 'Usuário',
        'email'    => 'Email',
        'password' => 'Senha',
        'success'  => 'A sua conta foi criada.',
        'failure'  => 'Something went wrong with the signup.',
    ],

    'system' => [
        'update' => 'There is a newer version of Cachet available. You can learn how to update <a href="https://docs.cachethq.io/docs/updating-cachet">here</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Fechar',
        'subscribe' => [
            'title'  => 'Subscribe to component updates',
            'body'   => 'Enter your email address to subscribe to updates for this component. If you\'re already subscribed, you\'ll already receive emails for this component.',
            'button' => 'Inscreva-se',
        ],
    ],

    // Other
    'powered_by'      => ':app Status Page is powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'Sobre este Site',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
