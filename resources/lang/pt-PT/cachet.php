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
        'last_updated' => 'Last updated :timestamp',
        'status'       => [
            1 => 'Operacional',
            2 => 'Problemas de performance',
            3 => 'Indisponibilidade parcial',
            4 => 'Indisponibilidade total',
        ],
        'group' => [
            'other' => 'Other Components',
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
            0 => 'Agendada', // TODO: Hopefully remove this.
            1 => 'Investigando',
            2 => 'Identificado',
            3 => 'Observando',
            4 => 'Resolvido',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Sistema operacional|[2,Inf] Todos os sistemas estão operacionais',
        'bad'   => '[0,1] O sistema encontra-se com alguns problemas|[2,Inf] Alguns sistemas estão com problemas',
        'major' => '[0,1] O serviço encontra-se com uma falha geral.|[2,Inf] Alguns sistemas encontram-se com falhas gerais',
    ],

    'api' => [
        'regenerate' => 'Gerar nova chave de API',
        'revoke'     => 'Revogar a chave de API',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Ultima Hora',
            'hourly'    => 'Últimas 12 horas',
            'weekly'    => 'Semana',
            'monthly'   => 'Mês',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Inscreva-se para obter as atualizações mais recentes',
        'button'    => 'Subscrever',
        'manage'    => [
            'no_subscriptions' => 'You\'re currently subscribed to all updates.',
            'my_subscriptions' => 'You\'re currently subscribed to the following updates.',
        ],
        'email' => [
            'subscribe'          => 'Subscrever actualizações via email.',
            'subscribed'         => 'Subscreveu as notificações por e-mail, por favor verifique o seu e-mail para confirmar a subscrição.',
            'verified'           => 'A sua subscrição por e-mail foi confirmada. Obrigado!',
            'manage'             => 'Manage your subscription.',
            'unsubscribe'        => 'Remover subscrição de e-mail.',
            'unsubscribed'       => 'A sua subscrição de e-mail foi cancelada.',
            'failure'            => 'Algo correu mal com a sua subscrição.',
            'already-subscribed' => 'Não posso subscrever :email pois já se encontra subscrito.',
            'verify'             => [
                'text'           => "Por favor confirme a sua subscrição de e-mail para as actualizações :app_name .\n:link\nObrigado, :app_name",
                'html-preheader' => 'Por favor confirme a sua subscrição de e-mail para as notificações de actualização de estado  :app_name.',
                'html'           => '<p>Por favor, confirme sua assinatura de e-mail para atualizações de status para :app_name.</p> <p><a href=":link">: link</a></p> <p>Obrigado, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "Uma nova manutenção foi agendada - :app_name.\nObrigado, :app_name",
                'html-preheader' => 'Uma nova manutenção foi agendada em :app_name.',
                'html'           => '<p>Nova manutenção foi agendada na :app_name.</p>',
            ],
            'incident' => [
                'text'           => "Foi reportado um novo incidente - :app_name.\nObrigado, :app_name",
                'html-preheader' => 'Novo incidente reportado - :app_name.',
                'html'           => '<p>Novo incidente reportado - :app_name.</p><p>Obrigado, :app_name</p>',
            ],
            'component' => [
                'subject'        => 'Atualização do Estado do Componente',
                'text'           => 'O componente :component_name teve uma mudança de estado. O componente está agora em :component_human_status.\nObrigado, :app_name',
                'html-preheader' => 'Atualização de Componente de :app_name',
                'html'           => '<p>O componente :component_name teve uma mudança de estado. O componente está agora em :component_human_status.</p><p>Obrigado, :app_name</p>',
                'tooltip-title'  => 'Subscrever a notificações de :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text'           => "Você foi convidado para a equipa :app_name página de status, para se inscrever siga o próximo link.\n:link\nObrigado, :app_name",
                'html-preheader' => 'Você foi convidado para a equipa :app_name.',
                'html'           => '<p>Foi convidado para a equipa :app_name página de status, para se inscrever siga o seguinte link.</p> <p><a href=":link">:link</a></p> <p>Obrigado, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Registrar',
        'username' => 'Usuário',
        'email'    => 'E-mail',
        'password' => 'Senha',
        'success'  => 'A sua conta foi criada.',
        'failure'  => 'Aconteceu algo de errado com a inscrição.',
    ],

    'system' => [
        'update' => 'Existe uma versão mais recente do Cachet disponivel. Pode saber mais como actualizar <a href="https://docs.cachethq.io/docs/updating-cachet">aqui</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Fechar',
        'subscribe' => [
            'title'  => 'Subscrever a atualizações de componente',
            'body'   => 'Introduza o seu endereço de email para subscrever a atualizações deste componente. Se já estiver subscrito então já recebe emails para este componente.',
            'button' => 'Subscrever',
        ],
    ],

    // Other
    'home'            => 'Home',
    'description'     => 'Stay up to date with the latest service updates from :app.',
    'powered_by'      => ':app Página Status é promovida por <a href="https://cachethq.io" class="links"> Cachet</a>.',
    'about_this_site' => 'Sobre este Site',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Feed de Estado',

];
