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

    // Setup form fields
    'setup' => [
        'email'            => 'Email',
        'username'         => 'Usuário',
        'password'         => 'Senha',
        'site_name'        => 'Nome do site',
        'site_domain'      => 'Domínio do site',
        'site_timezone'    => 'Selecione o seu fuso horário',
        'site_locale'      => 'Selecione seu idioma',
        'enable_google2fa' => 'Habilitar a autenticação de dois fatores do Google',
        'cache_driver'     => 'Driver de Cache',
        'queue_driver'     => 'Queue Driver',
        'session_driver'   => 'Driver de Sessão',
        'mail_driver'      => 'Driver de correio',
        'mail_host'        => 'Host de correio',
        'mail_address'     => 'Correio do endereço',
        'mail_username'    => 'Nome de usuário de email',
        'mail_password'    => 'Senha de email',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Nome de utilizador ou E-mail',
        'email'         => 'Email',
        'password'      => 'Senha',
        '2fauth'        => 'Código de autenticação',
        'invalid'       => 'Nome de usuário ou senha incorretos',
        'invalid-token' => 'Token inválido',
        'cookies'       => 'Você deve habilitar os cookies do navegador para logar.',
        'rate-limit'    => 'Limite de acesso excedido.',
        'remember_me'   => 'Remember me',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Nome',
        'status'             => 'Status',
        'component'          => 'Componente',
        'component_status'   => 'Component Status',
        'message'            => 'Mensagem',
        'message-help'       => 'Você também pode usar o Markdown.',
        'occurred_at'        => 'When did this incident occur?',
        'notify_subscribers' => 'Notificar os assinantes?',
        'notify_disabled'    => 'Due to scheduled maintenance, notifications about this incident or its components will be suppressed.',
        'visibility'         => 'Visibilidade do incidente',
        'stick_status'       => 'Stick Incident',
        'stickied'           => 'Stickied',
        'not_stickied'       => 'Not Stickied',
        'public'             => 'Visível para todos',
        'logged_in_only'     => 'Visível somente para usuários logados',
        'templates'          => [
            'name'     => 'Nome',
            'template' => 'Template',
            'twig'     => 'Esboços de incidentes podem fazer uso da linguagem de template <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>.',
        ],
    ],

    'schedules' => [
        'name'         => 'Nome',
        'status'       => 'Status',
        'message'      => 'Mensagem',
        'message-help' => 'Você também pode usar o Markdown.',
        'scheduled_at' => 'When is this maintenance scheduled for?',
        'completed_at' => 'When did this maintenance complete?',
        'templates'    => [
            'name'     => 'Nome',
            'template' => 'Template',
            'twig'     => 'Esboços de incidentes podem fazer uso da linguagem de template <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Nome',
        'status'      => 'Status',
        'group'       => 'Grupo',
        'description' => 'Descrição',
        'link'        => 'Link',
        'tags'        => 'Marcações',
        'tags-help'   => 'Separados por vírgulas.',
        'enabled'     => 'Componente activado?',

        'groups' => [
            'name'                     => 'Nome',
            'collapsing'               => 'Expand/Collapse options',
            'visible'                  => 'Sempre expandido',
            'collapsed'                => 'Colapsar o grupo por padrão',
            'collapsed_incident'       => 'Colapsar o grupo, mas expandir se ocorrer algum problema',
            'visibility'               => 'Visibility',
            'visibility_public'        => 'Visible to public',
            'visibility_authenticated' => 'Visible only to logged in users',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => 'Nome',
        'description'        => 'Descrição',
        'start_at'           => 'Schedule start time',
        'timezone'           => 'Timezone',
        'schedule_frequency' => 'Schedule frequency (in seconds)',
        'completion_latency' => 'Completion latency (in seconds)',
        'group'              => 'Grupo',
        'active'             => 'Active?',
        'groups'             => [
            'name' => 'Group Name',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'                     => 'Nome',
        'suffix'                   => 'Sufixo',
        'description'              => 'Descrição',
        'description-help'         => 'Você também pode usar o Markdown.',
        'display-chart'            => 'Exibir o gráfico na página de status?',
        'default-value'            => 'Valor padrão',
        'calc_type'                => 'Cálculo de métricas',
        'type_sum'                 => 'Soma',
        'type_avg'                 => 'Média',
        'places'                   => 'Casas decimais',
        'default_view'             => 'Visualização padrão',
        'threshold'                => 'Quantos minutos de limite entre os pontos das métricas?',
        'visibility'               => 'Visibility',
        'visibility_authenticated' => 'Visible to authenticated users',
        'visibility_public'        => 'Visible to everybody',
        'visibility_hidden'        => 'Always hidden',

        'points' => [
            'value' => 'Valor',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                             => 'Nome do site',
            'site-url'                              => 'URL do site',
            'display-graphs'                        => 'Exibir gráficos na página de status?',
            'about-this-page'                       => 'Sobre esta página',
            'days-of-incidents'                     => 'Quantos dias de incidentes para mostrar?',
            'time_before_refresh'                   => 'Status page refresh rate (in seconds)',
            'major_outage_rate'                     => 'Major outage threshold (in %)',
            'banner'                                => 'Imagem do banner',
            'banner-help'                           => "It's recommended that you upload files no bigger than 930px wide",
            'subscribers'                           => 'Permitir que outras pessoas se cadastrem para notificações via e-mail?',
            'suppress_notifications_in_maintenance' => 'Suppress notifications when incident occurs during maintenance period?',
            'skip_subscriber_verification'          => 'Skip verifying of users? (Be warned, you could be spammed)',
            'automatic_localization'                => 'Localizar sua página de status de acordo com o idioma do visitante automaticamente?',
            'enable_external_dependencies'          => 'Enable Third Party Dependencies (Google Fonts, Trackers, etc...)',
            'show_timezone'                         => 'Show the timezone the status page is running in',
            'only_disrupted_days'                   => 'Only show days containing incidents in the timeline?',
        ],
        'analytics' => [
            'analytics_google'       => 'Código do Google Analytics',
            'analytics_gosquared'    => 'Código do GoSquared Analytics',
            'analytics_piwik_url'    => 'URL para a instância do Piwik (sem o http(s)://)',
            'analytics_piwik_siteid' => 'Id do site no Piwik',
        ],
        'localization' => [
            'site-timezone'        => 'Fuso horário do site',
            'site-locale'          => 'Idioma do site',
            'date-format'          => 'Formato da data',
            'incident-date-format' => 'Formato de Hora do Incidente',
        ],
        'security' => [
            'allowed-domains'           => 'Domínios permitidos',
            'allowed-domains-help'      => 'Separados por vírgula. O domínio definido acima é permitido automaticamente por padrão.',
            'always-authenticate'       => 'Always authenticate',
            'always-authenticate-help'  => 'Require login to view any Cachet page',
        ],
        'stylesheet' => [
            'custom-css' => 'Folha de estilos personalizada',
        ],
        'theme' => [
            'background-color'        => 'Cor de fundo',
            'background-fills'        => 'Preenchimento de Fundo (Componentes, Incidentes, Rodapé)',
            'banner-background-color' => 'Cor de Fundo do banner',
            'banner-padding'          => 'Margem interna',
            'fullwidth-banner'        => 'Enable full width banner?',
            'text-color'              => 'Cor do Texto',
            'dashboard-login'         => 'Mostrar botão para painel no rodapé?',
            'reds'                    => 'Vermelho (Usado para erros)',
            'blues'                   => 'Azul (usado para informações)',
            'greens'                  => 'Verde (Usado para sucesso)',
            'yellows'                 => 'Amarelo (Usado para alertas)',
            'oranges'                 => 'Laranga (Usado para avisos)',
            'metrics'                 => 'Preenchimento de Métricas',
            'links'                   => 'Links',
        ],
    ],

    'user' => [
        'username'       => 'Usuário',
        'email'          => 'Email',
        'password'       => 'Senha',
        'api-token'      => 'Token da API',
        'api-token-help' => 'Regenerar a chave da API impedirá que aplicativos existentes acessem o Cachet.',
        'gravatar'       => 'Altere a foto de perfil no Gravatar.',
        'user_level'     => 'Nível do Utilizador',
        'levels'         => [
            'admin' => 'Administrador',
            'user'  => 'Usuário',
        ],
        '2fa' => [
            'help' => 'Ativando autenticação de dois fatores aumenta a segurança de sua conta. Você vai precisar baixar <a href="https://support.google.com/accounts/answer/1066447?hl=en"> Google Authenticator</a> ou um app similar em seu dispositivo móvel. Quando você entrar você será solicitado um token gerado pelo app.',
        ],
        'team' => [
            'description' => 'Convide membros da sua equipe através do endereço de e-mail aqui.',
            'email'       => 'Your Team Members Email Address',
        ],
    ],

    'general' => [
        'timezone' => 'Select Timezone',
    ],

    // Buttons
    'add'            => 'Adicionar',
    'save'           => 'Salvar',
    'update'         => 'Atualizar',
    'create'         => 'Criar',
    'edit'           => 'Editar',
    'delete'         => 'Apagar',
    'submit'         => 'Enviar',
    'cancel'         => 'Cancelar',
    'remove'         => 'Remover',
    'invite'         => 'Convite',
    'signup'         => 'Cadastrar-se',
    'manage_updates' => 'Manage Updates',

    // Other
    'optional' => '* Opcional',
];
