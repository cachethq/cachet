<?php

# modified at 03-10-2015 06:38

return  array(
	'components'      =>  array(
		'add'                  =>  array(
			'failure'              => 'Une erreur est survenue avec le composant.',
			'message'              => 'Vous devez ajouter un composant.',
			'success'              => 'Composant créé.',
			'title'                => 'Ajouter un composant',
		),
		'component_statuses'   => 'Statuts des composant',
		'components'           => 'Composants',
		'edit'                 =>  array(
			'failure'              => 'Une erreur est survenue avec le composant.',
			'success'              => 'Composant mis à jour.',
			'title'                => 'Modifier un composant',
		),
		'groups'               =>  array(
			'add'                  =>  array(
				'failure'              => 'Une erreur est survenue avec le groupe de composants.',
				'success'              => 'Groupe composant ajouté.',
				'title'                => 'Ajouter un groupe de composants',
			),
			'edit'                 =>  array(
				'failure'              => 'Un problème est survenu avec le groupe de composants.',
				'success'              => 'Groupe de composants mis à jour.',
				'title'                => 'Modifier un groupe de composants',
			),
			'groups'               => 'Groupes de composants',
			'no_components'        => 'Vous devez ajouter un groupe de composants.',
		),
		'listed_group'         => 'Groupés dans : nom',
		'order'                =>  array(
			'success'              => 'L\'ordre des composants a été mis à jour.',
		),
	),
	'dashboard'       => 'Tableau de bord',
	'help'            => 'Aide',
	'incidents'       =>  array(
		'add'                        =>  array(
			'failure'                    => 'Quelque chose n\'allait pas avec l\'incident.',
			'success'                    => 'Incident ajouté.',
			'title'                      => 'Ajouter un incident',
		),
		'edit'                       =>  array(
			'failure'                    => 'Une erreur est survenue avec l\'incident.',
			'success'                    => 'Incident mis à jour.',
			'title'                      => 'Modifier un incident',
		),
		'incident-create-template'   => 'Créer un modèle',
		'incident-templates'         => 'Modèles d\'incident',
		'incidents'                  => 'Incidents',
		'logged'                     => '{0} Aucun incident, bon travail.|Vous avez un incident signalé.|Vous avez  <strong>:count</strong> incidents signalés.',
		'templates'                  =>  array(
			'add'                        =>  array(
				'failure'                    => 'Une erreur est survenue avec le modèle d\'incident.',
				'success'                    => 'Modèle créé.',
				'title'                      => 'Créer un modèle d\'incident',
			),
			'edit'                       =>  array(
				'failure'                    => 'Une erreur est survenue avec la mise à jour le modèle d\'incident',
				'success'                    => 'Le modèle a été mis à jour !',
				'title'                      => 'Editer le Template',
			),
			'title'                      => 'Modèles d\'incident',
		),
		'title'                      => 'Incidents &amp; Planification',
	),
	'login'           =>  array(
		'logged_in'       => 'Vous êtes connecté.',
		'login'           => 'Identifiez-vous',
		'two-factor'      => 'Entrez votre jeton, s\'il vous plait.',
		'welcome'         => 'Re-bonjour !',
	),
	'logout'          => 'Se déconnecter',
	'metrics'         =>  array(
		'add'             =>  array(
			'failure'         => 'Un problème est survenu avec cet indicateur.',
			'success'         => 'Métrique créé.',
			'title'           => 'Créer un indicateur',
		),
		'edit'            =>  array(
			'failure'         => 'Un problème est survenu avec cet indicateur.',
			'success'         => 'Indicateur mise à jour.',
			'title'           => 'Modifier un indicateur',
		),
		'metrics'         => 'Métriques',
	),
	'notifications'   =>  array(
		'awesome'         => 'Fantastique.',
		'notifications'   => 'Notifications',
		'whoops'          => 'Oups.',
	),
	'schedule'        =>  array(
		'add'             =>  array(
			'failure'         => 'Une erreur est survenue lors de l\'ajout de la planification.',
			'success'         => 'Planification ajoutée.',
			'title'           => 'Ajouter une maintenance planifiée',
		),
		'delete'          =>  array(
			'failure'         => 'Cette planification n\'a pas pu être supprimée. Veuillez réessayer.',
			'success'         => 'Cette planification a été supprimée et ne sera pas affichée sur votre page de statut.',
		),
		'edit'            =>  array(
			'failure'         => 'Une erreur est survenue lors de l\'édition de la planification.',
			'success'         => 'La planification a été mise à jour !',
			'title'           => 'Modifier la maintenance planifiée',
		),
		'schedule'        => 'Maintenance planifiée',
		'scheduled_at'    => 'Planifiée à :timestamp',
	),
	'settings'        =>  array(
		'app-setup'       =>  array(
			'app-setup'       => 'Configuration de l\'application',
			'images-only'     => 'Seules les images peuvent être déposées.',
			'too-big'         => 'Le fichier déposé est trop grand. Déposer une image d\'une taille inférieur à :size',
		),
		'edit'            =>  array(
			'failure'         => 'Les paramètres ne peuvent pas être sauvegardés.',
			'success'         => 'Paramètres sauvegardés.',
		),
		'security'        =>  array(
			'security'        => 'Sécurité',
			'two-factor'      => 'Utilisateurs sans authentification à deux facteurs',
		),
		'settings'        => 'Paramètres',
		'stylesheet'      =>  array(
			'stylesheet'      => 'Feuille de style',
		),
		'theme'           =>  array(
			'theme'           => ' Thème',
		),
	),
	'status_page'     => 'État des services',
	'subscribers'     =>  array(
		'add'             =>  array(
			'failure'         => 'Une erreur est survenue avec le composant.',
			'success'         => '',
			'title'           => '',
		),
		'description'     => '',
		'edit'            =>  array(
			'failure'         => 'Une erreur est survenue lors de l\'actualisation.',
			'success'         => '',
			'title'           => '',
		),
		'not_verified'    => '',
		'subscribers'     => '',
		'verified'        => '',
	),
	'team'            =>  array(
		'add'             =>  array(
			'failure'         => 'Une erreur est survenue avec le composant.',
			'success'         => 'Membre de l\'équipe a ajouté.',
			'title'           => 'Ajouter un nouveau membre de l\'équipe',
		),
		'delete'          =>  array(
			'failure'         => '',
			'success'         => '',
		),
		'description'     => 'Membres de l\'équipe sera en mesure d\'ajouter, de modifier et de modifier les composants et les incidents.',
		'edit'            =>  array(
			'failure'         => 'Une erreur est survenue lors de l\'actualisation.',
			'success'         => 'Profil mis à jour.',
			'title'           => 'Mettre le Profil à Jour',
		),
		'member'          => 'Utilisateur',
		'profile'         => 'Profil utilisateur',
		'team'            => 'Equipe',
	),
	'welcome'         =>  array(
		'close'           => 'Il suffit d\'aller directement à mon tableau de bord',
		'message'         => 'Votre page de statut est presque prêt ! Vous pouvez configurer ces paramètres supplémentaires',
		'steps'           =>  array(
			'api'             => 'Générer un jeton pour l\'API',
			'component'       => 'Créer des composants',
			'customize'       => 'Personnaliser',
			'incident'        => 'Créer des incidents',
			'team'            => 'Ajouter des utilisateurs',
			'two-factor'      => 'Authentification à deux facteurs',
		),
		'welcome'         => 'Bienvenue sur Cachet',
	),
);
