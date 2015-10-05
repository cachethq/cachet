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
        'title'                    => 'Incidentes &amp; Agendamentos',
        'incidents'                => 'Incidentes',
        'logged'                   => '{0} Não existem incidentes, bom trabalho.|Você registrou um incidente.|Você reportou <strong>:count</strong> incidentes.',
        'incident-create-template' => 'Criar template',
        'incident-templates'       => 'Template de incidentes',
        'add'                      => [
            'title'   => 'Adicionar um incidente',
            'success' => 'Incidente adicionado.',
            'failure' => 'Algo deu errado com o incidente.',
        ],
        'edit' => [
            'title'   => 'Editar incidente',
            'success' => 'Incidente atualizado.',
            'failure' => 'Algo deu errado com o incidente.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Template de incidentes',
            'add'   => [
                'title'   => 'Criar um template de incidente',
                'success' => 'Template criado.',
                'failure' => 'Algo deu errado com o template de incidente.',
            ],
            'edit' => [
                'title'   => 'Editar template',
                'success' => 'Template foi atualizado!',
                'failure' => 'Algo deu errado ao atualizar o template de incidente',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Manutenção Agendada',
        'scheduled_at' => 'Manutenção agendada em :timestamp ',
        'add'          => [
            'title'   => 'Adicionar manutenção agendada',
            'success' => 'Agendamento atualizado com sucesso!',
            'failure' => 'Algo deu errado com o agendamento.',
        ],
        'edit' => [
            'title'   => 'Editar manutenção agendada',
            'success' => 'Agendamento atualizado com sucesso!',
            'failure' => 'Algo deu errado com a atualização do agendamento.',
        ],
        'delete' => [
            'success' => 'O agendamento foi excluído e não será exibido na página de status.',
            'failure' => 'O agendamento não pode ser excluído. Por favor, tente novamente.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Componentes',
        'component_statuses' => 'Status do componente',
        'listed_group'       => 'Agrupados por :name',
        'add'                => [
            'title'   => 'Adicionar componente',
            'message' => 'Você deve adicionar um componente.',
            'success' => 'Componente criado.',
            'failure' => 'Algo deu errado com o componente.',
        ],
        'edit' => [
            'title'   => 'Editar componente',
            'success' => 'Componente atualizado.',
            'failure' => 'Algo deu errado com a atualização do componente.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Grupo de componente|Grupos de componente',
            'no_components' => 'Você deve adicionar um grupo de componentes.',
            'add'           => [
                'title'   => 'Adicionar um grupo de componentes',
                'success' => 'Grupo de componente adicionado.',
                'failure' => 'Algo deu errado com o grupo de componente.',
            ],
            'edit' => [
                'title'   => 'Editar grupo de componentes',
                'success' => 'Grupo de compoenentes atualizado.',
                'failure' => 'Algo deu errado com a atualização do grupo de componentes.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Métricas',
        'add'     => [
            'title'   => 'Criar uma métrica',
            'success' => 'Métrica criada.',
            'failure' => 'Algo deu errado ao criar a métrica.',
        ],
        'edit' => [
            'title'   => 'Editar métrica',
            'success' => 'Métrica atualizada.',
            'failure' => 'Algo deu errado ao atualizar a métrica.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'  => 'Assinantes',
        'description'  => 'Os assinantes receberão um alerta quando os incidentes forem criados.',
        'verified'     => 'Verificado',
        'not_verified' => 'Não verificado',
        'add'          => [
            'title'   => 'Adicionar novo assinante',
            'success' => 'Assinante adicionado',
            'failure' => 'Algo deu errado ao adicionar o assinate.',
        ],
        'edit' => [
            'title'   => 'Editar assinante',
            'success' => 'Assinante atualizado.',
            'failure' => 'Algo deu errado ao atualizar o assinante.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Equipe',
        'member'      => 'Membro',
        'profile'     => 'Perfil',
        'description' => 'Membros da equipe serão capazes de adicionar, modificar &amp; editar componentes e incidentes.',
        'add'         => [
            'title'   => 'Adicionar um novo membro da equipe',
            'success' => 'Membro da equipe adicionado.',
            'failure' => 'Algo deu errado com o componente.',
        ],
        'edit' => [
            'title'   => 'Editar perfil',
            'success' => 'Perfil atualizado.',
            'failure' => 'Algo deu errado duante a atualização.',
        ],
        'delete' => [
            'success' => 'Perfil excluído',
            'failure' => 'Algo deu errado ao excluir o perfil.',
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
        'security' => [
            'security' => 'Segurança',
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
        'whoops'        => 'Ops.',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Bem-vindo ao Cachet',
        'message' => 'Sua página de status está quase pronta! Tavez você queira checar essas configurações extras',
        'close'   => 'Basta ir direto para o meu painel de controle',
        'steps'   => [
            'component'  => 'Criar componentes',
            'incident'   => 'Criar incidentes',
            'customize'  => 'Personalizar',
            'team'       => 'Adicionar usuários',
            'api'        => 'Gerar token de API',
            'two-factor' => 'Autneticação em 2 passos',
        ],
    ],

];
