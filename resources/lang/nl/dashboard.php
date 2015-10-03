<?php

# modified at 03-10-2015 06:38

return  array(
	'components'      =>  array(
		'add'                  =>  array(
			'failure'              => 'Er ging iets mis met het onderdeel.',
			'message'              => 'Gelieve een onderdeel toe te voegen.',
			'success'              => 'Onderdeel aangemaakt.',
			'title'                => 'Voeg een onderdeel toe',
		),
		'component_statuses'   => 'Onderdeel statussen',
		'components'           => 'Componenten',
		'edit'                 =>  array(
			'failure'              => 'Er ging iets mis met het onderdeel.',
			'success'              => 'Onderdeel bijgewerkt.',
			'title'                => 'Een onderdeel bewerken',
		),
		'groups'               =>  array(
			'add'                  =>  array(
				'failure'              => 'Er ging iets mis met de onderdeel groep.',
				'success'              => 'Onderdeel groep toegevoegd.',
				'title'                => 'Componentgroep toevoegen',
			),
			'edit'                 =>  array(
				'failure'              => 'Er ging iets mis met de componentgroep.',
				'success'              => 'Componentgroep bijgewerkt.',
				'title'                => 'Componentgroep bewerken',
			),
			'groups'               => 'Onderdeel groep|Onderdeel groepen',
			'no_components'        => 'U moet een componentgroep toevoegen.',
		),
		'listed_group'         => 'Gegroepeerd onder :name',
		'order'                =>  array(
			'success'              => 'Component orders updated.',
		),
	),
	'dashboard'       => 'Dashboard',
	'help'            => 'Help',
	'incidents'       =>  array(
		'add'                        =>  array(
			'failure'                    => 'Er ging iets mis met het incident.',
			'success'                    => 'Incident toegevoegd.',
			'title'                      => 'Incident toevoegen',
		),
		'edit'                       =>  array(
			'failure'                    => 'Er ging iets mis met het incident.',
			'success'                    => 'Incident bijgewerkt.',
			'title'                      => 'Wijzig een incident',
		),
		'incident-create-template'   => 'Maak template',
		'incident-templates'         => 'Incident Sjablonen',
		'incidents'                  => 'Incidenten',
		'logged'                     => '{0} Proficiat, er zijn geen incidenten.|Er heeft zich één incident voorgedaan.|Er zijn <strong>:count</strong> incidenten gerapporteerd.',
		'templates'                  =>  array(
			'add'                        =>  array(
				'failure'                    => 'Er ging iets mis met het incident sjabloon.',
				'success'                    => 'Sjabloon aangemaakt.',
				'title'                      => 'Een incident sjabloon maken',
			),
			'edit'                       =>  array(
				'failure'                    => 'Er ging iets mis bij het bijwerken van het sjabloon',
				'success'                    => 'Sjabloon is bijgewerkt!',
				'title'                      => 'Bewerk sjabloon',
			),
			'title'                      => 'Incident Sjablonen',
		),
		'title'                      => 'Incidenten &amp; planning',
	),
	'login'           =>  array(
		'logged_in'       => 'U bent ingelogd.',
		'login'           => 'Login',
		'two-factor'      => 'Voer uw token in.',
		'welcome'         => 'Welkom Terug!',
	),
	'logout'          => 'Uitloggen',
	'metrics'         =>  array(
		'add'             =>  array(
			'failure'         => 'Er ging iets mis met de meting.',
			'success'         => 'Meting aangemaakt.',
			'title'           => 'Meting aanmaken',
		),
		'edit'            =>  array(
			'failure'         => 'Er ging iets mis met de meting.',
			'success'         => 'Meting bijgewerkt.',
			'title'           => 'Meting bewerken',
		),
		'metrics'         => 'Statistieken',
	),
	'notifications'   =>  array(
		'awesome'         => 'Geweldig.',
		'notifications'   => 'Notificaties',
		'whoops'          => 'Oepsie.',
	),
	'schedule'        =>  array(
		'add'             =>  array(
			'failure'         => 'Er ging iets mis bij het toevoegen van de planning.',
			'success'         => 'Planning toegevoegd.',
			'title'           => 'Gepland onderhoud toevoegen',
		),
		'delete'          =>  array(
			'failure'         => 'De planning kon niet worden verwijderd. Probeer het nogmaals.',
			'success'         => 'De planning is verwijderd en zal niet worden getoond op je statuspagina.',
		),
		'edit'            =>  array(
			'failure'         => 'Er ging iets mis bij het bewerken van de planning.',
			'success'         => 'Planning is bijgewerkt!',
			'title'           => 'Gepland onderhoud bewerken',
		),
		'schedule'        => 'Gepland onderhoud',
		'scheduled_at'    => 'Gepland op :timestamp',
	),
	'settings'        =>  array(
		'app-setup'       =>  array(
			'app-setup'       => 'Applicatie Installatie',
			'images-only'     => 'Alleen afbeeldingen kunnen worden geüpload.',
			'too-big'         => 'Het bestand dat u heeft geüpload is te groot. Upload een afbeelding kleiner dan :size',
		),
		'edit'            =>  array(
			'failure'         => 'Instellingen kunnen niet worden opgeslagen.',
			'success'         => 'Instellingen bewaard.',
		),
		'security'        =>  array(
			'security'        => 'Beveiliging',
			'two-factor'      => 'Gebruikers zonder authenticatie in twee stappen',
		),
		'settings'        => 'Instellingen',
		'stylesheet'      =>  array(
			'stylesheet'      => 'Stylesheet',
		),
		'theme'           =>  array(
			'theme'           => 'Thema',
		),
	),
	'status_page'     => 'Status Pagina',
	'subscribers'     =>  array(
		'add'             =>  array(
			'failure'         => '',
			'success'         => '',
			'title'           => '',
		),
		'description'     => '',
		'edit'            =>  array(
			'failure'         => '',
			'success'         => '',
			'title'           => '',
		),
		'not_verified'    => '',
		'subscribers'     => '',
		'verified'        => '',
	),
	'team'            =>  array(
		'add'             =>  array(
			'failure'         => 'Er ging iets mis met het onderdeel.',
			'success'         => 'Teamlid toegevoegd.',
			'title'           => 'Voeg een nieuw teamlid toe',
		),
		'delete'          =>  array(
			'failure'         => '',
			'success'         => '',
		),
		'description'     => 'Teamleden zullen onderdelen en incidenten kunnen aanpassen &amp; toevoegen.',
		'edit'            =>  array(
			'failure'         => 'Er ging iets mis tijdens het bijwerken.',
			'success'         => 'Profiel bijgewerkt.',
			'title'           => 'Profiel bijwerken',
		),
		'member'          => 'Lid',
		'profile'         => 'Profiel',
		'team'            => 'Team',
	),
	'welcome'         =>  array(
		'close'           => 'Ga direct naar mijn dashboard',
		'message'         => 'Uw statuspagina is bijna klaar! U kunt deze extra instellingen configureren',
		'steps'           =>  array(
			'api'             => 'API-token genereren',
			'component'       => 'Onderdelen maken',
			'customize'       => 'Aanpassen',
			'incident'        => 'Incidenten aanmaken',
			'team'            => 'Gebruikers toevoegen',
			'two-factor'      => 'Authenticatie in twee stappen',
		),
		'welcome'         => 'Welkom bij Cachet',
	),
);
