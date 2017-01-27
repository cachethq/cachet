<?php

return [
    // Components
    'component' => [
        'status' => [
            1 => 'Operacional',
            2 => 'Problemas de Perfomance',
            3 => 'Indisponibilidade Parcial',
            4 => 'Falha Grave',
        ],
    ],
    // Incidents
    'incident' => [
        'status' => [
            1 => 'Investigando',
            2 => 'Identificado',
            3 => 'Monitorando',
            4 => 'Corrigido',
        ],
        'none' => 'Nada a reportar',
    ],
    // Service Status
    'service' => [
        'good' => 'Todos os sistemas estão funcionais.',
        'bad'  => 'Alguns sistemas estão passando por problemas.',
    ],
    // Other
    'powered_by'     => ':app Página de status rodando com o <a href="https://cachethq.github.io">Cachet</a>.',
    'login_message'  => 'Bem vindo novamente!',
    'login'          => 'Entrar',
    'logout'         => 'Sair',
    'logged_in'      => 'Você está logado.',
    'setup'          => 'Instalação do Cachet',
    'no_incidents'   => 'Nenhum incidente reportado.',
    'dashboard'      => [
        'dashboard'                => 'Painel de Controle',
        'components'               => 'Componentes',
        'component-add'            => 'Adicionar Componente',
        'incidents'                => 'Incidente',
        'incident-add'             => 'Adicionar Incidente',
        'incident-create-template' => 'Criar Modelo',
        'metrics'                  => 'Métricas',
        'metrics-add'              => 'Adicionar Ponto de métrica',
        'status_page'              => 'Página de Status',
        'settings'                 => 'Configurações',
        'notifications'            => 'Notificações',
        'toggle_navigation'        => 'Alternar Navegação',
        'search'                   => 'Buscar...',
        'user'                     => 'Usuário',
        'help'                     => 'Ajuda',
    ],
    // Forms
    'forms' => [
        'email'    => 'Email',
        'password' => 'Senha',
        // Setup Form
        'setup' => [
            'service_details'   => 'Detalhes do Serviço',
            'status_page_setup' => 'Instalação da Página de Status',
            'site_name'         => 'Nome do Site',
            'site_domain'       => 'Domínio do Site',
            'show_support'      => 'Mostrar apoio para o Cachet?',
            'admin_account'     => 'Conta do Administrador',
            'admin_username'    => 'Nome do Usuário',
            'finish_setup'      => 'Completar Instalação',
        ],
    ],
];
