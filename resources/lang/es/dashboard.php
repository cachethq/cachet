<?php

# modified at 03-10-2015 06:38

return  array(
	'components'      =>  array(
		'add'                  =>  array(
			'failure'              => 'Algo salió mal con el componente.',
			'message'              => 'Deberías agregar un componente.',
			'success'              => 'Componente creado.',
			'title'                => 'Agregar un componente',
		),
		'component_statuses'   => 'Estatus de los componentes',
		'components'           => 'Componentes',
		'edit'                 =>  array(
			'failure'              => 'Algo salió mal con el componente.',
			'success'              => 'Componente actualizado.',
			'title'                => 'Editar un componente',
		),
		'groups'               =>  array(
			'add'                  =>  array(
				'failure'              => 'Algo salió mal con el grupo del componente.',
				'success'              => 'Grupo componente agregado.',
				'title'                => 'Agregar un grupo',
			),
			'edit'                 =>  array(
				'failure'              => 'Algo salió mal con el grupo de componentes.',
				'success'              => 'Grupo de componentes actualizado.',
				'title'                => 'Editar un grupo de componentes',
			),
			'groups'               => 'Grupo de componente|Grupos de componente',
			'no_components'        => 'Deberías añadir un grupo de componentes.',
		),
		'order'                =>  array(
			'success'              => 'Component orders updated.',
		),
	),
	'dashboard'       => 'Panel de Control',
	'help'            => 'Ayuda',
	'incidents'       =>  array(
		'add'                        =>  array(
			'failure'                    => 'Algo salió mal con el incidente.',
			'success'                    => 'Incidente agregado.',
			'title'                      => 'Agregar un incidente',
		),
		'edit'                       =>  array(
			'failure'                    => 'Algo salió mal con el incidente.',
			'success'                    => 'Incidente actualizado.',
			'title'                      => 'Editar un incidente',
		),
		'incident-create-template'   => 'Crear plantilla',
		'incident-templates'         => 'Plantillas de incidente',
		'incidents'                  => 'Incidentes',
		'logged'                     => '{0} No hay incidentes, ¡buen trabajo!|Has registrado un incidente.|Has reportado <strong>:count</strong> incidentes.',
		'templates'                  =>  array(
			'add'                        =>  array(
				'failure'                    => 'Algo salió mal con la plantilla de incidente.',
				'success'                    => 'Plantilla creada.',
				'title'                      => 'Crear una plantilla de incidente',
			),
			'edit'                       =>  array(
				'failure'                    => 'Algo salió mal actualizar la plantilla de incidente',
				'success'                    => '¡Se ha actualizado la plantilla!',
				'title'                      => 'Editar plantilla',
			),
			'title'                      => 'Plantillas de incidente',
		),
	),
	'login'           =>  array(
		'logged_in'       => 'Estás conectado.',
		'login'           => 'Iniciar Sesión',
		'two-factor'      => 'Por favor ingresa tu token.',
		'welcome'         => '¡Bienvenido!',
	),
	'logout'          => 'Salir',
	'metrics'         =>  array(
		'add'             =>  array(
			'failure'         => 'Algo salió mal con la métrica.',
			'success'         => 'Métrica creada.',
			'title'           => 'Crear una métrica',
		),
		'metrics'         => 'Métricas',
	),
	'notifications'   =>  array(
		'awesome'         => 'Excelente.',
		'notifications'   => 'Notificaciones',
		'whoops'          => 'Ups.',
	),
	'settings'        =>  array(
		'app-setup'       =>  array(
			'app-setup'       => 'Configuración',
			'images-only'     => 'Sólo puedes subir imágenes.',
			'too-big'         => 'El archivo subido es demasiado grande. Sube una imagen con tamaño menor a: tamaño',
		),
		'edit'            =>  array(
			'failure'         => 'La configuración no ha podido ser guardada.',
			'success'         => 'Configuración guardada.',
		),
		'security'        =>  array(
			'security'        => 'Seguridad',
		),
		'settings'        => 'Ajustes',
		'stylesheet'      =>  array(
			'stylesheet'      => 'Hoja de estilo',
		),
		'theme'           =>  array(
			'theme'           => 'Tema',
		),
	),
	'status_page'     => 'Página de estado',
	'team'            =>  array(
		'add'             =>  array(
			'failure'         => 'Algo salió mal con el componente.',
			'success'         => 'Miembro del equipo agregado.',
			'title'           => 'Agregar miembro de equipo',
		),
		'description'     => 'Los miembros del equipo será capaces de añadir, modificar y editar componentes e incidentes.',
		'edit'            =>  array(
			'failure'         => 'Algo salió mal al actualizar.',
			'success'         => 'Perfil actualizado.',
			'title'           => 'Actualizar perfil',
		),
		'member'          => 'Miembro',
		'profile'         => 'Perfil',
		'team'            => 'Equipo',
	),
	'welcome'         =>  array(
		'close'           => 'Ir directo al Panel de Control',
		'message'         => '¡La página de estado está casi lista! Tal vez quieras configurar estos ajustes adicionales',
		'steps'           =>  array(
			'api'             => 'Generar token API.',
			'component'       => 'Crear componentes',
			'customize'       => 'Personaliza tu página de estado Cachet.',
			'incident'        => 'Crear incidentes',
			'team'            => 'Agregar usuarios a tu equipo.',
			'two-factor'      => 'Habilitar autenticación de dos pasos.',
		),
		'welcome'         => 'Bienvenido a Cachet',
	),
);
