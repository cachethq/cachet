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
        'last_updated' => 'Ultima actualização :timestamp',
        'status'       => [
            0 => 'Unknown',
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
        'next_week'     => 'Próxima Semana',
        'stickied'      => 'Stickied Incidents',
        'scheduled'     => 'Manutenção Agendada',
        'scheduled_at'  => ', agendada :timestamp',
        'posted'        => 'Posted :timestamp',
        'status'        => [
            1 => 'Investigando',
            2 => 'Identificado',
            3 => 'Observando',
            4 => 'Resolvido',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => 'Upcoming',
            1 => 'In Progress',
            2 => 'Complete',
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
        'subscribe'   => 'Inscreva-se para obter as atualizações mais recentes',
        'unsubscribe' => 'Unsubscribe at :link',
        'button'      => 'Subscrever',
        'manage'      => [
            'no_subscriptions' => 'Actualmente está subscrito para todas as actualizações.',
            'my_subscriptions' => 'Actualmente está subscrito para as seguintes actualizações.',
        ],
        'email' => [
            'subscribe'          => 'Subscrever actualizações via email.',
            'subscribed'         => 'Subscreveu as notificações por e-mail, por favor verifique o seu e-mail para confirmar a subscrição.',
            'verified'           => 'A sua subscrição por e-mail foi confirmada. Obrigado!',
            'manage'             => 'Gerir as suas subscrições',
            'unsubscribe'        => 'Remover subscrição de e-mail.',
            'unsubscribed'       => 'A sua subscrição de e-mail foi cancelada.',
            'failure'            => 'Algo correu mal com a sua subscrição.',
            'already-subscribed' => 'Não posso subscrever :email pois já se encontra subscrito.',
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
    'home'            => 'Início',
    'description'     => 'Mantenha-se actualizado relativamente às alterações de serviço do :app.',
    'powered_by'      => 'Suportado por <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Times are shown in :timezone.',
    'about_this_site' => 'Sobre este Site',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Feed de Estado',

];
