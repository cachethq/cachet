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

    'dashboard'          => 'Pulpit',
    'writeable_settings' => 'Nie można zapisać zmian w pliku konfiguracyjnym. Proszę sprawdzić uprawnienia do katalogu <code>./bootstrap/cachet</code>, serwer www musi mieć możliwość zapisu w tym katalogu.',

    // Incidents
    'incidents' => [
        'title'                    => 'Zdarzenia i harmonogramy',
        'incidents'                => 'Zdarzenia',
        'logged'                   => '{0} Nie ma żadnych zgłoszonych zdarzeń.|Masz jedno zgłoszone zdarzenie.|Masz zgłoszonych <strong>:count</strong> zdarzeń.',
        'incident-create-template' => 'Utwórz szablon',
        'incident-templates'       => 'Szablon zdarzenia',
        'updates'                  => '{0} Zero aktualizacji|Jedna aktualizacja|:count aktualizacji',
        'add'                      => [
            'title'   => 'Zgłoś zdarzenie',
            'success' => 'Dodano zdarzenie.',
            'failure' => 'Wystąpił błąd podczas dodawania zdarzenia, proszę spróbować ponownie.',
        ],
        'edit' => [
            'title'   => 'Edytuj zdarzenie',
            'success' => 'Zmieniono zdarzenie.',
            'failure' => 'Wystąpił błąd podczas edytowania zdarzenia, proszę spróbować ponownie.',
        ],
        'delete' => [
            'success' => 'Zdarzenie zostało usunięte i nie będzie widoczne na stronie statusu.',
            'failure' => 'Zdarzenie nie mogło zostać usunięte, proszę spróbować ponownie.',
        ],
        'update' => [
            'title'    => 'Utwórz nową aktualizację zdarzenia',
            'subtitle' => 'Dodaj aktualizację do <strong>:incident</strong>',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Szablony zdarzeń',
            'add'   => [
                'title'   => 'Utwórz szablon zdarzenia',
                'message' => 'Powinieneś dodać szablon zdarzenia.',
                'success' => 'Twój nowy szablon zdarzenia został utworzony.',
                'failure' => 'Coś poszło nie tak z szablonem zdarzenia.',
            ],
            'edit' => [
                'title'   => 'Edytuj szablon zdarzenia',
                'success' => 'Szablon zdarzenia został zaktualizowany.',
                'failure' => 'Coś poszło nie tak podczas aktualizacji szablonu zdarzenia',
            ],
            'delete' => [
                'success' => 'Szablon zdarzenia został usunięty.',
                'failure' => 'Szablon zdarzenia nie mógł zostać usunięty, proszę spróbować ponownie.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Zaplanowana konserwacja',
        'logged'       => '{0} Nie ma żadnych zaplanowanych konserwacji.|Posiadasz jedną zaplanowaną konserwację.|Zgłoszono <strong>:count</strong> zaplanowanych konserwacji.',
        'scheduled_at' => 'Zaplanowane na :timestamp',
        'add'          => [
            'title'   => 'Zaplanuj prace konserwacyjne',
            'success' => 'Dodano harmonogram.',
            'failure' => 'Coś poszło nie tak podczas planowania, proszę spróbować ponownie.',
        ],
        'edit' => [
            'title'   => 'Edytuj prace konserwacyjne',
            'success' => 'Harmonogram został zaktualizowany!',
            'failure' => 'Coś poszło nie tak podczas edytowania harmonogramu, proszę spróbować ponownie.',
        ],
        'delete' => [
            'success' => 'Zaplanowane prace konserwacyjne zostały usunięte i nie będą wyświetlane na stronie statusu.',
            'failure' => 'Zaplanowane prace konserwacyjne nie mogły zostać usunięte, proszę spróbować ponownie.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Komponenty',
        'component_statuses' => 'Komponenty statusu',
        'listed_group'       => 'Zgrupowane w :name',
        'add'                => [
            'title'   => 'Dodaj komponent',
            'message' => 'Musisz dodać komponent.',
            'success' => 'Utworzono komponent.',
            'failure' => 'Coś poszło nie tak z komponentem, proszę spróbować ponownie.',
        ],
        'edit' => [
            'title'   => 'Edytuj komponent',
            'success' => 'Zaktualizowano komponent.',
            'failure' => 'Coś poszło nie tak z komponentem, proszę spróbować ponownie.',
        ],
        'delete' => [
            'success' => 'Komponent został usunięty!',
            'failure' => 'Komponent nie mógł zostać usunięty, proszę spróbować ponownie.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Grupa komponentu|Grupy komponentów',
            'no_components' => 'Musisz utworzyć grupę komponentów.',
            'add'           => [
                'title'   => 'Dodaj grupę komponentów',
                'success' => 'Dodano grupę komponentów.',
                'failure' => 'Coś poszło nie tak z komponentem, proszę spróbować ponownie.',
            ],
            'edit' => [
                'title'   => 'Edytuj grupę komponentów',
                'success' => 'Zaktualizowano grupę komponentów.',
                'failure' => 'Coś poszło nie tak z komponentem, proszę spróbować ponownie.',
            ],
            'delete' => [
                'success' => 'Grupa komponentów została usunięta!',
                'failure' => 'Grupa komponentów nie mogła zostać usunięta, proszę spróbować ponownie.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metryka',
        'add'     => [
            'title'   => 'Utwórz metrykę',
            'message' => 'Powinieneś dodać metrykę.',
            'success' => 'Utworzono metrykę.',
            'failure' => 'Coś poszło nie tak z metryką, proszę próbować ponownie.',
        ],
        'edit' => [
            'title'   => 'Edytuj metrykę',
            'success' => 'Zaktualizowano metrykę.',
            'failure' => 'Coś poszło nie tak z metryką, proszę próbować ponownie.',
        ],
        'delete' => [
            'success' => 'Metryka została usunięta i nie będzie wyświetlana na stronie statusu.',
            'failure' => 'Metryka nie mogła zostać usunięta, proszę spróbować ponownie.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'      => 'Subskrybenci',
        'description'      => 'Subskrybenci będą otrzymywać powiadomienia, gdy wydarzenia zostaną utworzone lub komponenty zaktualizowane.',
        'verified'         => 'Zweryfikowany',
        'not_verified'     => 'Nie zweryfikowany',
        'subscriber'       => ':email, subskrybowany :data',
        'no_subscriptions' => 'Zapisano do wszystkich aktualizacji',
        'add'              => [
            'title'   => 'Dodaj nowego subskrybenta',
            'success' => 'Subskrybent został dodany.',
            'failure' => 'Coś poszło nie tak podczas dodawania subskrybenta, proszę spróbować ponownie.',
            'help'    => 'Wpisz każdego subskrybenta w nowym wierszu.',
        ],
        'edit' => [
            'title'   => 'Edytuj subskrybenta',
            'success' => 'Dane subskrybenta zostały zmienione.',
            'failure' => 'Coś poszło nie tak podczas edytowania subskrybenta, proszę spróbować ponownie.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Zespół',
        'member'      => 'Członkowie',
        'profile'     => 'Profil',
        'description' => 'Członkowie zespołu będą mogli dodawać, modyfikować i edytować komponenty i zdarzenia.',
        'add'         => [
            'title'   => 'Dodaj nowego członka zespołu',
            'success' => 'Dodano członka zespołu.',
            'failure' => 'Członek zespołu nie mógł zostać dodany, proszę spróbować ponownie.',
        ],
        'edit' => [
            'title'   => 'Aktualizuj dane członka zespołu',
            'success' => 'Zaktualizowano profil.',
            'failure' => 'Coś poszło nie tak podczas aktualizacji profilu, proszę spróbować ponownie.',
        ],
        'delete' => [
            'success' => 'Usuń członka zespołu.',
            'failure' => 'Członek zespołu nie mógł zostać dodany, proszę spróbować ponownie.',
        ],
        'invite' => [
            'title'   => 'Zaproś nowego członka zespołu',
            'success' => 'Zaproszenie zostało wysłane',
            'failure' => 'Zaproszenie nie mogło zostać wysłane, proszę spróbować ponownie.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Ustawienia',
        'app-setup' => [
            'app-setup'   => 'Instalacja aplikacji',
            'images-only' => 'Tylko obrazy mogą zostać wgrane.',
            'too-big'     => 'Przesłany plik jest zbyt duży. Prześlij obraz mniejszych rozmiarów niż :size',
        ],
        'analytics' => [
            'analytics' => 'Analytics',
        ],
        'log' => [
            'log' => 'Logi',
        ],
        'localization' => [
            'localization' => 'Lokalizacja',
        ],
        'customization' => [
            'customization' => 'Dostosowywanie',
            'header'        => 'Niestandardowy nagłówek HTML',
            'footer'        => 'Niestandardowa stopka HTML',
        ],
        'mail' => [
            'mail'  => 'Mail',
            'test'  => 'Test',
            'email' => [
                'subject' => 'Testowe powiadomienie z Cachet',
                'body'    => 'To jest testowe powiadomienie z Cachet.',
            ],
        ],
        'security' => [
            'security'   => 'Bezpieczeństwo',
            'two-factor' => 'Użytkownicy bez uwierzytelniania dwuskładnikowego',
        ],
        'stylesheet' => [
            'stylesheet' => 'Style',
        ],
        'theme' => [
            'theme' => 'Szablony',
        ],
        'edit' => [
            'success' => 'Ustawienia zostały zapisane.',
            'failure' => 'Wystąpił błąd podczas zapisywania ustawień.',
        ],
        'credits' => [
            'credits'       => 'Autorzy',
            'contributors'  => 'Współtwórcy',
            'license'       => 'Catchet jest otwartym źródłem z licencją BSD utworzonym przez <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => 'Patronaci i sponsorzy',
            'backers'       => 'Jeśli chciałbyś wspomóc przyszły rozwój sprawdź kampanię <a href="https://patreon.com/jbrooksuk" target="_blank">Cachet Patreon</a>.',
            'thank-you'     => 'Dziękujemy każdemu :count współtwórcy.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Logowanie',
        'logged_in'  => 'Zostałeś zalogowany.',
        'welcome'    => 'Witaj ponownie!',
        'two-factor' => 'Wpisz kod weryfikacji dwuskładnikowej.',
    ],

    // Sidebar footer
    'help'        => 'Hilfe',
    'status_page' => 'Statusseite',
    'logout'      => 'Abmelden',

    // Notifications
    'notifications' => [
        'notifications' => 'Powiadomienia',
        'awesome'       => 'Niesamowite.',
        'whoops'        => 'Ups.',
    ],

    // Widgets
    'widgets' => [
        'support'          => 'Wspomóż Cachet',
        'support_subtitle' => 'Sprawdź również naszą stronę na <strong><a href="https://patreon.com/jbrooksuk" target="_blank">Patreon</a></strong>!',
        'news'             => 'Aktualności',
        'news_subtitle'    => 'Pobierz najnowszą aktualizację',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Witamy w nowym statusie strony!',
        'message' => 'Wszystko jest już prawie gotowe, ale może zechcesz skonfigurować najpierw te dodatkowe ustawienia:',
        'close'   => 'Przejdź prosto do panelu głównego',
        'steps'   => [
            'component'  => 'Dodaj komponent',
            'incident'   => 'Utwórz zdarzenie',
            'customize'  => 'Ustawienia strony statusu',
            'team'       => 'Dodaj członków zespołu',
            'api'        => 'Wygeneruj klucz API',
            'two-factor' => 'Skonfiguruj uwierzytelnianie dwuskładnikowe',
        ],
    ],

];
