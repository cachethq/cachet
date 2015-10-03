<?php

# modified at 03-10-2015 06:38

return  array(
	'components'      =>  array(
		'add'                  =>  array(
			'failure'              => 'Coś poszło nie tak przy tworzeniu komponentu.',
			'message'              => 'Powinieneś doddać komponent.',
			'success'              => 'Komponent utworzony.',
			'title'                => 'Dodaj komponent',
		),
		'component_statuses'   => 'Statusy komponentów',
		'components'           => 'Komponenty',
		'edit'                 =>  array(
			'failure'              => 'Coś poszło nie tak przy aktualizacji komponent.',
			'success'              => 'Komponent zaktualizowany.',
			'title'                => 'Edytuj komponent',
		),
		'groups'               =>  array(
			'add'                  =>  array(
				'failure'              => 'Coś poszło nie tak przy tworzeniu grupy.',
				'success'              => 'Grupa komponentów utworzona.',
				'title'                => 'Dodaj grupę komponentów',
			),
			'edit'                 =>  array(
				'failure'              => 'Coś poszło nie tak przy aktualizacji grupy.',
				'success'              => 'Grupa komponentów zaktualizaowana.',
				'title'                => 'Edytuj grupę komponentów',
			),
			'groups'               => 'Grupa komponenów|Grupy komponentów',
			'no_components'        => 'You should add a component group.',
		),
		'listed_group'         => 'Zgrupowane pod :name',
		'order'                =>  array(
			'success'              => 'Component orders updated.',
		),
	),
	'dashboard'       => 'Panel sterowania',
	'help'            => 'Pomoc',
	'incidents'       =>  array(
		'add'                        =>  array(
			'failure'                    => 'Coś poszło nie tak z incydentem.',
			'success'                    => 'Incydent dodany.',
			'title'                      => 'Dodaj incydent',
		),
		'edit'                       =>  array(
			'failure'                    => 'Coś poszło nie tak z incydentem.',
			'success'                    => 'Incydent zaktualizowany.',
			'title'                      => 'Aktualizuj incydent',
		),
		'incident-create-template'   => 'Utwórz szablon',
		'incident-templates'         => 'Szablony incydentów',
		'incidents'                  => 'Incydenty',
		'logged'                     => '{0} Brak incydentów, gratulacje.| Zapisałeś jeden incydent.|Zapisałeś <strong>:count</strong> incydentów.',
		'templates'                  =>  array(
			'add'                        =>  array(
				'failure'                    => 'Coś poszło nie tak z szablonem incydentu.',
				'success'                    => 'Szablon utworzony.',
				'title'                      => 'Stwórz szablon incydentu.',
			),
			'edit'                       =>  array(
				'failure'                    => 'Coś poszło nie tak przy aktualizacji szablonu.',
				'success'                    => 'Szablon został zaktualizowany!',
				'title'                      => 'Edytuj szablon',
			),
			'title'                      => 'Szablony incydentów',
		),
		'title'                      => 'Incydenty i kalendarz',
	),
	'login'           =>  array(
		'logged_in'       => 'Jesteś zalogowany.',
		'login'           => 'Zaloguj',
		'two-factor'      => 'Wpisz swój kod.',
		'welcome'         => 'Witam ponownie!',
	),
	'logout'          => 'Wyloguj',
	'metrics'         =>  array(
		'add'             =>  array(
			'failure'         => 'Coś poszło nie tak z tworzeniem metryki.',
			'success'         => 'Metryka utworzona.',
			'title'           => 'Utwórz metrykę',
		),
		'edit'            =>  array(
			'failure'         => 'Coś poszło nie tak przy aktualizacji metryki.',
			'success'         => 'Metryka zaktualizowana.',
			'title'           => 'Edytuj metrykę',
		),
		'metrics'         => 'Metryki',
	),
	'notifications'   =>  array(
		'awesome'         => 'Super.',
		'notifications'   => 'Powiadomienia',
		'whoops'          => 'Ojej.',
	),
	'schedule'        =>  array(
		'add'             =>  array(
			'failure'         => 'Coś poszło nie tak przy dodawaniu przerwy.',
			'success'         => 'Zaplanowana przerwa dodana.',
			'title'           => 'Dodaj planową przerwę',
		),
		'delete'          =>  array(
			'failure'         => 'Nie można było skasować przerwy. Spróbuj ponownie.',
			'success'         => 'Przerwa została skasowana i nie będzie pokazywana na stronie statusowej.',
		),
		'edit'            =>  array(
			'failure'         => 'Coś poszło nie tak przy aktualizacji przerwy.',
			'success'         => 'Przerwa zaktualizowana!',
			'title'           => 'Aktualizuj zaplanowaną przerwę',
		),
		'schedule'        => 'Zaplanowana przerwa',
		'scheduled_at'    => 'Zaplanowana data :timestamp',
	),
	'settings'        =>  array(
		'app-setup'       =>  array(
			'app-setup'       => 'Ustawienia aplikacji',
			'images-only'     => 'Można wgrywać tylko pliki graficzne.',
			'too-big'         => 'Wgrany plik jest zbyt duży. Wgraj plik mnijeszy niż :size',
		),
		'edit'            =>  array(
			'failure'         => 'Ustawienia nie mogły być zapisane.',
			'success'         => 'Ustawienia zapisane.',
		),
		'security'        =>  array(
			'security'        => 'Bezpieczeństwo',
			'two-factor'      => 'Użytkownicy bez autentykacji dwuetapowej',
		),
		'settings'        => 'Ustawienia',
		'stylesheet'      =>  array(
			'stylesheet'      => 'Stylesheet',
		),
		'theme'           =>  array(
			'theme'           => 'Skórka',
		),
	),
	'status_page'     => 'Strona statusu',
	'team'            =>  array(
		'add'             =>  array(
			'failure'         => 'Coś poszło nie tak z dodawaniem do zespołu.',
			'success'         => 'Dodano członka zespołu.',
			'title'           => 'Dodaj nowego członka zespołu',
		),
		'description'     => 'Członkowie zespołu będą mogli dodawać i modyfikować komponenty i incydenty.',
		'edit'            =>  array(
			'failure'         => 'Coś poszło nie tak przy aktualizacji.',
			'success'         => 'Profil zaktualizowany.',
			'title'           => 'Aktualizuj profil',
		),
		'member'          => 'Członek',
		'profile'         => 'Profil',
		'team'            => 'Zespół',
	),
	'welcome'         =>  array(
		'close'           => 'Przejdź do mojego panelu',
		'message'         => 'Twoja strona statusowa jest już prawie gotowa! Możesz skonfigurować dodatkowe ustawienia',
		'steps'           =>  array(
			'api'             => 'Wygeneruj token API',
			'component'       => 'Utwórz komponenty',
			'customize'       => 'Personalizacja',
			'incident'        => 'Utwórz incydenty',
			'team'            => 'Dodaj użytkowników',
			'two-factor'      => 'Autentykacja dwuetapowa',
		),
		'welcome'         => 'Witamy w Cachet',
	),
);
