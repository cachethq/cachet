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
        'queue_driver'     => 'Queue-Treiber',
        'session_driver'   => 'Sitzungs-Treiber',
        'mail_driver'      => 'Mail Protokoll',
        'mail_host'        => 'Mail Host',
        'mail_address'     => 'Absenderadresse',
        'mail_username'    => 'Mail Nutzername',
        'mail_password'    => 'Mail Passwort',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Username oder E-Mail',
        'email'         => 'E-Mail',
        'password'      => 'Passwort',
        '2fauth'        => 'Authentifizierungscode',
        'invalid'       => 'Benutzername oder Passwort ungültig',
        'invalid-token' => 'Token ist ungültig',
        'cookies'       => 'Sie müssen Cookies aktivieren um sich anzumelden.',
        'rate-limit'    => 'Maximale Anzahl von Bewertungen erreicht.',
        'remember_me'   => 'Eingeloggt bleiben',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Name',
        'status'             => 'Status',
        'component'          => 'Komponente',
        'component_status'   => 'Komponentenstatus',
        'message'            => 'Nachricht',
        'message-help'       => 'Sie können auch Markdown verwenden.',
        'occurred_at'        => 'Wann ist dieser Vorfall aufgetreten?',
        'notify_subscribers' => 'Abonnenten benachrichtigen',
        'notify_disabled'    => 'Aufgrund von Wartungsarbeiten werden Benachrichtigungen über diesen Vorfall oder seiner Komponenten unterdrückt.',
        'visibility'         => 'Ereignis Sichtbarkeit',
        'stick_status'       => 'Vorfall anpinnen',
        'stickied'           => 'Angepinnt',
        'not_stickied'       => 'Nicht angepinnt',
        'public'             => 'Öffentlich sichtbar',
        'logged_in_only'     => 'Nur für angemeldete Benutzer sichtbar',
        'templates'          => [
            'name'     => 'Name',
            'template' => 'Vorlage',
            'twig'     => 'Ereignis Vorlagen können den <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> Syntax nutzen.',
        ],
    ],

    'schedules' => [
        'name'         => 'Name',
        'status'       => 'Status',
        'message'      => 'Nachricht',
        'message-help' => 'Sie können auch Markdown verwenden.',
        'scheduled_at' => 'Für wann ist die Wartungsarbeit geplant?',
        'completed_at' => 'Wann wurde diese Wartungsarbeit abgeschlossen?',
        'templates'    => [
            'name'     => 'Name',
            'template' => 'Vorlage',
            'twig'     => 'Ereignis Vorlagen können den <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> Syntax nutzen.',
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
            'collapsing'               => 'Optionen Anzeigen/Ausblenden',
            'visible'                  => 'Immer erweitert',
            'collapsed'                => 'Die Gruppe standardmäßig ausblenden',
            'collapsed_incident'       => 'Die Gruppe standardmäßig ausblenden, aber erweitern wenn es Probleme gibt',
            'visibility'               => 'Sichtbarkeit',
            'visibility_public'        => 'Öffentlich sichtbar',
            'visibility_authenticated' => 'Nur für angemeldete Benutzer sichtbar',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => 'Name',
        'description'        => 'Beschreibung',
        'start_at'           => 'Startzeit festlegen',
        'timezone'           => 'Zeitzone',
        'schedule_frequency' => 'Häufigkeit festlegen (in Sekunden)',
        'completion_latency' => 'Wartezeit bis zur Fertigstellung (in Sekunden)',
        'group'              => 'Gruppe',
        'active'             => 'Aktiv?',
        'groups'             => [
            'name' => 'Gruppen Name',
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
        'places'                   => 'Nachkommastellen',
        'default_view'             => 'Standardansicht',
        'threshold'                => 'Wie viele Minuten soll der Abstand zwischen den Messpunkten sein?',
        'visibility'               => 'Sichtbarkeit',
        'visibility_authenticated' => 'Sichtbar für angemeldete Nutzer',
        'visibility_public'        => 'Sichtbar für alle',
        'visibility_hidden'        => 'Immer ausgeblendet',

        'points' => [
            'value' => 'Wert',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                             => 'Seitenname',
            'site-url'                              => 'URL ihrer Seite',
            'display-graphs'                        => 'Graphen auf der Statusseite anzeigen?',
            'about-this-page'                       => 'Über diese Seite',
            'days-of-incidents'                     => 'Wie viele Tage mit Vorfällen sollen gezeigt werden?',
            'time_before_refresh'                   => 'Aktualisierungsrate der Statusseite (in Sekunden)',
            'major_outage_rate'                     => 'Grenzwert für schwerwiegende Ausfälle (in %)',
            'banner'                                => 'Banner Bild',
            'banner-help'                           => 'Es wird empfohlen, dass Sie keine Dateien, die breiter als 930 Pixel sind, hochladen',
            'subscribers'                           => 'Personen die Anmeldung für E-Mail-Benachrichtigung erlauben?',
            'suppress_notifications_in_maintenance' => 'Möchten Sie Benachrichtigungen über einen Vorfall während des Zeitraumes der Wartungsarbeiten unterdrücken?',
            'skip_subscriber_verification'          => 'Verifizierung der Nutzer überspringen? (Warnung, du könntest gespammt werden)',
            'automatic_localization'                => 'Die Status-Seite automatisch auf die Sprache deiner Besucher anpassen?',
            'enable_external_dependencies'          => 'Drittanbieter Abhängigkeiten erlauben (Google Schriftarten, Tracker, etc...)',
            'show_timezone'                         => 'Zeitzone in der sich die Status-Seite befindet anzeigen',
            'only_disrupted_days'                   => 'Im Verlauf nur Tage mit Vorfällen anzeigen?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics Code',
            'analytics_gosquared'    => 'GoSquared Analytics Code',
            'analytics_piwik_url'    => 'URL of your Piwik instance',
            'analytics_piwik_siteid' => 'Piwik\'s Seiten-ID',
        ],
        'localization' => [
            'site-timezone'        => 'Zeitzone ihrer Seite',
            'site-locale'          => 'Sprache ihrer Seite',
            'date-format'          => 'Datumsformat',
            'incident-date-format' => 'Ereignis Uhrzeit Format',
        ],
        'security' => [
            'allowed-domains'           => 'Erlaubte Domains',
            'allowed-domains-help'      => 'Durch Kommata trennen. Die oben genannte Domain ist standardmäßig erlaubt.',
            'always-authenticate'       => 'Immer anmelden',
            'always-authenticate-help'  => 'Anmeldung für alle Cachet Seiten erzwingen',
        ],
        'stylesheet' => [
            'custom-css' => 'Benutzerdefiniertes Stylesheet',
        ],
        'theme' => [
            'background-color'        => 'Hintergrundfarbe',
            'background-fills'        => 'Hintergrunddateien (Komponenten, Vorfälle, Footer)',
            'banner-background-color' => 'Banner Background Color',
            'banner-padding'          => 'Banner Padding',
            'fullwidth-banner'        => 'Banner über komplette Breite?',
            'text-color'              => 'Schriftfarbe',
            'dashboard-login'         => 'Dashboard-Button im Footer anzeigen?',
            'reds'                    => 'Rot (Genutzt für Fehler)',
            'blues'                   => 'Blau (Genutzt für Informationen)',
            'greens'                  => 'Grün (Genutzt für Erfolgreich)',
            'yellows'                 => 'Gelb (Genutzt für Warnungen)',
            'oranges'                 => 'Orange (Genutzt für Nachrichten)',
            'metrics'                 => 'Kennzahlen-Füllung',
            'links'                   => 'Links',
        ],
    ],

    'user' => [
        'username'       => 'Benutzername',
        'email'          => 'E-Mail',
        'password'       => 'Passwort',
        'api-token'      => 'API Token',
        'api-token-help' => 'Wenn sie ihren API-Token neu generieren, können bestehende Anwendungen nicht mehr auf Cachet zugreifen.',
        'gravatar'       => 'Change your profile picture at Gravatar.',
        'user_level'     => 'Benutzerebene',
        'levels'         => [
            'admin' => 'Admin',
            'user'  => 'Benutzer',
        ],
        '2fa' => [
            'help' => 'Die Zwei-Faktor-Authentifizierung erhöht die Sicherheit Ihres Kontos. Sie benötigen <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> oder eine ähnliche App auf Ihrem Mobilgerät. Beim Anmelden werden sie aufgefordert, einen Token einzugeben, der von der App generiert wird.',
        ],
        'team' => [
            'description' => 'Invite your team members by entering their email addresses here.',
            'email'       => 'Die E-Mail Adresse deines Teammitgliedes',
        ],
    ],

    'general' => [
        'timezone' => 'Zeitzone wählen',
    ],

    'seo' => [
        'title'        => 'SEO Title',
        'description'  => 'SEO Description',
    ],

    // Buttons
    'add'            => 'Hinzufügen',
    'save'           => 'Speichern',
    'update'         => 'Aktualisieren',
    'create'         => 'Erstellen',
    'edit'           => 'Bearbeiten',
    'delete'         => 'Löschen',
    'submit'         => 'Abschicken',
    'cancel'         => 'Abbrechen',
    'remove'         => 'Entfernen',
    'invite'         => 'Einladen',
    'signup'         => 'Registrieren',
    'manage_updates' => 'Updates verwalten',

    // Other
    'optional' => '* optional',
];
