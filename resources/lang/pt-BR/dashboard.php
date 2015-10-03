<?php

# modified at 03-10-2015 06:38

return  array(
	'components'      =>  array(
		'add'                  =>  array(
			'failure'              => 'Algo deu errado com o componente.',
			'message'              => 'Você deve adicionar um componente.',
			'success'              => 'Componente criado.',
			'title'                => 'Adicionar componente',
		),
		'component_statuses'   => 'Status do componente',
		'components'           => 'Componentes',
		'edit'                 =>  array(
			'failure'              => 'Algo deu errado com a atualização do componente.',
			'success'              => 'Componente atualizado.',
			'title'                => 'Editar componente',
		),
		'groups'               =>  array(
			'add'                  =>  array(
				'failure'              => 'Algo deu errado com o grupo de componente.',
				'success'              => 'Grupo de componente adicionado.',
				'title'                => 'Adicionar um grupo de componentes',
			),
			'edit'                 =>  array(
				'failure'              => 'Algo deu errado com a atualização do grupo de componentes.',
				'success'              => 'Grupo de compoenentes atualizado.',
				'title'                => 'Editar grupo de componentes',
			),
			'groups'               => 'Grupo de componente|Grupos de componente',
			'no_components'        => 'Você deve adicionar um grupo de componentes.',
		),
		'listed_group'         => 'Agrupados por :name',
		'order'                =>  array(
			'success'              => 'Component orders updated.',
		),
	),
	'dashboard'       => 'Dashboard',
	'help'            => 'Ajuda',
	'incidents'       =>  array(
		'add'                        =>  array(
			'failure'                    => 'Algo deu errado com o incidente.',
			'success'                    => 'Incidente adicionado.',
			'title'                      => 'Adicionar um incidente',
		),
		'edit'                       =>  array(
			'failure'                    => 'Algo deu errado com o incidente.',
			'success'                    => 'Incidente atualizado.',
			'title'                      => 'Editar incidente',
		),
		'incident-create-template'   => 'Criar template',
		'incident-templates'         => 'Template de incidentes',
		'incidents'                  => 'Incidentes',
		'logged'                     => '{0} Não existem incidentes, bom trabalho.|Você registrou um incidente.|Você reportou <strong>:count</strong> incidentes.',
		'templates'                  =>  array(
			'add'                        =>  array(
				'failure'                    => 'Algo deu errado com o template de incidente.',
				'success'                    => 'Template criado.',
				'title'                      => 'Criar um template de incidente',
			),
			'edit'                       =>  array(
				'failure'                    => 'Algo deu errado ao atualizar o template de incidente',
				'success'                    => 'Template foi atualizado!',
				'title'                      => 'Editar template',
			),
			'title'                      => 'Template de incidentes',
		),
		'title'                      => 'Incidentes &amp; Agendamentos',
	),
	'login'           =>  array(
		'logged_in'       => 'Você está logado.',
		'login'           => 'Login',
		'two-factor'      => 'Por favor insira o seu token.',
		'welcome'         => 'Bem-vindo de volta!',
	),
	'logout'          => 'Sair',
	'metrics'         =>  array(
		'add'             =>  array(
			'failure'         => 'Algo deu errado ao criar a métrica.',
			'success'         => 'Métrica criada.',
			'title'           => 'Criar uma métrica',
		),
		'edit'            =>  array(
			'failure'         => 'Algo deu errado ao atualizar a métrica.',
			'success'         => 'Métrica atualizada.',
			'title'           => 'Editar métrica',
		),
		'metrics'         => 'Métricas',
	),
	'notifications'   =>  array(
		'awesome'         => 'Excelente.',
		'notifications'   => 'Notificações',
		'whoops'          => 'Ops.',
	),
	'schedule'        =>  array(
		'add'             =>  array(
			'failure'         => 'Algo deu errado com o agendamento.',
			'success'         => 'Agendamento atualizado com sucesso!',
			'title'           => 'Adicionar manutenção agendada',
		),
		'delete'          =>  array(
			'failure'         => 'O agendamento não pode ser excluído. Por favor, tente novamente.',
			'success'         => 'O agendamento foi excluído e não será exibido na página de status.',
		),
		'edit'            =>  array(
			'failure'         => 'Algo deu errado com a atualização do agendamento.',
			'success'         => 'Agendamento atualizado com sucesso!',
			'title'           => 'Editar manutenção agendada',
		),
		'schedule'        => 'Manutenção Agendada',
		'scheduled_at'    => 'Manutenção agendada em :timestamp ',
	),
	'settings'        =>  array(
		'app-setup'       =>  array(
			'app-setup'       => 'Instalação do aplicativo',
			'images-only'     => 'Somente imagens podem ser carregadas.',
			'too-big'         => 'O arquivo que você carregou é muito grande. Envie uma imagem inferior à :size',
		),
		'edit'            =>  array(
			'failure'         => 'Não foi possível salvar as configurações.',
			'success'         => 'Configurações salvas.',
		),
		'security'        =>  array(
			'security'        => 'Segurança',
		),
		'settings'        => 'Configurações',
		'stylesheet'      =>  array(
			'stylesheet'      => 'Folha de estilo',
		),
		'theme'           =>  array(
			'theme'           => 'Tema',
		),
	),
	'status_page'     => 'Página de status',
	'subscribers'     =>  array(
		'add'             =>  array(
			'failure'         => 'Algo deu errado ao adicionar o assinate.',
			'success'         => 'Assinante adicionado',
			'title'           => 'Adicionar novo assinante',
		),
		'description'     => 'Os assinantes receberão um alerta quando os incidentes forem criados.',
		'edit'            =>  array(
			'failure'         => 'Algo deu errado ao atualizar o assinante.',
			'success'         => 'Assinante atualizado.',
			'title'           => 'Editar assinante',
		),
		'not_verified'    => 'Não verificado',
		'subscribers'     => 'Assinantes',
		'verified'        => 'Verificado',
	),
	'team'            =>  array(
		'add'             =>  array(
			'failure'         => 'Algo deu errado com o componente.',
			'success'         => 'Membro da equipe adicionado.',
			'title'           => 'Adicionar um novo membro da equipe',
		),
		'delete'          =>  array(
			'failure'         => 'Algo deu errado ao excluir o perfil.',
			'success'         => 'Perfil excluído',
		),
		'description'     => 'Membros da equipe serão capazes de adicionar, modificar &amp; editar componentes e incidentes.',
		'edit'            =>  array(
			'failure'         => 'Algo deu errado duante a atualização.',
			'success'         => 'Perfil atualizado.',
			'title'           => 'Editar perfil',
		),
		'member'          => 'Membro',
		'profile'         => 'Perfil',
		'team'            => 'Equipe',
	),
	'welcome'         =>  array(
		'close'           => 'Basta ir direto para o meu painel de controle',
		'message'         => 'Sua página de status está quase pronta! Tavez você queira checar essas configurações extras',
		'steps'           =>  array(
			'api'             => 'Gerar token de API',
			'component'       => 'Criar componentes',
			'customize'       => 'Personalizar',
			'incident'        => 'Criar incidentes',
			'team'            => 'Adicionar usuários',
			'two-factor'      => 'Autneticação em 2 passos',
		),
		'welcome'         => 'Bem-vindo ao Cachet',
	),
);
