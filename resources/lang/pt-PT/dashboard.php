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

    'dashboard'          => 'Dashboard',
    'writeable_settings' => 'O diretório das configurações do Cachet não é gravável. Certifique-se de que<code>./bootstrap/cachet</code> é gravável pelo servidor web.',

    // Incidents
    'incidents' => [
        'title'                    => 'Incidentes &amp; Agendamentos',
        'incidents'                => 'Ocorrências',
        'logged'                   => '{0} Não existem incidentes, bom trabalho.|Você registrou um incidente.|Você reportou <strong>:count</strong> incidentes.',
        'incident-create-template' => 'Criar template',
        'incident-templates'       => 'Template de incidentes',
        'updates'                  => '{0} Nenhuma Atualização|Uma Atualização|:contagem de Atualizações',
        'add'                      => [
            'title'   => 'Adicionar um incidente',
            'success' => 'Incidente adicionado.',
            'failure' => 'Houve um erro ao adicionar o incidente, por favor tente novamente.',
        ],
        'edit' => [
            'title'   => 'Editar um incidente',
            'success' => 'Incidente atualizado.',
            'failure' => 'Houve um erro na edição do incidente, por favor tente novamente.',
        ],
        'delete' => [
            'success' => 'O incidente foi apagado e não será mais mostrado na sua página de estado.',
            'failure' => 'O incidente não pode ser apagado, por favor tente novamente.',
        ],
        'update' => [
            'title'    => 'Crie uma nova atualização de incidente',
            'subtitle' => 'Adicione uma atualização ao <strong>:incidente</strong>',
            'success'  => 'Update added.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Template de incidentes',
            'add'   => [
                'title'   => 'Criar um modelo de incidente',
                'message' => 'Adicione um esboço de incidente.',
                'success' => 'O seu novo modelo de incidente foi criado.',
                'failure' => 'Aconteceu algo de errado com o modelo de incidente.',
            ],
            'edit' => [
                'title'   => 'Editar Modelo',
                'success' => 'O modelo de incidente foi atualizado.',
                'failure' => 'Aconteceu algo dee errado ao atualizar o modelo de incidente',
            ],
            'delete' => [
                'success' => 'O esboço de incidente foi apagado.',
                'failure' => 'Aconteceu um erro ao tentar apagar o modelo de incidente, por favor tente novamente.',
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
            'failure' => 'Ocorreu um problema ao adicionar a programação, por favor tente novamente.',
        ],
        'edit' => [
            'title'   => 'Editar Manutenção Agendada',
            'success' => 'Agendamento actualizado com sucesso!',
            'failure' => 'Ocorreu um problema ao editar a programação, por favor tente novamente.',
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
        'listed_group'       => 'Agrupado em :name',
        'add'                => [
            'title'   => 'Adicionar um Componente',
            'message' => 'Você deve adicionar um componente.',
            'success' => 'Componente criado.',
            'failure' => 'Something went wrong with the component group, please try again.',
        ],
        'edit' => [
            'title'   => 'Editar um Componente',
            'success' => 'Componente atualizado.',
            'failure' => 'Something went wrong with the component group, please try again.',
        ],
        'delete' => [
            'success' => 'O componente foi apagado!',
            'failure' => 'The component could not be deleted, please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Grupo de componente|Grupos de componente',
            'no_components' => 'Deverá adicionar um grupo de componente.',
            'add'           => [
                'title'   => 'Adicionar um grupo de componentes',
                'success' => 'Grupo de componentes adicionado.',
                'failure' => 'Something went wrong with the component group, please try again.',
            ],
            'edit' => [
                'title'   => 'Editar um grupo de Componentes',
                'success' => 'Grupo de componentes atualizado.',
                'failure' => 'Something went wrong with the component group, please try again.',
            ],
            'delete' => [
                'success' => 'O grupo de componentes foi apagado!',
                'failure' => 'O grupo de componentes não pode ser apagado, por favor tente novamente.',
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
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'edit' => [
            'title'   => 'Editar uma métrica',
            'success' => 'Métrica atualizada.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'delete' => [
            'success' => 'A métrica foi apagada e não será mais mostrada na sua página de estado.',
            'failure' => 'A métrica não pode ser apagada, por favor tente novamente.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'      => 'Assinantes',
        'description'      => 'Subscribers will receive email updates when incidents are created or components are updated.',
        'verified'         => 'Verificado',
        'not_verified'     => 'Não Verificado',
        'subscriber'       => ':email, subscrito em :date',
        'no_subscriptions' => 'Subscrito em todas as atualizações',
        'add'              => [
            'title'   => 'Adicionar um novo assinante',
            'success' => 'Assinante adicionado.',
            'failure' => 'Something went wrong adding the subscriber, please try again.',
            'help'    => 'Introduza cada subscritor numa linha nova.',
        ],
        'edit' => [
            'title'   => 'Actualizar Assinante',
            'success' => 'Assinante atualizado.',
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
            'title'   => 'Adicionar um novo membro de equipa',
            'success' => 'Membro de equipa adicionado.',
            'failure' => 'O membro da equipe não pôde ser adicionado, por favor tente novamente.',
        ],
        'edit' => [
            'title'   => 'Atualizar Perfil',
            'success' => 'Perfil actualizado.',
            'failure' => 'Something went wrong updating the profile, please try again.',
        ],
        'delete' => [
            'success' => 'Utilizador apagado.',
            'failure' => 'O membro da equipe não pôde ser adicionado, por favor tente novamente.',
        ],
        'invite' => [
            'title'   => 'Convidar um novo membro de equipa',
            'success' => 'Os utilizadores convidados.',
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
            'analytics' => 'Analítica',
        ],
        'log' => [
            'log' => 'Log',
        ],
        'localization' => [
            'localization' => 'Localização',
        ],
        'customization' => [
            'customization' => 'Personalização',
            'header'        => 'HTML do Header Personalizado',
            'footer'        => 'HTML do Footer Personalizado',
        ],
        'mail' => [
            'mail'  => 'E-Mail',
            'test'  => 'Teste',
            'email' => [
                'subject' => 'Notificação de teste do Cachet',
                'body'    => 'Isto é uma notificação de teste do Cachet.',
            ],
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
        'credits' => [
            'credits'       => 'Créditos',
            'contributors'  => 'Contribuidores',
            'license'       => 'Cachet é um projecto open source licenciado com base no BSD-3, disponibilizado pela <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => 'Apoios & Patrocinadores',
            'backers'       => 'Se você quiser apoiar desenvolvimentos futuros, veja a campanha do <a href="https://patreon.com/jbrooksuk" target="_blank">Cachet no Pantreon</a>.',
            'thank-you'     => 'Obrigado a cada um dos :count colaboradores.',
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

    // Widgets
    'widgets' => [
        'support'          => 'Suporte o Cachet',
        'support_subtitle' => 'Verifique a nossa pagina no <strong><a href="https://patreon.com/jbrooksuk" target="_blank">Patreon</a></strong>!',
        'news'             => 'Últimas Notícias',
        'news_subtitle'    => 'Obter uma actualização',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Bem vindo à sua página de estado!',
        'message' => 'Sua página de status está quase pronta! Tavez vocë queira checar essas configurações extras',
        'close'   => 'Voltar ao Dashboard',
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
