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
        'password'         => 'Palavra passe',
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
        'email'         => 'Endereço de Correio',
        'password'      => 'Senha',
        '2fauth'        => 'Código de autenticação',
        'invalid'       => 'Invalid username or password',
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
        'visibility'         => 'Visibilidade do Incidente',
        'public'             => 'Visível ao Publico',
        'logged_in_only'     => 'Apenas visível para users autenticados',
        'templates'          => [
            'name'     => 'Nome',
            'template' => 'Template',
            'twig'     => 'Incident Templates can make use of the <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> templating language.',
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
            'name'      => 'Nome',
            'collapsed' => 'Collapse the group by default?',
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
            'display-graphs'         => 'Mostrar gráficos na página de estado?',
            'about-this-page'        => 'Sobre esta página',
            'days-of-incidents'      => 'Quantos dias de incidentes para mostrar?',
            'banner'                 => 'Imagem do banner',
            'banner-help'            => "É recomendável que você faça upload de arquivos menores que 930px .",
            'subscribers'            => 'Permitir que as pessoas subscrevam as notificações?',
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
            'custom-css' => 'Folha de estilos personalizada',
        ],
        'theme' => [
            'background-color'        => 'Cor de fundo',
            'background-fills'        => 'Preenchimento de Fundo (Componentes, Incidentes, Rodapé)',
            'banner-background-color' => 'Cor de Fundo do banner',
            'banner-padding'          => 'Espaçamento do Banner',
            'fullwidth-banner'        => 'Habilitar largura completa do banner?',
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
