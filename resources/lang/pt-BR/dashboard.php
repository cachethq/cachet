<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joe@cachethq.io>
 * (c) Graham Campbell <graham@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    'dashboard' => 'Dashboard',

    // Incidents
    'incidents' => [
        'title'                    => '',
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
            'title'   => 'Editar um incidente',
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
                'failure' => 'Algo deu errado atualizando o template de incidente',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => '',
        'scheduled_at' => '',
        'add'          => [
            'title'   => '',
            'success' => '',
            'failure' => '',
        ],
        'edit' => [
            'title'   => '',
            'success' => '',
            'failure' => '',
        ],
        'delete' => [
            'success' => '',
            'failure' => '',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Componentes',
        'component_statuses' => 'Status do componente',
        'add'                => [
            'title'   => 'Adicionar componente',
            'message' => 'Você deve adicionar um componente.',
            'success' => 'Componente criado.',
            'failure' => 'Algo deu errado com o componente.',
        ],
        'edit' => [
            'title'   => 'Editar um componente',
            'success' => 'Componente atualizado.',
            'failure' => 'Algo deu errado com o componente.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Grupo de componente|Grupos de componente',
            'no_components' => 'You should add a component group.',
            'add'           => [
                'title'   => 'Adicionar um grupo de componentes',
                'success' => 'Grupo de componente adicionado.',
                'failure' => 'Algo deu errado com o grupo de componente.',
            ],
            'edit' => [
                'title'   => '',
                'success' => '',
                'failure' => '',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metricas',
        'add'     => [
            'title'   => '',
            'success' => '',
            'failure' => '',
        ],
        'edit' => [
            'title'   => '',
            'success' => '',
            'failure' => '',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Equipe',
        'member'      => 'Membro',
        'profile'     => 'Perfil	',
        'description' => 'Membros da equipe serão capazes de adicionar, modificar &amp; editar componentes e incidentes.',
        'add'         => [
            'title'   => 'Adicionar um novo membro da equipe',
            'success' => 'Membro da equipe adicionado.',
            'failure' => 'Algo deu errado com o componente.',
        ],
        'edit'        => [
            'title'   => 'Atualizar perfil',
            'success' => 'Perfil atualizado.',
            'failure' => 'Algo deu errado duante a atualização.',
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
    'notifications'     => [
        'notifications' => 'Notificações',
        'awesome'       => 'Excelente.',
        'whoops'        => 'Opa.',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Bem-vindo ao Cachet',
        'message' => 'Sua página de status está quase pronta! Tavez vocë queira checar essas configurações extras',
        'close'   => 'Basta ir direto para o meu painel de controle',
        'steps'   => [
            'component'  => 'Criar componentes',
            'incident'   => 'Criar incidentes',
            'customize'  => 'Personalizar',
            'team'       => 'Adicionar usuários',
            'api'        => 'Gerar token de API',
            'two-factor' => '',
        ],
    ],

];
