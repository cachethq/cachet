<?php

# modified at 03-10-2015 06:38

return  array(
	'components'      =>  array(
		'add'                  =>  array(
			'failure'              => 'Beim Erstellen der Komponente ist etwas schiefgegangen.',
			'message'              => 'Sie sollten eine Komponente erstellen.',
			'success'              => 'Komponente erstellt.',
			'title'                => 'Komponente hinzufügen',
		),
		'component_statuses'   => 'Komponentenstatus',
		'components'           => 'Komponenten',
		'edit'                 =>  array(
			'failure'              => 'Mit der Komponente ist etwas schiefgegangen.',
			'success'              => 'Komponente aktualisiert.',
			'title'                => 'Komponente bearbeiten',
		),
		'groups'               =>  array(
			'add'                  =>  array(
				'failure'              => 'Mit der Komponentengruppe ist etwas schiefgegangen.',
				'success'              => 'Komponentengruppe hinzugefügt.',
				'title'                => 'Eine Komponentengruppe hinzufügen',
			),
			'edit'                 =>  array(
				'failure'              => 'Mit der Komponentengruppe ist etwas schiefgegangen.',
				'success'              => 'Komponentengruppe aktualisiert.',
				'title'                => 'Komponentengruppe bearbeiten',
			),
			'groups'               => 'Komponentgruppe|Komponentgruppen',
			'no_components'        => 'Sie sollten eine Komponentengruppe hinzufügen.',
		),
		'listed_group'         => 'Gruppiert unter :name',
		'order'                =>  array(
			'success'              => 'Component orders updated.',
		),
	),
	'dashboard'       => 'Dashboard',
	'help'            => 'Hilfe',
	'incidents'       =>  array(
		'add'                        =>  array(
			'failure'                    => 'Etwas ist mit dem Vorfall schiefgelaufen.',
			'success'                    => 'Vorfall hinzugefügt.',
			'title'                      => 'Vorfall hinzufügen',
		),
		'edit'                       =>  array(
			'failure'                    => 'Etwas ist mit dem Vorfall schiefgelaufen.',
			'success'                    => 'Vorfall aktualisiert.',
			'title'                      => 'Vorfall bearbeiten',
		),
		'incident-create-template'   => 'Vorlage erstellen',
		'incident-templates'         => 'Vorfall Vorlagen',
		'incidents'                  => 'Vorfälle',
		'logged'                     => '{0} Es gibt keine Vorfälle, gute Arbeit.|Du hast einen Vorfall gemeldet.|Du hast <strong>:count</strong> Vorfälle gemeldet.',
		'templates'                  =>  array(
			'add'                        =>  array(
				'failure'                    => 'Etwas ist mit der Vorfallvorlage schiefgelaufen.',
				'success'                    => 'Vorlage erstellt.',
				'title'                      => 'Vorfallvorlage erstellen',
			),
			'edit'                       =>  array(
				'failure'                    => 'Etwas ist mit dem Updaten der Vorfallvorlage schiefgelaufen',
				'success'                    => 'Vorlage aktualisiert!',
				'title'                      => 'Vorlage bearbeiten',
			),
			'title'                      => 'Vorfall Vorlagen',
		),
		'title'                      => 'Ereignisse &amp; Termine',
	),
	'login'           =>  array(
		'logged_in'       => 'Sie sind angemeldet.',
		'login'           => 'Anmelden',
		'two-factor'      => 'Bitte geben Sie Ihren Token ein.',
		'welcome'         => 'Willkommen zurück!',
	),
	'logout'          => 'Abmelden',
	'metrics'         =>  array(
		'add'             =>  array(
			'failure'         => 'Mit der Metrik ist etwas schiefgegangen.',
			'success'         => 'Metrik erstellt.',
			'title'           => 'Metrik erstellen',
		),
		'edit'            =>  array(
			'failure'         => 'Mit der Metrik ist etwas schiefgegangen.',
			'success'         => 'Metrik aktualisiert.',
			'title'           => 'Metrik bearbeiten',
		),
		'metrics'         => 'Metriken',
	),
	'notifications'   =>  array(
		'awesome'         => 'Großartig.',
		'notifications'   => 'Benachrichtigungen',
		'whoops'          => 'Hoppla.',
	),
	'schedule'        =>  array(
		'add'             =>  array(
			'failure'         => 'Etwas ist mit dem hinzufügen des Zeitplanes schiefgelaufen.',
			'success'         => 'Zeitplan hinzugefügt.',
			'title'           => 'Planmäßige Wartung hinzufügen',
		),
		'delete'          =>  array(
			'failure'         => 'Der Zeitplan konnte nicht gelöscht werden. Bitte versuchen Sie es erneut.',
			'success'         => 'Der Zeitplan wurde gelöscht und wird nicht auf Ihrer Statusseite angezeigt.',
		),
		'edit'            =>  array(
			'failure'         => 'Etwas ist mit dem Bearbeiten des Zeitplanes schiefgelaufen.',
			'success'         => 'Zeitplan wurde aktualisiert!',
			'title'           => 'Planmäßige Wartung bearbeiten',
		),
		'schedule'        => 'Planmäßige Wartung',
		'scheduled_at'    => 'Geplant am :timestamp',
	),
	'settings'        =>  array(
		'app-setup'       =>  array(
			'app-setup'       => 'Anwendungsinstallation',
			'images-only'     => 'Es können nur Bilder hochgeladen werden.',
			'too-big'         => 'Die von Ihnen hochgeladene Datei ist zu groß. Laden Sie ein Bild welches kleiner als :size ist hoch',
		),
		'edit'            =>  array(
			'failure'         => 'Einstellungen konnten nicht gespeichert werden.',
			'success'         => 'Einstellungen gespeichert.',
		),
		'security'        =>  array(
			'security'        => 'Sicherheit',
			'two-factor'      => 'Nutzer ohne Zwei-Faktor-Authentifizierung',
		),
		'settings'        => 'Einstellungen',
		'stylesheet'      =>  array(
			'stylesheet'      => 'Stylesheet',
		),
		'theme'           =>  array(
			'theme'           => 'Theme',
		),
	),
	'status_page'     => 'Statusseite',
	'subscribers'     =>  array(
		'add'             =>  array(
			'failure'         => 'Mit der Komponente ist etwas schiefgegangen.',
			'success'         => 'Abonnent hinzugefügt.',
			'title'           => 'Einen neuen Abonnenten hinzufügen',
		),
		'description'     => 'Abonnenten erhalten E-Mail Updates wenn Vorfälle erstellt werden.',
		'edit'            =>  array(
			'failure'         => 'Bei der Aktualisierung ist etwas schiefgegangen.',
			'success'         => 'Abonnent aktualisiert.',
			'title'           => 'Abonnent aktualisieren',
		),
		'not_verified'    => 'Nicht verifiziert',
		'subscribers'     => 'Abonnenten',
		'verified'        => 'Verifiziert',
	),
	'team'            =>  array(
		'add'             =>  array(
			'failure'         => 'Mit der Komponente ist etwas schiefgegangen.',
			'success'         => 'Teammitglied hinzugefügt.',
			'title'           => 'Neues Teammitglied hinzufügen',
		),
		'delete'          =>  array(
			'failure'         => 'Bei dem Löschen dieses Benutzers ging etwas schief.',
			'success'         => 'Benutzer aktualisiert.',
		),
		'description'     => 'Teammitglieder werden die M&ouml;glichkeit haben, Komponente sowie Vorf&auml;lle hinzuzuf&uuml;gen und zu ver&auml;ndern.',
		'edit'            =>  array(
			'failure'         => 'Bei der Aktualisierung ging etwas schief.',
			'success'         => 'Profil aktualisiert.',
			'title'           => 'Profil aktualisieren',
		),
		'member'          => 'Mitglied',
		'profile'         => 'Profil',
		'team'            => 'Team',
	),
	'welcome'         =>  array(
		'close'           => 'Gehe einfach direkt zu meinem Dashboard',
		'message'         => 'Ihre Statusseite ist fast fertig! Vielleicht möchten Sie diese zusätzlichen Einstellungen konfigurieren',
		'steps'           =>  array(
			'api'             => 'API Token generieren',
			'component'       => 'Komponenten erstellen',
			'customize'       => 'Personalisieren',
			'incident'        => 'Vorfälle erstellen',
			'team'            => 'Benutzer hinzufügen',
			'two-factor'      => 'Zwei-Faktor-Authentifizierung',
		),
		'welcome'         => 'Willkommen zu Cachet',
	),
);
