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
        'title'                    => 'Incidents &amp; Schedule',
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
                'failure' => 'Algo deu errado com o componente, por favor tente novamente.',
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
        'subscribers'      => 'Assinantes',
        'description'      => 'Assinantes vão receber atualizações de e-mail quando incidentes criados ou componentes atualizados.',
        'verified'         => 'Verificado',
        'not_verified'     => 'Não verificado',
        'subscriber'       => ':email, inscreveu-se em :date',
        'no_subscriptions' => 'Inscrito em todas as atualizações',
        'add'              => [
            'title'   => 'Adicionar um novo assinante',
            'success' => 'Inscrito adicionado.',
            'failure' => 'Algo deu errado adicionando o assinante, por favor tente novamente.',
            'help'    => 'Insira cada assinante em uma nova linha.',
        ],
        'edit' => [
            'title'   => 'Atualizar assinante',
            'success' => 'Inscrito atualizado.',
            'failure' => 'Algo deu errado editando o assinante, por favor tente novamente.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Equipe',
        'member'      => 'Membro',
        'profile'     => 'Perfil	',
        'description' => 'Team Members will be able to add, modify &amp; edit components and incidents.',
        'add'         => [
            'title'   => 'Adicionar um novo membro da equipe',
            'success' => 'Membro da equipe adicionado.',
            'failure' => 'Membro da equipe não pôde ser adicionado, por favor tente novamente.',
        ],
        'edit' => [
            'title'   => 'Atualizar perfil',
            'success' => 'Perfil atualizado.',
            'failure' => 'Algo deu errado atualizando o perfil, por favor tente novamente.',
        ],
        'delete' => [
            'success' => 'O membro da equipe foi excluído e não conseguirá mais acessar o painel de controle!',
            'failure' => 'Membro da equipe não pôde ser adicionado, por favor tente novamente.',
        ],
        'invite' => [
            'title'   => 'Convidar um novo membro para a equipe',
            'success' => 'Convite enviado',
            'failure' => 'O convite não pôde ser enviado, por favor tente novamente.',
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
            'analytics' => 'Estatísticas',
        ],
        'localization' => [
            'localization' => 'Idioma',
        ],
        'customization' => [
            'customization' => 'Personalização',
            'header'        => 'HTML de cabeçalho personalizado',
            'footer'        => 'HTML de rodapé personalizado',
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
            'credits'       => 'Créditos',
            'contributors'  => 'Colaboradores',
            'license'       => 'Cachet é um projeto de código aberto com licença BSD-3, lançado pela <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank"> Alt Three Services Limited</a>.',
            'backers-title' => 'Apoiadores e Patrocinadores',
            'backers'       => 'If you\'d like to support future development, check out the CrowdIn and GitHub.',
            'thank-you'     => 'Agradeço a cada um dos :count colaboradores.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Login',
        'logged_in'  => 'Você está logado.',
        'welcome'    => 'Welcome Back!',
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
        'news'             => 'Últimas Notícias',
        'news_subtitle'    => 'Receba as últimas atualizações',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welcome to your new Status page!',
        'message' => 'Your status page is almost ready! You might want to configure these extra settings',
        'close'   => 'Take me straight to my dashboard',
        'steps'   => [
            'component'  => 'Create components',
            'incident'   => 'Create incidents',
            'customize'  => 'Customize',
            'team'       => 'Add users',
            'api'        => 'Generate API token',
            'two-factor' => 'Two Factor Authentication',
        ],
    ],

];
