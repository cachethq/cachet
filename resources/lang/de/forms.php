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
        'session_driver'   => 'Sitzungs-Treiber',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Username oder E-Mail',
        'email'         => 'E-Mail',
        'password'      => 'Passwort',
        '2fauth'        => 'Authentifizierungscode',
        'invalid'       => 'Ungültiger Benutzername oder Passwort',
        'invalid-token' => 'Token ist ungültig',
        'cookies'       => 'Sie müssen Cookies aktivieren um sich anzumelden.',
        'rate-limit'    => 'Rate limit exceeded.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Name',
        'status'             => 'Status',
        'component'          => 'Komponente',
        'message'            => 'Nachricht',
        'message-help'       => 'Sie können auch Markdown verwenden.',
        'scheduled_at'       => 'Für wann ist die Wartung geplant?',
        'incident_time'      => 'Wann ist dieser Vorfall aufgetreten?',
        'notify_subscribers' => 'Abonnenten benachrichtigen',
        'visibility'         => 'Vorfall Sichtbarkeit',
        'public'             => 'Öffentlich sichtbar',
        'logged_in_only'     => 'Nur für angemeldete Benutzer sichtbar',
        'templates'          => [
            'name'     => 'Name',
            'template' => 'Vorlage',
            'twig'     => 'Vorfall Vorlagen können den <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> Syntax nutzen.',
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
            'name'               => 'Name',
            'collapsing'         => 'Wähle Sichtbarkeit der Gruppe',
            'visible'            => 'Immer erweitert',
            'collapsed'          => 'Die Gruppe standardmäßig ausblenden',
            'collapsed_incident' => 'Die Gruppe standardmäßig ausblenden, aber erweitern wenn es Probleme gibt',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Name',
        'suffix'           => 'Suffix',
        'description'      => 'Beschreibung',
        'description-help' => 'Sie können auch Markdown benutzen.',
        'display-chart'    => 'Diagramm auf der Statusseite anzeigen?',
        'default-value'    => 'Standardwert',
        'calc_type'        => 'Berechnung der Metrik',
        'type_sum'         => 'Summe',
        'type_avg'         => 'Durchschnitt',
        'places'           => 'Nachkommastellen',
        'default_view'     => 'Standardansicht',
        'threshold'        => 'How many minutes of threshold between metric points?',

        'points' => [
            'value' => 'Wert',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Seitenname',
            'site-url'               => 'URL ihrer Seite',
            'display-graphs'         => 'Graphen auf der Statusseite anzeigen?',
            'about-this-page'        => 'Über diese Seite',
            'days-of-incidents'      => 'Wie viele Tage mit Vorfällen sollen gezeigt werden?',
            'banner'                 => 'Banner Bild',
            'banner-help'            => 'Es wird empfohlen, dass Sie keine Dateien die breiter als 930 Pixel sind hochladen .',
            'subscribers'            => 'Personen die Anmeldung für E-Mail-Benachrichtigung erlauben?',
            'automatic_localization' => 'Die Status-Seite automatisch auf die Sprache deiner Besucher anpassen?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics Code',
            'analytics_gosquared'    => 'GoSquared Analytics Code',
            'analytics_piwik_url'    => 'URL der Piwik-Instanz (ohne http(s)://)',
            'analytics_piwik_siteid' => 'Piwik\'s Seiten-ID',
        ],
        'localization' => [
            'site-timezone'          => 'Zeitzone ihrer Seite',
            'site-locale'            => 'Sprache ihrer Seite',
            'date-format'            => 'Datumsformat',
            'incident-date-format'   => 'Vorfall Zeitstempel-Format',
        ],
        'security' => [
            'allowed-domains'      => 'Erlaubte Domains',
            'allowed-domains-help' => 'Durch Kommata trennen. Die oben genannte Domain ist standardmäßig erlaubt.',
        ],
        'stylesheet' => [
            'custom-css' => 'Benutzerdefiniertes Stylesheet',
        ],
        'theme' => [
            'background-color'        => 'Hintergrundfarbe',
            'background-fills'        => 'Hintergrunddateien (Komponenten, Vorfälle, Footer)',
            'banner-background-color' => 'Banner Background Color',
            'banner-padding'          => 'Banner Padding',
            'fullwidth-banner'        => 'Enable fullwidth banner?',
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
            'email'       => 'Email #:id',
        ],
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
    'invite' => 'Einladen',
    'signup' => 'Registrieren',

    // Other
    'optional' => '* optional',
];
