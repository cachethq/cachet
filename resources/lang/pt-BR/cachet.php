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
            0 => 'Desconhecido',
            1 => 'Operacional',
            2 => 'Problemas de performance',
            3 => 'Indisponibilidade parcial',
            4 => 'Indisponibilidade total',
        ],
        'group' => [
            'other' => 'Outros componentes',
        ],
        'select_all'   => 'Marcar todos',
        'deselect_all' => 'Desmarcar todos',
    ],

    // Incidents
    'incidents' => [
        'none'         => 'Nenhum incidente reportado',
        'past'         => 'Incidentes anteriores',
        'stickied'     => 'Incidentes Fixados',
        'scheduled'    => 'Manutenção',
        'scheduled_at' => ', agendada :timestamp',
        'posted'       => 'Posted :timestamp by :username',
        'posted_at'    => 'Postado em :timestamp',
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
            0 => 'Em breve',
            1 => 'Em Progresso',
            2 => 'Concluído',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Sistema operacional | [2, *] Todos os sistemas estão operacionais',
        'bad'   => '[0,1] O sistema apresenta falhas|[2,*] Alguns sistemas apresentam falhas',
        'major' => '[0,1] O sistema apresenta falhas críticas|[2,Inf] Alguns sistemas apresentam falhas críticas',
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
        'subscribe'           => 'Inscreva-se para mudanças de status e atualizações de incidentes',
        'unsubscribe'         => 'Cancelar inscrição',
        'button'              => 'Inscreva-se',
        'manage_subscription' => 'Gerenciar inscrição',
        'manage'              => [
            'notifications'       => 'Notificações',
            'notifications_for'   => 'Gerenciar notificações',
            'no_subscriptions'    => 'Você está atualmente inscrito a todas as atualizações.',
            'update_subscription' => 'Atualizar inscrição',
            'my_subscriptions'    => 'Você está atualmente inscrito para as seguintes atualizações.',
            'manage_at_link'      => 'Gerencie suas inscrições aqui :link',
        ],
        'email' => [
            'manage_subscription' => 'Enviamos um e-mail para você, por favor clique no link para gerenciar sua assinatura',
            'subscribe'           => 'Inscreva-se para atualizações via e-mail.',
            'subscribed'          => 'Inscrição realizada com sucesso! Por favor verifique o e-mail que enviamos à você para confirmar sua inscrição.',
            'updated-subscribe'   => 'Suas assinaturas foram atualizadas com sucesso.',
            'verified'            => 'Sua inscrição foi confirmada! Obrigado!',
            'manage'              => 'Gerencie sua assinatura',
            'unsubscribe'         => 'Não desejo mais receber notificações via e-mail.',
            'unsubscribed'        => 'Sua inscrição foi cancelada.',
            'failure'             => 'Ocorreu um problema na sua inscrição.',
            'already-subscribed'  => 'Impossível inscrever :email pois já se encontra inscrito.',
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
            'incident'  => 'Detalhes e atualizações sobre o ​​incidente :name ocorrido em :date',
            'schedule'  => 'Detalhes sobre o período de manutenção agendada :name que começa em :startDate',
            'subscribe' => 'Inscreva-se para o :app e receba atualizações de incidentes e períodos de manutenção agendada',
            'overview'  => 'Mantenha-se atualizado com as últimas atualizações de serviço de: app.',
        ],
    ],

    // Other
    'home'            => 'Início',
    'powered_by'      => 'Desenvolvido por <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Horários são exibidos em :timezone.',
    'about_this_site' => 'Sobre este Site',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
