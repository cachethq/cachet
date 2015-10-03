<?php

# modified at 03-10-2015 06:38

return  array(
	'components'      =>  array(
		'add'                  =>  array(
			'failure'              => 'Qualcosa è andato storto con il componente.',
			'message'              => 'Dovresti aggiungere un componente.',
			'success'              => 'Componente creato.',
			'title'                => 'Aggiungi un componente',
		),
		'component_statuses'   => 'Stato componenti',
		'components'           => 'Componenti',
		'edit'                 =>  array(
			'failure'              => 'Qualcosa è andato storto con il componente.',
			'success'              => 'Componente aggiornato.',
			'title'                => 'Modifica un componente',
		),
		'groups'               =>  array(
			'add'                  =>  array(
				'failure'              => 'Qualcosa è andato storto con il componente.',
				'success'              => 'Gruppo di componenti aggiunto.',
				'title'                => 'Aggiungi un gruppo di componenti',
			),
			'edit'                 =>  array(
				'failure'              => 'Qualcosa è andato storto con il componente.',
				'success'              => 'Gruppo di componenti aggiornato.',
				'title'                => 'Modifica un gruppo di componenti',
			),
			'groups'               => 'Gruppo di componenti|Gruppi di componenti',
			'no_components'        => 'Dovresti aggiungere un gruppo di componenti.',
		),
		'listed_group'         => 'Raggruppati sotto :name',
		'order'                =>  array(
			'success'              => 'Component orders updated.',
		),
	),
	'dashboard'       => 'Dashboard',
	'help'            => 'Aiuto',
	'incidents'       =>  array(
		'add'                        =>  array(
			'failure'                    => 'Qualcosa è andato storto con l\'incidente.',
			'success'                    => 'Incidente aggiunto.',
			'title'                      => 'Aggiungi un incidente',
		),
		'edit'                       =>  array(
			'failure'                    => 'Qualcosa è andato storto con l\'incidente.',
			'success'                    => 'Incidente aggiornato.',
			'title'                      => 'Modifica un incidente',
		),
		'incident-create-template'   => 'Crea modello',
		'incident-templates'         => 'Modelli incidente',
		'incidents'                  => 'Incidenti',
		'logged'                     => '{0} Non ci sono incidenti, ottimo lavoro!|Hai registrato un incidente.|Hai riportato <strong>:count</strong> incidenti.',
		'templates'                  =>  array(
			'add'                        =>  array(
				'failure'                    => 'Qualcosa è andato storto con il modello di incidente.',
				'success'                    => 'Modello creato.',
				'title'                      => 'Crea un modello di incidente',
			),
			'edit'                       =>  array(
				'failure'                    => 'Qualcosa è andato storto con il modello di incidente.',
				'success'                    => 'Il modello è stato aggiornato.',
				'title'                      => 'Modifica modello',
			),
			'title'                      => 'Modelli incidente',
		),
		'title'                      => 'Incidenti &amp; Pianificazione',
	),
	'login'           =>  array(
		'logged_in'       => 'Sei loggato.',
		'login'           => 'Accedi',
		'two-factor'      => 'Inserisci il tuo token.',
		'welcome'         => 'Ben tornato!',
	),
	'logout'          => 'Esci',
	'metrics'         =>  array(
		'add'             =>  array(
			'failure'         => 'Qualcosa è andato storto con la misurazione.',
			'success'         => 'Misurazione creata.',
			'title'           => 'Crea una misurazione',
		),
		'edit'            =>  array(
			'failure'         => 'Qualcosa è andato storto con la misurazione.',
			'success'         => 'Misurazione aggiornata.',
			'title'           => 'Modifica una misurazione',
		),
		'metrics'         => 'Misurazioni',
	),
	'notifications'   =>  array(
		'awesome'         => 'Fantastico.',
		'notifications'   => 'Notifiche',
		'whoops'          => 'Whoops.',
	),
	'schedule'        =>  array(
		'add'             =>  array(
			'failure'         => 'Qualcosa è andato storto con la pianificazione.',
			'success'         => 'Pianificazione aggiunta.',
			'title'           => 'Aggiungi Manutenzione programmata',
		),
		'delete'          =>  array(
			'failure'         => 'Non è stato possibile eliminare la pianificazione. Riprova.',
			'success'         => 'La pianificazione è stata eliminate e non verrà visualizzata nella Status Page.',
		),
		'edit'            =>  array(
			'failure'         => 'Qualcosa è andato storto con la pianificazione.',
			'success'         => 'La pianificazione è stata aggiornata.',
			'title'           => 'Modifica Manutenzione programmata',
		),
		'schedule'        => 'Manutenzione programmata',
		'scheduled_at'    => 'Pianificato alle :timestamp',
	),
	'settings'        =>  array(
		'app-setup'       =>  array(
			'app-setup'       => 'Configurazione applicazione',
			'images-only'     => 'Possono essere caricate solo immagini.',
			'too-big'         => 'Il file che hai caricato è troppo grande. Carica un\'immagine più piccola di :size',
		),
		'edit'            =>  array(
			'failure'         => 'Le impostazioni non possono essere salvate.',
			'success'         => 'Impostazioni salvate.',
		),
		'security'        =>  array(
			'security'        => 'Sicurezza',
			'two-factor'      => 'Utenti senza verifica in 2 passaggi',
		),
		'settings'        => 'Impostazioni',
		'stylesheet'      =>  array(
			'stylesheet'      => 'Foglio di stile',
		),
		'theme'           =>  array(
			'theme'           => 'Tema',
		),
	),
	'status_page'     => 'Status Page',
	'subscribers'     =>  array(
		'add'             =>  array(
			'failure'         => 'Qualcosa è andato storto con il componente.',
			'success'         => 'Iscrizione aggiunta.',
			'title'           => 'Aggiungi un nuovo iscritto',
		),
		'description'     => 'Gli iscritti riceveranno aggiornamenti via email quando verranno creati gli incidenti.',
		'edit'            =>  array(
			'failure'         => 'Qualcosa è andato storto durante l\'aggiornamento.',
			'success'         => 'Iscrizione aggiornata.',
			'title'           => 'Aggiorna iscritto',
		),
		'not_verified'    => 'Non Verificato',
		'subscribers'     => 'Iscritti',
		'verified'        => 'Verificato',
	),
	'team'            =>  array(
		'add'             =>  array(
			'failure'         => 'Qualcosa è andato storto con il componente.',
			'success'         => 'Membro del Team aggiunto.',
			'title'           => 'Aggiungi un nuovo membro del Team',
		),
		'description'     => 'I membri di un Team saranno in grado di aggiungere e modificare componenti e incidenti.',
		'edit'            =>  array(
			'failure'         => 'Qualcosa è andato storto durante l\'aggiornamento.',
			'success'         => 'Profilo aggiornato.',
			'title'           => 'Aggiorna profilo',
		),
		'member'          => 'Membro',
		'profile'         => 'Profilo',
		'team'            => 'Team',
	),
	'welcome'         =>  array(
		'close'           => 'Vai alla dashboard',
		'message'         => 'La tua Status Page è quasi pronta! Potresti voler configurare queste impostazioni aggiuntive',
		'steps'           =>  array(
			'api'             => 'Genera un API Token',
			'component'       => 'Crea componenti',
			'customize'       => 'Personalizza',
			'incident'        => 'Crea incidenti',
			'team'            => 'Aggiungi utenti',
			'two-factor'      => 'Verifica in 2 passaggi',
		),
		'welcome'         => 'Benvenuto in Cachet',
	),
);
