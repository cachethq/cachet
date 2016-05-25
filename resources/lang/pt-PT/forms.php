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
        'session_driver'   => 'Driver de Sessão',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Nome de utilizador ou E-mail',
        'email'         => 'Endereço de Correio',
        'password'      => 'Senha',
        '2fauth'        => 'Código de autenticação',
        'invalid'       => 'Nome de utilizador ou palavra-passe inválidos',
        'invalid-token' => 'Token inválido',
        'cookies'       => 'Deverá activar cookies para efectuar autenticação.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Nome',
        'status'             => 'Estado',
        'component'          => 'Componente',
        'message'            => 'Mensagem',
        'message-help'       => 'Você também pode usar o Markdown.',
        'scheduled_at'       => 'Para quando pretende agendar a manutenção?',
        'incident_time'      => 'Quando é que este incidente ocorreu?',
        'notify_subscribers' => 'Notificar subscritores?',
        'visibility'         => 'Incident Visibility',
        'public'             => 'Visível ao Publico',
        'logged_in_only'     => 'Apenas visível para users autenticados',
        'templates'          => [
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
            'name'               => 'Nome',
            'collapsing'         => 'Choose visibility of the group',
            'visible'            => 'Always expanded',
            'collapsed'          => 'Collapse the group by default',
            'collapsed_incident' => 'Collapse the group, but expand if there are issues',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Nome',
        'suffix'           => 'Sufixo',
        'description'      => 'Descrição',
        'description-help' => 'Poderá também usar Markdown.',
        'display-chart'    => 'Mostrar gráfico na página de estado?',
        'default-value'    => 'Valor Padrão',
        'calc_type'        => 'Cálculo de Métricas',
        'type_sum'         => 'Soma',
        'type_avg'         => 'Média',
        'places'           => 'Casas Decimais',
        'default_view'     => 'Vista por defeito',
        'threshold'        => 'How many minutes of threshold between metric points?',

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
            'display-graphs'         => 'Mostrar gráficos na página de estado?',
            'about-this-page'        => 'Sobre esta página',
            'days-of-incidents'      => 'Quantos dias de incidentes para mostrar?',
            'banner'                 => 'Banner Image',
            'banner-help'            => "É recomendável que você faça upload de arquivos menores que 930px .",
            'subscribers'            => 'Permitir que as pessoas subscrevam as notificações?',
            'automatic_localization' => 'Automatically localise your status page to your visitor\'s language?',
        ],
        'analytics' => [
            'analytics_google'       => 'Código do Google Analytics',
            'analytics_gosquared'    => 'Código do GoSquared Analytics',
            'analytics_piwik_url'    => 'URL da instância do Piwik (sem http(s)://)',
            'analytics_piwik_siteid' => 'ID do site Piwik',
        ],
        'localization' => [
            'site-timezone'          => 'Fuso horário do site',
            'site-locale'            => 'Idioma do site',
            'date-format'            => 'Formato da Data',
            'incident-date-format'   => 'Formato da Hora do Incidente',
        ],
        'security' => [
            'allowed-domains'      => 'Domínios permitidos',
            'allowed-domains-help' => 'Separados por vírgula. O domínio definido acima é permitido automaticamente por padrão.',
        ],
        'stylesheet' => [
            'custom-css' => 'Custom Stylesheet',
        ],
        'theme' => [
            'background-color'        => 'Background Color',
            'background-fills'        => 'Preenchimento de Fundo (Componentes, Incidentes, Rodapé)',
            'banner-background-color' => 'Cor de Fundo do banner',
            'banner-padding'          => 'Espaçamento do Banner',
            'fullwidth-banner'        => 'Habilitar largura completa do banner?',
            'text-color'              => 'Text Color',
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
            'email'       => 'Email',
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
    'invite' => 'Convite',
    'signup' => 'Registrar',

    // Other
    'optional' => '* Opcional',
];
