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
            0 => 'Unknown',
            1 => 'Operacional',
            2 => 'Problemas de performance',
            3 => 'Indisponibilidade parcial',
            4 => 'Indisponibilidade total',
        ],
        'group' => [
            'other' => 'Outros componentes',
        ],
        'select_all'   => 'Select All',
        'deselect_all' => 'Deselect All',
    ],

    // Incidents
    'incidents' => [
        'none'         => 'Nenhum incidente reportado',
        'past'         => 'Incidentes anteriores',
        'stickied'     => 'Stickied Incidents',
        'scheduled'    => 'Maintenance',
        'scheduled_at' => ', agendada :timestamp',
        'posted'       => 'Posted :timestamp',
        'posted_at'    => 'Posted at :timestamp',
        'status'       => [
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
        'good'  => '[0,1]System operational|[2,*]All systems are operational',
        'bad'   => '[0,1]The system is experiencing issues|[2,*]Some systems are experiencing issues',
        'major' => '[0,1]The system is experiencing major issues|[2,*]Some systems are experiencing major issues',
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
        'subscribe'           => 'Subscribe to status changes and incident updates',
        'unsubscribe'         => 'Unsubscribe',
        'button'              => 'Inscreva-se',
        'manage_subscription' => 'Manage subscription',
        'manage'              => [
            'notifications'       => 'Notificações',
            'notifications_for'   => 'Manage notifications for',
            'no_subscriptions'    => 'Você está atualmente inscrito a todas as atualizações.',
            'update_subscription' => 'Update Subscription',
            'my_subscriptions'    => 'Você está atualmente inscrito para as seguintes atualizações.',
            'manage_at_link'      => 'Manage your subscriptions at :link',
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

    // Meta descriptions
    'meta' => [
        'description' => [
            'incident'  => 'Details and updates about the :name incident that occurred on :date',
            'schedule'  => 'Details about the scheduled maintenance period :name starting :startDate',
            'subscribe' => 'Subscribe to :app in order to receive updates of incidents and scheduled maintenance periods',
            'overview'  => 'Mantenha-se atualizado com as últimas atualizações de serviço de: app.',
        ],
    ],

    // Other
    'home'            => 'Início',
    'powered_by'      => 'Desenvolvido por <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Times are shown in :timezone.',
    'about_this_site' => 'Sobre este Site',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
