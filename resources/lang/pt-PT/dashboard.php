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
        'incidents'                => 'Ocorrências',
        'logged'                   => '{0} Não existem incidentes, bom trabalho.|Você registrou um incidente.|Você reportou <strong>:count</strong> incidentes.',
        'incident-create-template' => 'Criar template',
        'incident-templates'       => 'Template de incidentes',
        'add'                      => [
            'title'   => 'Adicionar um incidente',
            'success' => 'Incidente adicionado.',
            'failure' => 'Algo deu errado com o incidente.',
        ],
        'edit' => [
            'title'   => 'Editar um incidente',
            'success' => 'Incidente atualizado.',
            'failure' => 'Algo deu errado com o incidente.',
        ],
        'delete' => [
            'success' => 'O incidente foi apagado e não será mais mostrado na sua página de estado.',
            'failure' => 'O incidente não pode ser apagado. Por favor tente de novo.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Template de incidentes',
            'add'   => [
                'title'   => 'Criar um modelo de incidente',
                'message' => 'Adicione um esboço de incidente.',
                'success' => 'Template criado.',
                'failure' => 'Algo deu errado com o template de incidente.',
            ],
            'edit' => [
                'title'   => 'Editar Modelo',
                'success' => 'Template foi atualizado!',
                'failure' => 'Algo deu errado atualizando o template de incidente',
            ],
            'delete' => [
                'success' => 'O esboço de incidente foi apagado.',
                'failure' => 'O esboço de incidente não pode ser apagado. Por favor tente de novo.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Manutenção Agendada',
        'logged'       => '{0} Não existem agendamentos, bom trabalho.|Você introduziu um agendamento.|Você reportou <strong>:count</strong> agendamentos.',
        'scheduled_at' => 'Agendada em :timestamp',
        'add'          => [
            'title'   => 'Adicionar Manutenção Agendada',
            'success' => 'Agendamento adicionado.',
            'failure' => 'Algo correu mal ao criar o agendamento.',
        ],
        'edit' => [
            'title'   => 'Editar Manutenção Agendada',
            'success' => 'Agendamento actualizado!',
            'failure' => 'Algo correu mal ao editar o agendamento.',
        ],
        'delete' => [
            'success' => 'O agendamento foi eliminado e não será mostrado na sua página de estado.',
            'failure' => 'O agendamento não pôde ser eliminado. Por favor tente de novo.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Componentes',
        'component_statuses' => 'Status do componente',
        'listed_group'       => 'Agrupado em :name',
        'add'                => [
            'title'   => 'Adicionar um Componente',
            'message' => 'Você deve adicionar um componente.',
            'success' => 'Componente criado.',
            'failure' => 'Algo deu errado com o componente.',
        ],
        'edit' => [
            'title'   => 'Editar um Componente',
            'success' => 'Componente atualizado.',
            'failure' => 'Algo deu errado com o componente.',
        ],
        'delete' => [
            'success' => 'O componente foi apagado!',
            'failure' => 'O componente não pode ser apagado. Por favor tente de novo.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Grupo de componente|Grupos de componente',
            'no_components' => 'Deverá adicionar um grupo de componente.',
            'add'           => [
                'title'   => 'Adicionar um grupo de componentes',
                'success' => 'Grupo de componente adicionado.',
                'failure' => 'Algo deu errado com o grupo de componente.',
            ],
            'edit' => [
                'title'   => 'Editar um grupo de Componentes',
                'success' => 'Grupo de componente actualizado.',
                'failure' => 'Algo correu mal com o grupo de componente.',
            ],
            'delete' => [
                'success' => 'O grupo de componentes foi apagado!',
                'failure' => 'O grupo de componentes não pode ser apagado. Por favor tente de novo.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metricas',
        'add'     => [
            'title'   => 'Criar uma métrica',
            'message' => 'Adicione uma métrica.',
            'success' => 'Métrica criada.',
            'failure' => 'Algo correu mal com a métrica.',
        ],
        'edit' => [
            'title'   => 'Editar uma métrica',
            'success' => 'Métrica actualizada.',
            'failure' => 'Algo correu mal com a métrica.',
        ],
        'delete' => [
            'success' => 'A métrica foi apagada e não será mais mostrada na sua página de estado.',
            'failure' => 'A métrica não pode ser apagada. Por favor tente de novo.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'  => 'Assinantes',
        'description'  => 'Os Assinantes receberão atualizações por email quando incidentes são criados.',
        'verified'     => 'Verificado',
        'not_verified' => 'Não Verificado',
        'add'          => [
            'title'   => 'Adicionar um novo assinante',
            'success' => 'Assinante adicionado.',
            'failure' => 'Algo deu errado com o componente.',
        ],
        'edit' => [
            'title'   => 'Actualizar Assinante',
            'success' => 'Assinante atualizado.',
            'failure' => 'Algo deu errado duante a atualização.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Equipe',
        'member'      => 'Membro',
        'profile'     => 'Perfil	',
        'description' => 'Membros da equipe serão capazes de adicionar, modificar &amp; editar componentes e incidentes.',
        'add'         => [
            'title'   => 'Adicionar um novo membro de equipa',
            'success' => 'Membro da equipe adicionado.',
            'failure' => 'Houve algo de errado com o utilizador.',
        ],
        'edit' => [
            'title'   => 'Atualizar Perfil',
            'success' => 'Perfil atualizado.',
            'failure' => 'Algo deu errado duante a atualização.',
        ],
        'delete' => [
            'success' => 'Utilizador apagado.',
            'failure' => 'Houve algo de errado ao apagar o utilizador.',
        ],
        'invite' => [
            'title'   => 'Convidar um novo membro de equipa',
            'success' => 'Os utilizadores convidados.',
            'failure' => 'Houve algo de errado com o convite.',
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
            'analytics' => 'Analítica',
        ],
        'localization' => [
            'localization' => 'Localização',
        ],
        'security' => [
            'security'   => 'Segurança',
            'two-factor' => 'Utilizados sem factor de dupla autenticação',
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
        'login'      => 'Entrar',
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
        'welcome' => 'Bem vindo à sua página de estado!',
        'message' => 'Sua página de status está quase pronta! Tavez vocë queira checar essas configurações extras',
        'close'   => 'Basta ir direto para o meu painel de controle',
        'steps'   => [
            'component'  => 'Criar componentes',
            'incident'   => 'Criar incidentes',
            'customize'  => 'Personalizar',
            'team'       => 'Adicionar usuários',
            'api'        => 'Gerar token de API',
            'two-factor' => 'Autenticação de 2 Factores',
        ],
    ],

];
