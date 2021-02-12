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
        'site_domain'      => 'Domain Ihrer Seite',
        'site_timezone'    => 'Wählen Sie Ihre Zeitzone',
        'site_locale'      => 'Wählen Sie Ihre Sprache',
        'enable_google2fa' => 'Google Zwei-Faktor-Authentifizierung aktivieren',
        'cache_driver'     => 'Cache-Treiber',
        'queue_driver'     => 'Queue-Treiber',
        'session_driver'   => 'Sitzungs-Treiber',
        'mail_driver'      => 'E-Mail-Protokoll',
        'mail_host'        => 'E-Mail-Server',
        'mail_address'     => 'Absenderadresse',
        'mail_username'    => 'E-Mail-Nutzername',
        'mail_password'    => 'E-Mail-Passwort',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Benutzername oder E-Mail',
        'email'         => 'E-Mail',
        'password'      => 'Passwort',
        '2fauth'        => 'Authentifizierungscode',
        'invalid'       => 'Benutzername oder Passwort ungültig',
        'invalid-token' => 'Token ist ungültig',
        'cookies'       => 'Sie müssen Cookies aktivieren um sich anzumelden.',
        'rate-limit'    => 'Maximale Anzahl von Bewertungen erreicht.',
        'remember_me'   => 'Angemeldet bleiben',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Name',
        'status'             => 'Status',
        'component'          => 'Komponente',
        'component_status'   => 'Komponentenstatus',
        'message'            => 'Nachricht',
        'message-help'       => 'Sie können auch Markdown verwenden.',
        'occurred_at'        => 'Wann ist dieses Ereignis aufgetreten?',
        'notify_subscribers' => 'Abonnenten benachrichtigen',
        'notify_disabled'    => 'Aufgrund von Wartungsarbeiten werden Benachrichtigungen über dieses Ereignis oder seiner Komponenten unterdrückt.',
        'visibility'         => 'Ereignis-Sichtbarkeit',
        'stick_status'       => 'Ereignis anpinnen',
        'stickied'           => 'Angepinnt',
        'not_stickied'       => 'Nicht angepinnt',
        'public'             => 'Öffentlich sichtbar',
        'logged_in_only'     => 'Nur für angemeldete Benutzer sichtbar',
        'templates'          => [
            'name'     => 'Name',
            'template' => 'Vorlage',
            'twig'     => 'Ereignisvorlagen können den <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> Syntax nutzen.',
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
            'twig'     => 'Ereignisvorlagen können den <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> Syntax nutzen.',
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
        'tags-help'   => 'Durch Kommas trennen',
        'enabled'     => 'Komponente aktivieren?',

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
            'name' => 'Gruppenname',
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
            'site-url'                              => 'URL Ihrer Seite',
            'display-graphs'                        => 'Graphen auf der Statusseite anzeigen',
            'about-this-page'                       => 'Über diese Seite',
            'days-of-incidents'                     => 'Wie viele Tage mit Ereignissen sollen gezeigt werden?',
            'time_before_refresh'                   => 'Aktualisierungsrate der Statusseite (in Sekunden)',
            'major_outage_rate'                     => 'Grenzwert für schwerwiegende Ausfälle (in %)',
            'banner'                                => 'Banner Bild',
            'banner-help'                           => 'Es wird empfohlen, keine Dateien hochzuladen, die breiter als 930 Pixel sind.',
            'subscribers'                           => 'Nutzern die Anmeldung für E-Mail-Benachrichtigungen erlauben',
            'suppress_notifications_in_maintenance' => 'Benachrichtigungen über ein Ereignis während des Zeitraumes der Wartungsarbeiten unterdrücken',
            'skip_subscriber_verification'          => 'Verifizierung der Nutzer überspringen? (Warnung: Sie könnten Spam erhalten)',
            'automatic_localization'                => 'Die Status-Seite automatisch auf die Sprache Ihrer Besucher anpassen',
            'enable_external_dependencies'          => 'Abhängigkeiten von Drittanbietern erlauben (Google-Schriftarten, Tracker, etc...)',
            'show_timezone'                         => 'Zeitzone anzeigen, in der sich die Statusseite befindet',
            'only_disrupted_days'                   => 'Im Verlauf nur Tage mit Ereignissen anzeigen',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics Code',
            'analytics_gosquared'    => 'GoSquared Analytics Code',
            'analytics_piwik_url'    => 'URL Ihrer Matomo-Seite',
            'analytics_piwik_siteid' => 'Matomos Seiten-ID',
        ],
        'localization' => [
            'site-timezone'        => 'Zeitzone Ihrer Seite',
            'site-locale'          => 'Sprache Ihrer Seite',
            'date-format'          => 'Datumsformat',
            'incident-date-format' => 'Ereignis-Uhrzeitformat',
        ],
        'security' => [
            'allowed-domains'           => 'Erlaubte Domains',
            'allowed-domains-help'      => 'Durch Kommas trennen. Die oben genannten Domains sind standardmäßig erlaubt.',
            'always-authenticate'       => 'Immer anmelden',
            'always-authenticate-help'  => 'Anmeldung für alle Cachetseiten erzwingen',
        ],
        'stylesheet' => [
            'custom-css' => 'Benutzerdefiniertes Stylesheet',
        ],
        'theme' => [
            'background-color'        => 'Hintergrundfarbe',
            'background-fills'        => 'Hintergrunddateien (Komponenten, Ereignisse, Fusszeile)',
            'banner-background-color' => 'Banner Hintergrundfarbe',
            'banner-padding'          => 'Banner Abstand',
            'fullwidth-banner'        => 'Banner über komplette Breite',
            'text-color'              => 'Schriftfarbe',
            'dashboard-login'         => 'Dashboard-Button in der Fusszeile anzeigen',
            'reds'                    => 'Rot (Genutzt für Fehler)',
            'blues'                   => 'Blau (Genutzt für Informationen)',
            'greens'                  => 'Grün (Genutzt für Erfolgsmeldungen)',
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
        'api-token'      => 'API-Schlüssel',
        'api-token-help' => 'Wenn Sie Ihren API-Schlüssel neu generieren, können bestehende Anwendungen nicht mehr auf Cachet zugreifen.',
        'gravatar'       => 'Ändern Sie Ihr Gravatar-Profilbild.',
        'user_level'     => 'Benutzerebene',
        'levels'         => [
            'admin' => 'Administrator',
            'user'  => 'Benutzer',
        ],
        '2fa' => [
            'help' => 'Die Zwei-Faktor-Authentifizierung erhöht die Sicherheit Ihres Kontos. Sie benötigen <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> oder eine ähnliche App auf Ihrem Mobilgerät. Beim Anmelden werden Sie aufgefordert, einen Token einzugeben, der von der App generiert wird.',
        ],
        'team' => [
            'description' => 'Tragen Sie die E-Mail-Adressen Ihrer Teammitglieder ein, um sie einzuladen.',
            'email'       => 'Die E-Mail-Adresse Ihres Teammitgliedes',
        ],
    ],

    'general' => [
        'timezone' => 'Zeitzone wählen',
    ],

    'seo' => [
        'title'        => 'SEO Titel',
        'description'  => 'SEO Beschreigung',
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
    'manage_updates' => 'Aktualisierungen verwalten',

    // Other
    'optional' => '* optional',
];
