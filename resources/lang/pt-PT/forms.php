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
        'email'            => 'E-mail',
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
        'mail_driver'      => 'Mail Driver',
        'mail_host'        => 'Mail Host',
        'mail_address'     => 'Mail From Address',
        'mail_username'    => 'Mail Username',
        'mail_password'    => 'Mail Password',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Nome de utilizador ou E-mail',
        'email'         => 'E-mail',
        'password'      => 'Senha',
        '2fauth'        => 'Código de autenticação',
        'invalid'       => 'Nome de utilizador ou palavra-passe inválidos',
        'invalid-token' => 'Token inválido',
        'cookies'       => 'Deverá activar cookies para efectuar autenticação.',
        'rate-limit'    => 'Rate limit exceeded.',
        'remember_me'   => 'Remember me',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Nome',
        'status'             => 'Estado',
        'component'          => 'Componente',
        'component_status'   => 'Component Status',
        'message'            => 'Mensagem',
        'message-help'       => 'Você também pode usar o Markdown.',
        'occurred_at'        => 'When did this incident occur?',
        'notify_subscribers' => 'Notificar subscritores?',
        'notify_disabled'    => 'Due to scheduled maintenance, notifications about this incident or its components will be suppressed.',
        'visibility'         => 'Incident Visibility',
        'stick_status'       => 'Stick Incident',
        'stickied'           => 'Stickied',
        'not_stickied'       => 'Not Stickied',
        'public'             => 'Visível ao Publico',
        'logged_in_only'     => 'Apenas visível para users autenticados',
        'templates'          => [
            'name'     => 'Nome',
            'template' => 'Template',
            'twig'     => 'Esboços de incidentes podem fazer uso da linguagem de template <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>.',
        ],
    ],

    'schedules' => [
        'name'         => 'Nome',
        'status'       => 'Estado',
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
        'status'      => 'Estado',
        'group'       => 'Grupo',
        'description' => 'Descrição',
        'link'        => 'Link',
        'tags'        => 'Marcações',
        'tags-help'   => 'Separados por vírgulas.',
        'enabled'     => 'Componente activado?',

        'groups' => [
            'name'                     => 'Nome',
            'collapsing'               => 'Expand/Collapse options',
            'visible'                  => 'Always expanded',
            'collapsed'                => 'Collapse the group by default',
            'collapsed_incident'       => 'Collapse the group, but expand if there are issues',
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
        'display-chart'            => 'Mostrar gráfico na página de estado?',
        'default-value'            => 'Valor Padrão',
        'calc_type'                => 'Cálculo de Métricas',
        'type_sum'                 => 'Soma',
        'type_avg'                 => 'Média',
        'places'                   => 'Casas Decimais',
        'default_view'             => 'Vista por defeito',
        'threshold'                => 'How many minutes of threshold between metric points?',
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
            'display-graphs'                        => 'Mostrar gráficos na página de estado?',
            'about-this-page'                       => 'Sobre esta página',
            'days-of-incidents'                     => 'Quantos dias de incidentes para mostrar?',
            'time_before_refresh'                   => 'Status page refresh rate (in seconds)',
            'major_outage_rate'                     => 'Major outage threshold (in %)',
            'banner'                                => 'Banner Image',
            'banner-help'                           => "It's recommended that you upload files no bigger than 930px wide",
            'subscribers'                           => 'Permitir que as pessoas subscrevam as notificações?',
            'suppress_notifications_in_maintenance' => 'Suppress notifications when incident occurs during maintenance period?',
            'skip_subscriber_verification'          => 'Skip verifying of users? (Be warned, you could be spammed)',
            'automatic_localization'                => 'Automatically localise your status page to your visitor\'s language?',
            'enable_external_dependencies'          => 'Enable Third Party Dependencies (Google Fonts, Trackers, etc...)',
            'show_timezone'                         => 'Show the timezone the status page is running in',
            'only_disrupted_days'                   => 'Only show days containing incidents in the timeline?',
        ],
        'analytics' => [
            'analytics_google'       => 'Código do Google Analytics',
            'analytics_gosquared'    => 'Código do GoSquared Analytics',
            'analytics_piwik_url'    => 'URL of your Piwik instance',
            'analytics_piwik_siteid' => 'ID do site Piwik',
        ],
        'localization' => [
            'site-timezone'        => 'Fuso horário do site',
            'site-locale'          => 'Idioma do site',
            'date-format'          => 'Formato da Data',
            'incident-date-format' => 'Formato da Hora do Incidente',
        ],
        'security' => [
            'allowed-domains'           => 'Domínios permitidos',
            'allowed-domains-help'      => 'Separados por vírgula. O domínio definido acima é permitido automaticamente por padrão.',
            'always-authenticate'       => 'Always authenticate',
            'always-authenticate-help'  => 'Require login to view any Cachet page',
        ],
        'stylesheet' => [
            'custom-css' => 'Custom Stylesheet',
        ],
        'theme' => [
            'background-color'        => 'Background color',
            'background-fills'        => 'Preenchimento de Fundo (Componentes, Incidentes, Rodapé)',
            'banner-background-color' => 'Cor de Fundo do banner',
            'banner-padding'          => 'Espaçamento do Banner',
            'fullwidth-banner'        => 'Enable full width banner?',
            'text-color'              => 'Text color',
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
        'email'          => 'E-mail',
        'password'       => 'Senha',
        'api-token'      => 'Token da API',
        'api-token-help' => 'Regenerar a chave da API impedirá que aplicativos existentes acessem o Cachet.',
        'gravatar'       => 'Altere a foto de perfil no Gravatar.',
        'user_level'     => 'Nível do Utilizador',
        'levels'         => [
            'admin' => 'Administrador',
            'user'  => 'Utilizador',
        ],
        '2fa' => [
            'help' => 'Ativando autenticação de dois fatores aumenta a segurança de sua conta. Você vai precisar baixar <a href="https://support.google.com/accounts/answer/1066447?hl=en"> Google Authenticator</a> ou um app similar em seu dispositivo móvel. Quando você entrar você será solicitado um token gerado pelo app.',
        ],
        'team' => [
            'description' => 'Convide membros da sua equipa através do endereço de e-mail aqui.',
            'email'       => 'Your Team Members Email Address',
        ],
    ],

    'general' => [
        'timezone' => 'Select Timezone',
    ],

    'seo' => [
        'title'        => 'SEO Title',
        'description'  => 'SEO Description',
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
    'signup'         => 'Registrar',
    'manage_updates' => 'Manage Updates',

    // Other
    'optional' => '* Opcional',
];
