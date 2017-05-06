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
        'username'         => 'Benutzername',
        'password'         => 'Passwort',
        'site_name'        => 'Seitenname',
        'site_domain'      => 'Domain ihrer Seite',
        'site_timezone'    => 'Wählen Sie Ihre Zeitzone',
        'site_locale'      => 'Wählen Sie Ihre Sprache',
        'enable_google2fa' => 'Google Zwei-Faktor-Authentifizierung aktivieren',
        'cache_driver'     => 'Cache-Treiber',
        'queue_driver'     => 'Sposób przechowywania kolejek',
        'session_driver'   => 'Sitzungs-Treiber',
        'mail_driver'      => 'Kierowca mail',
        'mail_host'        => 'Hosta poczty',
        'mail_address'     => 'Pocztę z adresu',
        'mail_username'    => 'Nazwa użytkownika poczty',
        'mail_password'    => 'Hasło poczty',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Nazwa użytkownika lub e-mail',
        'email'         => 'E-Mail',
        'password'      => 'Passwort',
        '2fauth'        => 'Authentifizierungscode',
        'invalid'       => 'Nieprawidłowa nazwa użytkownika lub hasło',
        'invalid-token' => 'Token ist ungültig',
        'cookies'       => 'Sie müssen Cookies aktivieren um sich anzumelden.',
        'rate-limit'    => 'Przekroczono limit.',
        'remember_me'   => 'Zapamiętaj mnie',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Name',
        'status'             => 'Status',
        'component'          => 'Komponente',
        'message'            => 'Nachricht',
        'message-help'       => 'Sie können auch Markdown verwenden.',
        'occurred_at'        => 'Kiedy wystąpił incydent?',
        'notify_subscribers' => 'Abonnenten benachrichtigen',
        'visibility'         => 'Widoczność zdarzenia',
        'stick_status'       => 'Przyklej zdarzenie',
        'stickied'           => 'Przyklejone',
        'not_stickied'       => 'Nie przyklejone',
        'public'             => 'Öffentlich sichtbar',
        'logged_in_only'     => 'Nur für angemeldete Benutzer sichtbar',
        'templates'          => [
            'name'     => 'Name',
            'template' => 'Vorlage',
            'twig'     => 'Szablony wydarzeń mogą korzystać z języka szablonów <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>.',
        ],
    ],

    'schedules' => [
        'name'         => 'Name',
        'status'       => 'Status',
        'message'      => 'Nachricht',
        'message-help' => 'Sie können auch Markdown verwenden.',
        'scheduled_at' => 'Na kiedy została zaplanowana konserwacja?',
        'completed_at' => 'Czy konserwacja została zakończona?',
        'templates'    => [
            'name'     => 'Name',
            'template' => 'Vorlage',
            'twig'     => 'Szablony wydarzeń mogą korzystać z języka szablonów <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Name',
        'status'      => 'Status',
        'group'       => 'Gruppe',
        'description' => 'Beschreibung',
        'link'        => 'Link',
        'tags'        => 'Schlagwörter',
        'tags-help'   => 'Durch Kommata trennen.',
        'enabled'     => 'Component enabled?',

        'groups' => [
            'name'                     => 'Name',
            'collapsing'               => 'Rozwiń/Zwiń opcje',
            'visible'                  => 'Zawsze rozwinięte',
            'collapsed'                => 'Domyślnie zwiń grupę',
            'collapsed_incident'       => 'Zwiń grupę, ale rozwiń ją w razie problemów',
            'visibility'               => 'Widoczność',
            'visibility_public'        => 'Widoczne publicznie',
            'visibility_authenticated' => 'Widoczne tylko dla zalogowanych użytkowników',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => 'Name',
        'description'        => 'Beschreibung',
        'start_at'           => 'Zaplanuj czas uruchomienia',
        'timezone'           => 'Strefa czasowa',
        'schedule_frequency' => 'Zaplanuj częstotliwość (w sekundach)',
        'completion_latency' => 'Opóźnienie zakończenia (w sekundach)',
        'group'              => 'Gruppe',
        'active'             => 'Aktywne?',
        'groups'             => [
            'name' => 'Nazwa grupy',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'                     => 'Name',
        'suffix'                   => 'Suffix',
        'description'              => 'Beschreibung',
        'description-help'         => 'Sie können auch Markdown verwenden.',
        'display-chart'            => 'Diagramm auf der Statusseite anzeigen?',
        'default-value'            => 'Standardwert',
        'calc_type'                => 'Berechnung der Metrik',
        'type_sum'                 => 'Summe',
        'type_avg'                 => 'Durchschnitt',
        'places'                   => 'Miejsca dziesiętne',
        'default_view'             => 'Domyślny widok',
        'threshold'                => 'Ile minut przerwy między punktami metrycznymi?',
        'visibility'               => 'Widoczność',
        'visibility_authenticated' => 'Widoczne dla uwierzytelnionych użytkowników',
        'visibility_public'        => 'Widoczne dla każdego',
        'visibility_hidden'        => 'Zawsze ukryte',

        'points' => [
            'value' => 'Wert',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                    => 'Seitenname',
            'site-url'                     => 'URL ihrer Seite',
            'display-graphs'               => 'Graphen auf der Statusseite anzeigen?',
            'about-this-page'              => 'Über diese Seite',
            'days-of-incidents'            => 'Wie viele Tage mit Vorfällen sollen gezeigt werden?',
            'banner'                       => 'Banner',
            'banner-help'                  => "Es wird empfohlen, dass Sie keine Dateien die breiter als 930 Pixel sind hochladen .",
            'subscribers'                  => 'Personen die Anmeldung für E-Mail-Benachrichtigung erlauben?',
            'skip_subscriber_verification' => 'Pominąć weryfikację użytkowników? (Ostrzeżenie: możesz otrzymać spam)',
            'automatic_localization'       => 'Automatycznie tłumaczyć twoją stronę statusu na język odwiedzającego?',
            'enable_external_dependencies' => 'Włącz zależności zewnętrznych dostawców (Google Fonts, Trackers, etc...)',
            'show_timezone'                => 'Pokazuj strefę czasową w której działa strona statusu.',
            'only_disrupted_days'          => 'Czy pokazywać tylko dni zawierające zdarzenia w linii czasu?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics Code',
            'analytics_gosquared'    => 'GoSquared Analytics Code',
            'analytics_piwik_url'    => 'URL der Piwik-Instanz (ohne http(s)://)',
            'analytics_piwik_siteid' => 'Piwik\'s Seiten-ID',
        ],
        'localization' => [
            'site-timezone'        => 'Zeitzone ihrer Seite',
            'site-locale'          => 'Sprache ihrer Seite',
            'date-format'          => 'Datumsformat',
            'incident-date-format' => 'Vorfall Zeitstempel-Format',
        ],
        'security' => [
            'allowed-domains'      => 'Erlaubte Domains',
            'allowed-domains-help' => 'Durch Kommata trennen. Die oben genannte Domain ist standardmäßig erlaubt.',
        ],
        'stylesheet' => [
            'custom-css' => 'Niestandardowy arkusz stylów',
        ],
        'theme' => [
            'background-color'        => 'Kolor tła',
            'background-fills'        => 'Wypełnianie tła (komponenty, wydarzenia, stopka)',
            'banner-background-color' => 'Banner Background Color',
            'banner-padding'          => 'Banner Padding',
            'fullwidth-banner'        => 'Enable fullwidth banner?',
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
        'username'       => 'Benutzername',
        'email'          => 'E-Mail',
        'password'       => 'Passwort',
        'api-token'      => 'API Token',
        'api-token-help' => 'Wenn sie ihren API-Token neu generieren, können bestehende Anwendungen nicht mehr auf Cachet zugreifen.',
        'gravatar'       => 'Change your profile picture at Gravatar.',
        'user_level'     => 'Poziom użytkownika',
        'levels'         => [
            'admin' => 'Administrator',
            'user'  => 'Użytkownik',
        ],
        '2fa' => [
            'help' => 'Die Zwei-Faktor-Authentifizierung erhöht die Sicherheit Ihres Kontos. Sie benötigen <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> oder eine ähnliche App auf Ihrem Mobilgerät. Beim Anmelden werden sie aufgefordert, einen Token einzugeben, der von der App generiert wird.',
        ],
        'team' => [
            'description' => 'Invite your team members by entering their email addresses here.',
            'email'       => 'Email #:id',
        ],
    ],

    'general' => [
        'timezone' => 'Wybierz strefę czasową',
    ],

    // Buttons
    'add'    => 'Hinzufügen',
    'save'   => 'Speichern',
    'update' => 'Aktualisieren',
    'create' => 'Erstellen',
    'edit'   => 'Bearbeiten',
    'delete' => 'Löschen',
    'submit' => 'Abschicken',
    'cancel' => 'Abbrechen',
    'remove' => 'Entfernen',
    'invite' => 'Zaproś',
    'signup' => 'Zarejestruj się',

    // Other
    'optional' => '* optional',
];