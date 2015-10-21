<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    'dashboard' => 'Panel sterowania',

    // Incidents
    'incidents' => [
        'title'                    => 'Incydenty i kalendarz',
        'incidents'                => 'Incydenty',
        'logged'                   => '{0} Brak incydentów, gratulacje.| Zapisałeś jeden incydent.|Zapisałeś <strong>:count</strong> incydentów.',
        'incident-create-template' => 'Utwórz szablon',
        'incident-templates'       => 'Szablony incydentów',
        'add'                      => [
            'title'   => 'Dodaj incydent',
            'success' => 'Incydent dodany.',
            'failure' => 'Coś poszło nie tak z incydentem.',
        ],
        'edit' => [
            'title'   => 'Aktualizuj incydent',
            'success' => 'Incydent zaktualizowany.',
            'failure' => 'Coś poszło nie tak z incydentem.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Szablony incydentów',
            'add'   => [
                'title'   => 'Stwórz szablon incydentu.',
                'success' => 'Szablon utworzony.',
                'failure' => 'Coś poszło nie tak z szablonem incydentu.',
            ],
            'edit' => [
                'title'   => 'Edytuj szablon',
                'success' => 'Szablon został zaktualizowany!',
                'failure' => 'Coś poszło nie tak przy aktualizacji szablonu.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Zaplanowana przerwa',
        'scheduled_at' => 'Zaplanowana data :timestamp',
        'add'          => [
            'title'   => 'Dodaj planową przerwę',
            'success' => 'Zaplanowana przerwa dodana.',
            'failure' => 'Coś poszło nie tak przy dodawaniu przerwy.',
        ],
        'edit' => [
            'title'   => 'Aktualizuj zaplanowaną przerwę',
            'success' => 'Przerwa zaktualizowana!',
            'failure' => 'Coś poszło nie tak przy aktualizacji przerwy.',
        ],
        'delete' => [
            'success' => 'Przerwa została skasowana i nie będzie pokazywana na stronie statusowej.',
            'failure' => 'Nie można było skasować przerwy. Spróbuj ponownie.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Komponenty',
        'component_statuses' => 'Statusy komponentów',
        'listed_group'       => 'Zgrupowane pod :name',
        'add'                => [
            'title'   => 'Dodaj komponent',
            'message' => 'Powinieneś doddać komponent.',
            'success' => 'Komponent utworzony.',
            'failure' => 'Coś poszło nie tak przy tworzeniu komponentu.',
        ],
        'edit' => [
            'title'   => 'Edytuj komponent',
            'success' => 'Komponent zaktualizowany.',
            'failure' => 'Coś poszło nie tak przy aktualizacji komponent.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Grupa komponenów|Grupy komponentów',
            'no_components' => 'You should add a component group.',
            'add'           => [
                'title'   => 'Dodaj grupę komponentów',
                'success' => 'Grupa komponentów utworzona.',
                'failure' => 'Coś poszło nie tak przy tworzeniu grupy.',
            ],
            'edit' => [
                'title'   => 'Edytuj grupę komponentów',
                'success' => 'Grupa komponentów zaktualizaowana.',
                'failure' => 'Coś poszło nie tak przy aktualizacji grupy.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metryki',
        'add'     => [
            'title'   => 'Utwórz metrykę',
            'success' => 'Metryka utworzona.',
            'failure' => 'Coś poszło nie tak z tworzeniem metryki.',
        ],
        'edit' => [
            'title'   => 'Edytuj metrykę',
            'success' => 'Metryka zaktualizowana.',
            'failure' => 'Coś poszło nie tak przy aktualizacji metryki.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Zespół',
        'member'      => 'Członek',
        'profile'     => 'Profil',
        'description' => 'Członkowie zespołu będą mogli dodawać i modyfikować komponenty i incydenty.',
        'add'         => [
            'title'   => 'Dodaj nowego członka zespołu',
            'success' => 'Dodano członka zespołu.',
            'failure' => 'Coś poszło nie tak z dodawaniem do zespołu.',
        ],
        'edit' => [
            'title'   => 'Aktualizuj profil',
            'success' => 'Profil zaktualizowany.',
            'failure' => 'Coś poszło nie tak przy aktualizacji.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Ustawienia',
        'app-setup' => [
            'app-setup'   => 'Ustawienia aplikacji',
            'images-only' => 'Można wgrywać tylko pliki graficzne.',
            'too-big'     => 'Wgrany plik jest zbyt duży. Wgraj plik mnijeszy niż :size',
        ],
        'analytics' => [
            'analytics' => 'Analytics',
        ],
        'localization' => [
            'localization' => 'Localization',
        ],
        'security' => [
            'security'   => 'Bezpieczeństwo',
            'two-factor' => 'Użytkownicy bez autentykacji dwuetapowej',
        ],
        'stylesheet' => [
            'stylesheet' => 'Stylesheet',
        ],
        'theme' => [
            'theme' => 'Skórka',
        ],
        'edit' => [
            'success' => 'Ustawienia zapisane.',
            'failure' => 'Ustawienia nie mogły być zapisane.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Zaloguj',
        'logged_in'  => 'Jesteś zalogowany.',
        'welcome'    => 'Witam ponownie!',
        'two-factor' => 'Wpisz swój kod.',
    ],

    // Sidebar footer
    'help'        => 'Pomoc',
    'status_page' => 'Strona statusu',
    'logout'      => 'Wyloguj',

    // Notifications
    'notifications' => [
        'notifications' => 'Powiadomienia',
        'awesome'       => 'Super.',
        'whoops'        => 'Ojej.',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Witamy w Cachet',
        'message' => 'Twoja strona statusowa jest już prawie gotowa! Możesz skonfigurować dodatkowe ustawienia',
        'close'   => 'Przejdź do mojego panelu',
        'steps'   => [
            'component'  => 'Utwórz komponenty',
            'incident'   => 'Utwórz incydenty',
            'customize'  => 'Personalizacja',
            'team'       => 'Dodaj użytkowników',
            'api'        => 'Wygeneruj token API',
            'two-factor' => 'Autentykacja dwuetapowa',
        ],
    ],

];
