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
        'session_driver'   => 'Driver de Sessão',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Username or Email',
        'email'         => 'Email',
        'password'      => 'Senha',
        '2fauth'        => 'Código de autenticação',
        'invalid'       => 'Invalid username or password',
        'invalid-token' => 'Token inválido',
        'cookies'       => 'Você deve habilitar os cookies do navegador para logar.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Nome',
        'status'             => 'Status',
        'component'          => 'Componente',
        'message'            => 'Mensagem',
        'message-help'       => 'Você também pode usar o Markdown.',
        'scheduled_at'       => 'Agendar a manutenção para quando?',
        'incident_time'      => 'Quando esse incidente ocorreu?',
        'notify_subscribers' => 'Notify Subscribers?',
        'visibility'         => 'VIsibilidade do incidente',
        'public'             => 'Visível para todos',
        'logged_in_only'     => 'Only visible to logged in users',
        'templates'          => [
            'name'     => 'Nome',
            'template' => 'Template',
            'twig'     => 'Incident Templates can make use of the <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> templating language.',
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
        'enabled'     => 'Component enabled?',

        'groups' => [
            'name'      => 'Nome',
            'collapsed' => 'Collapse the group by default?',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Nome',
        'suffix'           => 'Sufixo',
        'description'      => 'Descrição',
        'description-help' => 'Você também pode usar Markdown.',
        'display-chart'    => 'Exibir o gráfico na página de status?',
        'default-value'    => 'Default Value',
        'calc_type'        => 'Calculation of Metrics',
        'type_sum'         => 'Soma',
        'type_avg'         => 'Média',
        'places'           => 'Decimal Places',
        'default_view'     => 'Default View',

        'points' => [
            'value' => 'Valor',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Nome do site',
            'site-url'               => 'URL do site',
            'display-graphs'         => 'Exibir gráficos na página de status?',
            'about-this-page'        => 'Sobre esta página',
            'days-of-incidents'      => 'Quantos dias de incidentes para mostrar?',
            'banner'                 => 'Imagem do banner',
            'banner-help'            => "É recomendável que você faça upload de arquivos menores que 930px .",
            'subscribers'            => 'Permitir que outras pessoas se cadastrem para notificações via e-mail?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics code',
            'analytics_gosquared'    => 'GoSquared Analytics code',
            'analytics_piwik_url'    => 'URL of your Piwik instance (without http(s)://)',
            'analytics_piwik_siteid' => 'Piwik\'s site id',
        ],
        'localization' => [
            'site-timezone'          => 'Site Timezone',
            'site-locale'            => 'Site Language',
            'date-format'            => 'Date Format',
            'incident-date-format'   => 'Incident Timestamp Format',
        ],
        'security' => [
            'allowed-domains'      => 'Allowed Domains',
            'allowed-domains-help' => 'Separados por vírgula. O domínio definido acima é permitido automaticamente por padrão.',
        ],
        'stylesheet' => [
            'custom-css' => 'Folha de estilos personalizada',
        ],
        'theme' => [
            'background-color'        => 'Cor de fundo',
            'background-fills'        => 'Background Fills (Components, Incidents, Footer)',
            'banner-background-color' => 'Banner Background Color',
            'banner-padding'          => 'Banner Padding',
            'fullwidth-banner'        => 'Enable fullwidth banner?',
            'text-color'              => 'Cor do Texto',
            'dashboard-login'         => 'Show dashboard button in the footer?',
            'reds'                    => 'Red (Used for errors)',
            'blues'                   => 'Blue (Used for information)',
            'greens'                  => 'Green (Used for success)',
            'yellows'                 => 'Yellow (Used for alerts)',
            'oranges'                 => 'Orange (Used for notices)',
            'metrics'                 => 'Metrics Fill',
            'links'                   => 'Links',
        ],
    ],

    'user' => [
        'username'       => 'Usuário',
        'email'          => 'Email',
        'password'       => 'Senha',
        'api-token'      => 'Token da API',
        'api-token-help' => 'Regenerar a chave da API impedirá que aplicativos existentes acessem o Cachet.',
        'gravatar'       => 'Change your profile picture at Gravatar.',
        'user_level'     => 'User Level',
        'levels'         => [
            'admin' => 'Admin',
            'user'  => 'User',
        ],
        '2fa' => [
            'help' => 'Ativando autenticação de dois fatores aumenta a segurança de sua conta. Você vai precisar baixar <a href="https://support.google.com/accounts/answer/1066447?hl=en"> Google Authenticator</a> ou um app similar em seu dispositivo móvel. Quando você entrar você será solicitado um token gerado pelo app.',
        ],
        'team' => [
            'description' => 'Invite your team members by entering their email addresses here.',
            'email'       => 'Email #:id',
        ],
    ],

    // Buttons
    'add'    => 'Adicionar',
    'save'   => 'Salvar',
    'update' => 'Atualizar',
    'create' => 'Criar',
    'edit'   => 'Editar',
    'delete' => 'Apagar',
    'submit' => 'Enviar',
    'cancel' => 'Cancelar',
    'remove' => 'Remover',
    'invite' => 'Invite',
    'signup' => 'Sign Up',

    // Other
    'optional' => '* Opcional',
];
