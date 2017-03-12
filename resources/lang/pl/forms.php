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

    // Setup form fields
    'setup' => [
        'email'            => 'E-mail',
        'username'         => 'Login',
        'password'         => 'Hasło',
        'site_name'        => 'Nazwa strony',
        'site_domain'      => 'Adres strony',
        'site_timezone'    => 'Strefa czasowa',
        'site_locale'      => 'Język strony',
        'enable_google2fa' => 'Włącz weryfikację dwuetapową Google',
        'cache_driver'     => 'Przechowywanie cache',
        'session_driver'   => 'Przechowywanie sesji',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Nazwa użytkownika lub e-mail',
        'email'         => 'E-mail',
        'password'      => 'Hasło',
        '2fauth'        => 'Kod autoryzacyjny',
        'invalid'       => 'Nieprawidłowa nazwa użytkownika lub hasło',
        'invalid-token' => 'Nieprawidłowy token.',
        'cookies'       => 'Musisz włączyć obsługę cookies w przeglądarce, aby zalogować się.',
        'rate-limit'    => 'Przekroczono ilość nieudanych prób logowania.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Nazwa',
        'status'             => 'Status',
        'component'          => 'Komponent',
        'message'            => 'Wiadomość',
        'message-help'       => 'Można również zapamiętać.',
        'scheduled_at'       => 'Czy ta przerwa jest zaplanowana?',
        'incident_time'      => 'Kiedy przerwa zostanie zakończona?',
        'notify_subscribers' => 'Powiadom subskrybentów',
        'visibility'         => 'Widoczność zdarzenia',
        'public'             => 'Widoczne publicznie',
        'logged_in_only'     => 'Widoczne tylko dla zalogowanych użytkowników',
        'templates'          => [
            'name'     => 'Nazwa',
            'template' => 'Szablon',
            'twig'     => 'Szablony wydarzeń mogą korzystać z języka szablonów <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Nazwa',
        'status'      => 'Status',
        'group'       => 'Grupa',
        'description' => 'Opis',
        'link'        => 'Link',
        'tags'        => 'Tagi',
        'tags-help'   => 'Oddziel przecinkami.',
        'enabled'     => 'Komponent odblokowany?',

        'groups' => [
            'name'               => 'Nazwa',
            'collapsing'         => 'Wybierz widoczność grupy',
            'visible'            => 'Zawsze rozwinięte',
            'collapsed'          => 'Domyślnie zwiń grupę',
            'collapsed_incident' => 'Zwiń grupę, ale rozwiń ją w razie problemów',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Nazwa',
        'suffix'           => 'Przyrostek',
        'description'      => 'Opis',
        'description-help' => 'Można również zapamiętać.',
        'display-chart'    => 'Czy wyświetlać wykresy na stronie statusu?',
        'default-value'    => 'Domyślna wartość',
        'calc_type'        => 'Obliczanie metryk',
        'type_sum'         => 'Suma',
        'type_avg'         => 'Średnia',
        'places'           => 'Miejsca dziesiętne',
        'default_view'     => 'Domyślny widok',
        'threshold'        => 'Ile minut przerwy między punktami metrycznymi?',

        'points' => [
            'value' => 'Wartość',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Nazwa strony',
            'site-url'               => 'Adres URL strony',
            'display-graphs'         => 'Czy wyświetlać wykresy na stronie statusu?',
            'about-this-page'        => 'Informacje o tej stronie',
            'days-of-incidents'      => 'Z ilu ostatnich dni pokazywać incydenty?',
            'banner'                 => 'Baner',
            'banner-help'            => 'Zaleca się, aby przesyłać pliki nie większe niż 930px szerokości',
            'subscribers'            => 'Czy pozwalać na subskrypcje e-mail?',
            'automatic_localization' => 'Automatycznie tłumaczyć twoją stronę statusu na język odwiedzającego?',
        ],
        'analytics' => [
            'analytics_google'       => 'Kod śledzenia Google Analytics',
            'analytics_gosquared'    => 'Kod śledzenia GoSquared Analytics',
            'analytics_piwik_url'    => 'Adres URL śledzenia Piwik (bez http(s)://)',
            'analytics_piwik_siteid' => 'Piwik ID strony',
        ],
        'localization' => [
            'site-timezone'        => 'Strefa czasowa',
            'site-locale'          => 'Język strony',
            'date-format'          => 'Format daty',
            'incident-date-format' => 'Format daty przy incydentach',
        ],
        'security' => [
            'allowed-domains'      => 'Zaakceptowane domeny',
            'allowed-domains-help' => 'Oddzielić przecinkami. Domeny są automatycznie traktowane jako dozwolone.',
        ],
        'stylesheet' => [
            'custom-css' => 'Niestandardowy arkusz stylów',
        ],
        'theme' => [
            'background-color'        => 'Kolor tła',
            'background-fills'        => 'Wypełnianie tła (komponenty, wydarzenia, stopka)',
            'banner-background-color' => 'Kolor tła pod banerem',
            'banner-padding'          => 'Odstęp pomiędzy banerem',
            'fullwidth-banner'        => 'Włącz pełną szerokość banera?',
            'text-color'              => 'Kolor tekstu',
            'dashboard-login'         => 'Pokazywać przycisk panelu głównego w stopce?',
            'reds'                    => 'Czerwony (używany przy błędach)',
            'blues'                   => 'Niebieski (używany przy informacjach)',
            'greens'                  => 'Zielony (używany przy powodzeniu)',
            'yellows'                 => 'Żółty (używany przy ostrzeżeniach)',
            'oranges'                 => 'Pomarańczowy (używany przy ogłoszeniach)',
            'metrics'                 => 'Wypełnienie metryki',
            'links'                   => 'Łącza',
        ],
    ],

    'user' => [
        'username'       => 'Login',
        'email'          => 'E-mail',
        'password'       => 'Hasło',
        'api-token'      => 'Klucz API',
        'api-token-help' => 'Ponowne wygenerowanie klucza API spowoduje, że aplikacje korzystające obecnie z API Cachet utracą do niego dostęp.',
        'gravatar'       => 'Zmień stwój avatar na Gravatar.',
        'user_level'     => 'Poziom użytkownika',
        'levels'         => [
            'admin' => 'Administrator',
            'user'  => 'Użytkownik',
        ],
        '2fa' => [
            'help' => 'Włączenie weryfikacji dwuetapowej zwiększa bezpieczeństwo. Pobierz <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> lub podobną aplikację. Po zalogowaniu zostaniesz poproszony o podanie kodu wygenerowanego przez aplikację.',
        ],
        'team' => [
            'description' => 'Zaproś nowych członków zespołu, wpisując ich adresy e-email tutaj.',
            'email'       => 'Email #:id',
        ],
    ],

    // Buttons
    'add'    => 'Dodaj',
    'save'   => 'Zapisz',
    'update' => 'Zaktualizuj',
    'create' => 'Utwórz',
    'edit'   => 'Edytuj',
    'delete' => 'Skasuj',
    'submit' => 'Wyślij',
    'cancel' => 'Anuluj',
    'remove' => 'Usuń',
    'invite' => 'Zaproś',
    'signup' => 'Zarejestruj się',

    // Other
    'optional' => '* Opcjonalnie',
];
