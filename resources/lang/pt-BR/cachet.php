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
        'last_updated' => 'Última atualização :timestamp',
        'status'       => [
            1 => 'Operacional',
            2 => 'Problemas de performance',
            3 => 'Indisponibilidade parcial',
            4 => 'Indisponibilidade total',
        ],
        'group' => [
            'other' => 'Outros componentes',
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
        'manage'    => [
            'no_subscriptions' => 'Você está atualmente inscrito a todas as atualizações.',
            'my_subscriptions' => 'Você está atualmente inscrito para as seguintes atualizações.',
        ],
        'email' => [
            'subscribe'          => 'Inscreva-se para atualizações via e-mail.',
            'subscribed'         => 'Inscrição realizada com sucesso! Por favor verifique o e-mail que enviamos à você para confirmar sua inscrição.',
            'verified'           => 'Sua inscrição foi confirmada! Obrigado!',
            'manage'             => 'Gerencie sua assinatura',
            'unsubscribe'        => 'Não desejo mais receber notificações via e-mail.',
            'unsubscribed'       => 'Sua inscrição foi cancelada.',
            'failure'            => 'Ocorreu um problema na sua inscrição.',
            'already-subscribed' => 'Impossível inscrever :email pois já se encontra inscrito.',
            'verify'             => [
                'text'   => "Por favor, confirme sua assinatura de e-mail para receber atualizações de status de :app_name. \n:link",
                'html'   => '<p>Por favor, confirme sua assinatura de e-mail para receber atualizações de status de :app_name.</p>',
                'button' => 'Confirmar inscrição',
            ],
            'maintenance' => [
                'subject' => '[Manutenção Programada] :name',
            ],
            'incident' => [
                'subject' => '[Novo incidente] :status: :name',
            ],
            'component' => [
                'subject'       => 'Atualização do Estado do Componente',
                'text'          => 'O componente :component_name teve uma mudança de estado. O componente está agora em :component_human_status.\nObrigado, :app_name',
                'html'          => '<p>O componente :component_name teve uma mudança de estado. O componente está agora em :component_human_status.</p><p>Obrigado, :app_name</p>',
                'tooltip-title' => 'Inscrever-se as notificações de :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text' => "Você foi convidado para a página de status da equipe :app_name, para se inscrever siga o próximo link.\n:link\nObrigado,: app_name",
                'html' => '<p>Você foi convidado para a página de status da equipe :app_name, para se inscrever siga o seguinte link.</p> <p><a href=":link">:link</a></p> <p>Obrigado, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Cadastrar-se',
        'username' => 'Usuário',
        'email'    => 'Email',
        'password' => 'Senha',
        'success'  => 'A sua conta foi criada.',
        'failure'  => 'Algo deu errado com o seu cadastro.',
    ],

    'system' => [
        'update' => 'Existe uma versão mais recente do Cachet disponivel. Você pode saber mais sobre como atualizar <a href="https://docs.cachethq.io/docs/updating-cachet">aqui</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Fechar',
        'subscribe' => [
            'title'  => 'Assine as atualizações do componente',
            'body'   => 'Digite seu endereço de e-mail para se inscrever em atualizações para este componente. Se você já está inscrito, você já recebe e-mails para este componente.',
            'button' => 'Inscreva-se',
        ],
    ],

    // Other
    'home'            => 'Início',
    'description'     => 'Mantenha-se atualizado com as últimas atualizações de serviço de: app.',
    'powered_by'      => 'Desenvolvido por <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'Sobre este Site',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
