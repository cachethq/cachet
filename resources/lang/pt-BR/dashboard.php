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
        'logged'       => '{0} There are no schedules, good work.|You have logged one schedule.|You have reported <strong>:count</strong> schedules.',
        'scheduled_at' => 'Agendada em :timestamp',
        'add'          => [
            'title'   => 'Add Scheduled Maintenance',
            'success' => 'Schedule added.',
            'failure' => 'Something went wrong adding the schedule, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit Scheduled Maintenance',
            'success' => 'Schedule has been updated!',
            'failure' => 'Something went wrong editing the schedule, please try again.',
        ],
        'delete' => [
            'success' => 'The scheduled maintenance has been deleted and will not show on your status page.',
            'failure' => 'The scheduled maintenance could not be deleted, please try again.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Componentes',
        'component_statuses' => 'Status do componente',
        'listed_group'       => 'Agrupados sob :name',
        'add'                => [
            'title'   => 'Add a component',
            'message' => 'Você deve adicionar um componente.',
            'success' => 'Component created.',
            'failure' => 'Something went wrong with the component, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit a component',
            'success' => 'Component updated.',
            'failure' => 'Something went wrong with the component, please try again.',
        ],
        'delete' => [
            'success' => 'The component has been deleted!',
            'failure' => 'The component could not be deleted, please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Grupo de componente|Grupos de componente',
            'no_components' => 'Você deve adicionar um componente à um grupo.',
            'add'           => [
                'title'   => 'Add a component group',
                'success' => 'Component group added.',
                'failure' => 'Something went wrong with the component group, please try again.',
            ],
            'edit' => [
                'title'   => 'Edit a component group',
                'success' => 'Component group updated.',
                'failure' => 'Something went wrong with the component group, please try again.',
            ],
            'delete' => [
                'success' => 'Component group has been deleted!',
                'failure' => 'The component group could not be deleted, please try again.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metricas',
        'add'     => [
            'title'   => 'Create a metric',
            'message' => 'You should add a metric.',
            'success' => 'Metric created.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit a metric',
            'success' => 'Metric updated.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'delete' => [
            'success' => 'The metric has been deleted and will no longer display on your status page.',
            'failure' => 'The metric could not be deleted, please try again.',
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

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welcome to your status page!',
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
