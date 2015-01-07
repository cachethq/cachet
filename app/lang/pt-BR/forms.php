<?php

return [
    // Setup form fields
    'setup' => [
        'email'          => 'Email',
        'username'       => 'Usuário',
        'password'       => 'Senha',
        'site_name'      => 'Nome do site',
        'site_domain'    => 'Domínio do site',
        'site_timezone'  => 'Select your timezone',
        'site_locale'    => 'Select your language',
    ],

    // Login form fields
    'login' => [
        'email'    => 'Email',
        'password' => 'Senha',
    ],

    // Incidents form fields
    'incidents' => [
        'name'         => 'Nome',
        'status'       => 'Status',
        'message'      => 'Mensagem',
        'message-help' => 'Você também pode usar o Markdown.',

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

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'         => 'Nome do site',
            'site-url'          => 'URL do site',
            'site-timezone'     => 'Site Timezone',
            'site-locale'       => 'Site Language',
            'about-this-page'   => 'Sobre esta página',
            'days-of-incidents' => 'Quantos dias de incidentes para mostrar?',
            'banner'            => 'Imagem do banner',
            'banner-help'       => "É recomendável que você fazer upload de arquivos menores que 930px.",
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
        'username'     => 'Usuário',
        'email'        => 'Email',
        'password'     => 'Senha',
        'api-key'      => 'Chave da API',
        'api-key-help' => 'Regenerar sua chave de API irá revogar todos os aplicativos existentes.',
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
    'remove' => 'Remover'
];
