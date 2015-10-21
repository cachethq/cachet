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
        'email'         => 'Email',
        'password'      => 'Senha',
        '2fauth'        => 'Código de autenticação',
        'invalid'       => 'E-mail ou senha inválidos',
        'invalid-token' => 'Token inválido',
        'cookies'       => 'You must enable cookies to login.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Nome',
        'status'             => 'Status',
        'component'          => 'Componente',
        'message'            => 'Mensagem',
        'message-help'       => 'Você também pode usar o Markdown.',
        'scheduled_at'       => 'Agendado em :timestamp',
        'incident_time'      => 'Quando o incidente ocorreu?',
        'notify_subscribers' => 'Notificar asssinantes',
        'visibility'         => 'Visível',
        'public'             => 'Visível pelo público',
        'logged_in_only'     => 'Visível apenas para usuários logados',
        'templates'          => [
            'name'     => 'Nome',
            'template' => 'Template',
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

        'groups' => [
            'name' => 'Nome',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Nome',
        'suffix'           => 'Sufixo',
        'description'      => 'Descrição',
        'description-help' => 'Você pode usar Markdown.',
        'display-chart'    => 'Exibir gráficos na página de status?',
        'default-value'    => 'Valor padrão',
        'calc_type'        => 'Cálculo de métricas',
        'type_sum'         => 'Soma',
        'type_avg'         => 'média',
        'places'           => 'Casas decimais',

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
            'site-timezone'          => 'Fuso horário do site',
            'site-locale'            => 'Idioma do site',
            'date-format'            => 'Formato da Data',
            'incident-date-format'   => 'Formato da data para incidentes',
            'display-graphs'         => 'Exibir gráficos na página de status?',
            'about-this-page'        => 'Sobre esta página',
            'days-of-incidents'      => 'Exibir quantos dias de incidentes?',
            'banner'                 => 'Imagem do banner',
            'banner-help'            => 'É recomendável que você faça upload de arquivos menores que 930px.',
            'analytics_google'       => 'Código do Google Ananlytics',
            'analytics_gosquared'    => 'Código do GoSquared Analytics',
            'analytics_piwik_url'    => 'URL do Piwik (sem http(s)://)',
            'analytics_piwik_siteid' => 'ID do Piwik',
            'subscribers'            => 'Permitir assinaturas de notificações por email?',
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
            'background-fills'        => 'Preenchimento do fundo (Componentes, Incidentes, Rodapé)',
            'banner-background-color' => 'Banner Background Color',
            'banner-padding'          => 'Banner Padding',
            'fullwidth-banner'        => 'Enable fullwidth banner?',
            'text-color'              => 'Cor do texto',
            'dashboard-login'         => 'Exibir o botão do dashboard no rodapé?',
            'reds'                    => 'Vermelho (Utilizado para erros)',
            'blues'                   => 'Azul (utilizado para informações)',
            'greens'                  => 'Verde (Utilizado para sucesso)',
            'yellows'                 => 'Amarelo (Utilizado para alertas)',
            'oranges'                 => 'Larange (Utilizado para notícias)',
            'metrics'                 => 'Métricas',
            'links'                   => 'Links',
        ],
    ],

    'user' => [
        'username'       => 'Usuário',
        'email'          => 'Email',
        'password'       => 'Senha',
        'api-token'      => 'Token da API',
        'api-token-help' => 'Gerar nova chave da API impedirá que aplicativos existentes acessem o Cachet.',
        'user_level'     => 'Nível de Usuário',
        'levels'         => [
            'admin' => 'Administrador',
            'user'  => 'Usuário',
        ],
        '2fa'            => [
            'help' => 'Ativar a autenticação de dois fatores aumenta a segurança de sua conta. Você vai precisar baixar <a href="https://support.google.com/accounts/answer/1066447?hl=en"> Google Authenticator</a> ou um app similar em seu dispositivo móvel. Quando você entrar, será solicitado um token gerado pelo app.',
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

    // Other
    'optional' => '* Opcional',
];
