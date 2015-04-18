<?php

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
    ],

    // Login form fields
    'login' => [
        'email'         => 'Email',
        'password'      => 'Senha',
        '2fauth'        => 'Código de autenticação',
        'invalid'       => 'E-mail ou senha inválidos',
        'invalid-token' => 'Token inválido',
    ],

    // Incidents form fields
    'incidents' => [
        'name'         => 'Nome',
        'status'       => 'Status',
        'component'    => 'Componente',
        'message'      => 'Mensagem',
        'message-help' => 'Você também pode usar o Markdown.',
        'scheduled_at' => '',

        'templates' => [
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
        'name'             => '',
        'suffix'           => '',
        'description'      => '',
        'description-help' => '',
        'display-chart'    => '',
        'default-value'    => '',
        'calc_type'        => 'Calculation of metrics',
        'type_sum'         => 'Sum',
        'type_avg'         => 'Average',

        'points' => [
            'value' => '',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'         => 'Nome do site',
            'site-url'          => 'URL do site',
            'site-timezone'     => 'Fuso horário do site',
            'site-locale'       => 'Idioma do site',
            'date-format'       => 'Formato da Data',
            'display-graphs'    => '',
            'about-this-page'   => 'Sobre esta página',
            'days-of-incidents' => 'Quantos dias de incidentes para mostrar?',
            'banner'            => 'Imagem do banner',
            'banner-help'       => 'É recomendável que você faça upload de arquivos menores que 930px .',
            'google-analytics'  => 'Código do Google Analytics',
        ],
        'security' => [
            'allowed-domains'      => 'Domínios permitidos',
            'allowed-domains-help' => 'Separados por vírgula. O domínio definido acima é permitido automaticamente por padrão.',
        ],
        'stylesheet' => [
            'custom-css' => 'Folha de estilos personalizada',
        ],
        'theme' => [
            'background-color' => 'Cor de fundo',
            'text-color'       => 'Cor do Texto',
        ],
    ],

    'user' => [
        'username'       => 'Usuário',
        'email'          => 'Email',
        'password'       => 'Senha',
        'api-token'      => 'Token da API',
        'api-token-help' => 'Regenerar a chave da API impedirá que aplicativos existentes acessem o Cachet.',
        '2fa'            => [
            'help' => 'Ativando autenticação de dois fatores aumenta a segurança de sua conta. Você vai precisar baixar <a href="https://support.google.com/accounts/answer/1066447?hl=en"> Google Authenticator</a> ou um app similar em seu dispositivo móvel. Quando você entrar você será solicitado um token gerado pelo app.',
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
