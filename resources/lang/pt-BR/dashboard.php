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

    'dashboard' => 'Dashboard',

    // Incidents
    'incidents' => [
        'title'                    => 'Incidentes &amp; Agenda',
        'incidents'                => 'Incidentes',
        'logged'                   => '{0} Não existem incidentes, bom trabalho.|Você registrou um incidente.|Você reportou <strong>:count</strong> incidentes.',
        'incident-create-template' => 'Criar template',
        'incident-templates'       => 'Template de incidentes',
        'add'                      => [
            'title'   => 'Relatar um incidente',
            'success' => 'Incidente adicionado.',
            'failure' => 'Houve um erro ao adicionar o incidente, por favor tente novamente.',
        ],
        'edit' => [
            'title'   => 'Editar um incidente',
            'success' => 'Incidente atualizado.',
            'failure' => 'Houve um erro na edição do incidente, por favor tente novamente.',
        ],
        'delete' => [
            'success' => 'O incidente foi excluído e não aparecerá na sua página de status.',
            'failure' => 'O incidente não pode ser excluído, por favor tente novamente.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Template de incidentes',
            'add'   => [
                'title'   => 'Criar um modelo de incidente',
                'message' => 'Você deve adicionar um modelo de incidente.',
                'success' => 'Seu novo modelo de incidente foi criado.',
                'failure' => 'Algo deu errado com o modelo de incidente.',
            ],
            'edit' => [
                'title'   => 'Editar modelo',
                'success' => 'O modelo de incidente foi atualizado.',
                'failure' => 'Algo deu errado ao atualizar o modelo de incidente',
            ],
            'delete' => [
                'success' => 'O modelo de incidente foi excluído.',
                'failure' => 'O modelo de incidente não pode ser excluído, por favor tente novamente.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Manutenção Agendada',
        'logged'       => '{0} Não existem agendamentos, bom trabalho.|Você introduziu um agendamento.|Você reportou <strong>:count</strong> agendamentos.',
        'scheduled_at' => 'Agendada em :timestamp',
        'add'          => [
            'title'   => 'Adicionar manutenção programada',
            'success' => 'Programação adicionada.',
            'failure' => 'Ocorreu um problema ao adicionar a programação, por favor tente novamente.',
        ],
        'edit' => [
            'title'   => 'Edite a manutenção agendada',
            'success' => 'A programação foi atualizada!',
            'failure' => 'Ocorreu um problema ao editar a programação, por favor tente novamente.',
        ],
        'delete' => [
            'success' => 'A manutenção programada foi excluída e não aparecerá na sua página de status.',
            'failure' => 'A manutenção programada não pode ser excluída, por favor tente novamente.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Componentes',
        'component_statuses' => 'Status do componente',
        'listed_group'       => 'Agrupados sob :name',
        'add'                => [
            'title'   => 'Adicionar componente',
            'message' => 'Você deve adicionar um componente.',
            'success' => 'Componente criado.',
            'failure' => 'Algo deu errado com o componente, por favor tente novamente.',
        ],
        'edit' => [
            'title'   => 'Editar um componente',
            'success' => 'Componente atualizado.',
            'failure' => 'Algo deu errado com o componente, por favor tente novamente.',
        ],
        'delete' => [
            'success' => 'O componente foi excluído!',
            'failure' => 'O componente não pode ser excluído. Por favor tente de novo.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Grupo de componente|Grupos de componente',
            'no_components' => 'Você deve adicionar um componente à um grupo.',
            'add'           => [
                'title'   => 'Adicionar um grupo de componentes',
                'success' => 'Grupo de componentes adicionado.',
                'failure' => 'Algo deu errado com o grupo de componentes, por favor tente novamente.',
            ],
            'edit' => [
                'title'   => 'Editar um grupo de componentes',
                'success' => 'Grupo de componentes atualizado.',
                'failure' => 'Algo deu errado com o grupo de componentes, por favor tente novamente.',
            ],
            'delete' => [
                'success' => 'O grupo de componentes foi excluído!',
                'failure' => 'O grupo de componentes não pode ser excluído, por favor tente novamente.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metricas',
        'add'     => [
            'title'   => 'Criar uma métrica',
            'message' => 'Você deveria adicionar uma métrica.',
            'success' => 'Métrica criada.',
            'failure' => 'Algo deu errado com a métrica, por favor tente novamente.',
        ],
        'edit' => [
            'title'   => 'Editar uma métrica',
            'success' => 'Métrica atualizada.',
            'failure' => 'Algo deu errado com a métrica, por favor tente novamente.',
        ],
        'delete' => [
            'success' => 'A métrica foi excluída e não será mais exibida na sua página de status.',
            'failure' => 'A métrica não pode ser excluída, por favor tente novamente.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'      => 'Inscritos',
        'description'      => 'Subscribers will receive email updates when incidents are created or components are updated.',
        'verified'         => 'Verificado',
        'not_verified'     => 'Não verificado',
        'subscriber'       => ':email, subscribed :date',
        'no_subscriptions' => 'Subscribed to all updates',
        'add'              => [
            'title'   => 'Add a new subscriber',
            'success' => 'Inscrito adicionado.',
            'failure' => 'Something went wrong adding the subscriber, please try again.',
            'help'    => 'Enter each subscriber on a new line.',
        ],
        'edit' => [
            'title'   => 'Update subscriber',
            'success' => 'Inscrito atualizado.',
            'failure' => 'Something went wrong editing the subscriber, please try again.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Equipe',
        'member'      => 'Membro',
        'profile'     => 'Perfil	',
        'description' => 'Membros da equipe serão capazes de adicionar, modificar &amp; editar componentes e incidentes.',
        'add'         => [
            'title'   => 'Add a new team member',
            'success' => 'Team member added.',
            'failure' => 'The team member could not be added, please try again.',
        ],
        'edit' => [
            'title'   => 'Update profile',
            'success' => 'Profile updated.',
            'failure' => 'Something went wrong updating the profile, please try again.',
        ],
        'delete' => [
            'success' => 'Team member has been deleted and will no longer have access to the dashboard!',
            'failure' => 'The team member could not be added, please try again.',
        ],
        'invite' => [
            'title'   => 'Invite a new team member',
            'success' => 'An invite has been sent',
            'failure' => 'The invite could not be sent, please try again.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Configurações',
        'app-setup' => [
            'app-setup'   => 'Instalação do aplicativo',
            'images-only' => 'Somente imagens podem ser carregadas.',
            'too-big'     => 'O arquivo que você carregou é muito grande. Envie uma imagem inferior à :size',
        ],
        'analytics' => [
            'analytics' => 'Analytics',
        ],
        'localization' => [
            'localization' => 'Localization',
        ],
        'customization' => [
            'customization' => 'Customization',
            'header'        => 'Custom Header HTML',
            'footer'        => 'Custom Footer HTML',
        ],
        'security' => [
            'security'   => 'Segurança',
            'two-factor' => 'Usuários sem autenticação de dois fatores',
        ],
        'stylesheet' => [
            'stylesheet' => 'Folha de estilo',
        ],
        'theme' => [
            'theme' => 'Tema',
        ],
        'edit' => [
            'success' => 'Configurações salvas.',
            'failure' => 'Não foi possível salvar as configurações.',
        ],
        'credits' => [
            'credits'       => 'Credits',
            'contributors'  => 'Contributors',
            'license'       => 'Cachet is a BSD-3-licensed open source project, released by <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => 'Backers & Sponsors',
            'backers'       => 'If you\'d like to support future development, check out the <a href="https://patreon.com/jbrooksuk" target="_blank">Cachet Patreon</a> campaign.',
            'thank-you'     => 'Thank you to each and every one of the :count contributors.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Login',
        'logged_in'  => 'Você está logado.',
        'welcome'    => 'Bem-vindo de volta!',
        'two-factor' => 'Por favor insira o seu token.',
    ],

    // Sidebar footer
    'help'        => 'Ajuda',
    'status_page' => 'Página de status',
    'logout'      => 'Sair',

    // Notifications
    'notifications' => [
        'notifications' => 'Notificações',
        'awesome'       => 'Excelente.',
        'whoops'        => 'Opa.',
    ],

    // Widgets
    'widgets' => [
        'support'          => 'Support Cachet',
        'support_subtitle' => 'Check out our <strong><a href="https://patreon.com/jbrooksuk" target="_blank">Patreon</a></strong> page!',
        'news'             => 'Latest News',
        'news_subtitle'    => 'Get the latest updates',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welcome to your new status page!',
        'message' => 'Sua página de status está quase pronta! Tavez vocë queira checar essas configurações extras',
        'close'   => 'Take me straight to my dashboard',
        'steps'   => [
            'component'  => 'Criar componentes',
            'incident'   => 'Criar incidentes',
            'customize'  => 'Personalizar',
            'team'       => 'Adicionar usuários',
            'api'        => 'Gerar token de API',
            'two-factor' => 'Autenticação em duas etapas',
        ],
    ],

];
