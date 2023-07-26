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
        'email'            => 'E-Mail',
        'username'         => 'Nazwa Użytkownika',
        'password'         => 'Hasło',
        'site_name'        => 'Nazwa strony',
        'site_domain'      => 'Domena',
        'site_timezone'    => 'Wybierz swoją strefę czasową',
        'site_locale'      => 'Wybierz swój język',
        'enable_google2fa' => 'Włącz weryfikację dwuetapową Google Authenticator',
        'cache_driver'     => 'Sposób przechowywania cache',
        'queue_driver'     => 'Queue Driver',
        'session_driver'   => 'Sposób przechowywania sesji',
        'mail_driver'      => 'Sposób wysyłania wiadomości e-mail',
        'mail_host'        => 'Adres hosta poczty',
        'mail_address'     => 'Nadawca wiadomości',
        'mail_username'    => 'Nazwa użytkownika poczty',
        'mail_password'    => 'Hasło użytkownika poczty',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Nazwa użytkownika lub e-mail',
        'email'         => 'E-Mail',
        'password'      => 'Hasło',
        '2fauth'        => 'Kod autoryzacyjny',
        'invalid'       => 'Nieprawidłowa nazwa użytkownika lub hasło',
        'invalid-token' => 'Nieprawidłowy token',
        'cookies'       => 'Musisz włączyć obsługę cookies, aby móc się zalogować.',
        'rate-limit'    => 'Przekroczono limit.',
        'remember_me'   => 'Remember me',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Nazwa',
        'status'             => 'Status',
        'component'          => 'Komponent',
        'component_status'   => 'Component Status',
        'message'            => 'Nachricht',
        'message-help'       => 'Można użyć również języka znaczników.',
        'occurred_at'        => 'When did this incident occur?',
        'notify_subscribers' => 'Powiadomić subskrybentów?',
        'notify_disabled'    => 'Due to scheduled maintenance, notifications about this incident or its components will be suppressed.',
        'visibility'         => 'Widoczność zdarzenia',
        'stick_status'       => 'Stick Incident',
        'stickied'           => 'Stickied',
        'not_stickied'       => 'Not Stickied',
        'public'             => 'Widoczne publicznie',
        'logged_in_only'     => 'Widoczne tylko dla zalogowanych użytkowników',
        'templates'          => [
            'name'     => 'Nazwa',
            'template' => 'Szablon',
            'twig'     => 'Szablony wydarzeń mogą korzystać z języka szablonów <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>.',
        ],
    ],

    'schedules' => [
        'name'         => 'Nazwa',
        'status'       => 'Status',
        'message'      => 'Nachricht',
        'message-help' => 'Można użyć również języka znaczników.',
        'scheduled_at' => 'When is this maintenance scheduled for?',
        'completed_at' => 'When did this maintenance complete?',
        'templates'    => [
            'name'     => 'Nazwa',
            'template' => 'Szablon',
            'twig'     => 'Szablony wydarzeń mogą korzystać z języka szablonów <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Nazwa',
        'status'      => 'Status',
        'group'       => 'Gruppe',
        'description' => 'Beschreibung',
        'link'        => 'Link',
        'tags'        => 'Schlagwörter',
        'tags-help'   => 'Durch Kommata trennen.',
        'enabled'     => 'Component enabled?',

        'groups' => [
            'name'                     => 'Nazwa',
            'collapsing'               => 'Expand/Collapse options',
            'visible'                  => 'Zawsze rozwinięte',
            'collapsed'                => 'Domyślnie zwiń grupę',
            'collapsed_incident'       => 'Zwiń grupę, ale rozwiń ją w razie problemów',
            'visibility'               => 'Visibility',
            'visibility_public'        => 'Visible to public',
            'visibility_authenticated' => 'Visible only to logged in users',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => 'Nazwa',
        'description'        => 'Beschreibung',
        'start_at'           => 'Schedule start time',
        'timezone'           => 'Timezone',
        'schedule_frequency' => 'Schedule frequency (in seconds)',
        'completion_latency' => 'Completion latency (in seconds)',
        'group'              => 'Gruppe',
        'active'             => 'Active?',
        'groups'             => [
            'name' => 'Group Name',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'                     => 'Nazwa',
        'suffix'                   => 'Przyrostek',
        'description'              => 'Beschreibung',
        'description-help'         => 'Można użyć również języka znaczników.',
        'display-chart'            => 'Pokazać diagram na stronie statusu?',
        'default-value'            => 'Warość domyślna',
        'calc_type'                => 'Obliczanie metryk',
        'type_sum'                 => 'Suma',
        'type_avg'                 => 'Średnia',
        'places'                   => 'Miejsca dziesiętne',
        'default_view'             => 'Domyślny widok',
        'threshold'                => 'Ile minut przerwy między punktami metrycznymi?',
        'visibility'               => 'Visibility',
        'visibility_authenticated' => 'Visible to authenticated users',
        'visibility_public'        => 'Visible to everybody',
        'visibility_hidden'        => 'Always hidden',

        'points' => [
            'value' => 'Wartość',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                             => 'Nazwa strony',
            'site-url'                              => 'Adres URL strony',
            'display-graphs'                        => 'Pokazać wykresy na stronie statusu?',
            'about-this-page'                       => 'Informacje o tej stronie',
            'days-of-incidents'                     => 'Z ilu ostatnich dni pokazywać incydenty?',
            'time_before_refresh'                   => 'Status page refresh rate (in seconds)',
            'major_outage_rate'                     => 'Major outage threshold (in %)',
            'banner'                                => 'Baner',
            'banner-help'                           => "It's recommended that you upload files no bigger than 930px wide",
            'subscribers'                           => 'Czy zezwolić użytkownikom na subskrypcje e-mail w celu otrzymywania powiadomień?',
            'suppress_notifications_in_maintenance' => 'Suppress notifications when incident occurs during maintenance period?',
            'skip_subscriber_verification'          => 'Skip verifying of users? (Be warned, you could be spammed)',
            'automatic_localization'                => 'Automatycznie tłumaczyć twoją stronę statusu na język odwiedzającego?',
            'enable_external_dependencies'          => 'Enable Third Party Dependencies (Google Fonts, Trackers, etc...)',
            'show_timezone'                         => 'Show the timezone the status page is running in',
            'only_disrupted_days'                   => 'Only show days containing incidents in the timeline?',
        ],
        'analytics' => [
            'analytics_google'       => 'Kod Google Analytics',
            'analytics_gosquared'    => 'Kod GoSquared  Analytics',
            'analytics_piwik_url'    => 'URL of your Piwik instance',
            'analytics_piwik_siteid' => 'ID strony Piwik',
        ],
        'localization' => [
            'site-timezone'        => 'Strefa czasowa strony',
            'site-locale'          => 'Język strony',
            'date-format'          => 'Format daty',
            'incident-date-format' => 'Format daty przy zdarzeniach',
        ],
        'security' => [
            'allowed-domains'           => 'Dozwolone domeny',
            'allowed-domains-help'      => 'Oddzielone przecinkami. Domena jest automatycznie ustawiona wyżej domyślnie, jako dozwolona.',
            'always-authenticate'       => 'Always authenticate',
            'always-authenticate-help'  => 'Require login to view any Cachet page',
        ],
        'stylesheet' => [
            'custom-css' => 'Niestandardowy arkusz stylów',
        ],
        'theme' => [
            'background-color'        => 'Kolor tła',
            'background-fills'        => 'Wypełnianie tła (komponenty, zdarzenia, stopka)',
            'banner-background-color' => 'Kolor tła pod banerem',
            'banner-padding'          => 'Odstęp banera',
            'fullwidth-banner'        => 'Enable full width banner?',
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
        'username'       => 'Nazwa Użytkownika',
        'email'          => 'E-Mail',
        'password'       => 'Hasło',
        'api-token'      => 'Token API',
        'api-token-help' => 'Ponowne wygenerowanie nowego tokenu API spowoduje, że aplikacje korzystające obecnie z Cachet utracą do niego dostęp.',
        'gravatar'       => 'Zmień swój awatar na Gravatar.',
        'user_level'     => 'Poziom użytkownika',
        'levels'         => [
            'admin' => 'Administrator',
            'user'  => 'Użytkownik',
        ],
        '2fa' => [
            'help' => 'Włączenie weryfikacji dwuetapowej zwiększa bezpieczeństwo. Pobierz <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> lub podobną aplikację. Po zalogowaniu zostaniesz poproszony o podanie kodu wygenerowanego przez aplikację.',
        ],
        'team' => [
            'description' => 'Zaproś nowych członków do swojego zespołu. Wpisz ich adresy e-mail tutaj.',
            'email'       => 'Your Team Members Email Address',
        ],
    ],

    'general' => [
        'timezone' => 'Select Timezone',
    ],

    'seo' => [
        'title'        => 'SEO Title',
        'description'  => 'SEO Description',
    ],

    // Buttons
    'add'            => 'Dodaj',
    'save'           => 'Zapisz',
    'update'         => 'Zaktualizuj',
    'create'         => 'Utwórz',
    'edit'           => 'Edytuj',
    'delete'         => 'Usuń',
    'submit'         => 'Prześlij',
    'cancel'         => 'Anuluj',
    'remove'         => 'Skasuj',
    'invite'         => 'Zaproś',
    'signup'         => 'Zarejestruj się',
    'manage_updates' => 'Manage Updates',

    // Other
    'optional' => '* Opcjonalnie',
];
