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
        'email'            => 'E-Mail-Adresse',
        'username'         => 'Username',
        'password'         => 'Passwort',
        'site_name'        => 'Name der Seite',
        'site_domain'      => 'Domain der Seite',
        'site_timezone'    => 'Wählen Sie Ihre Zeitzone',
        'site_locale'      => 'Wählen Sie Ihre Sprache',
        'enable_google2fa' => 'Aktivieren Sie Google Two Factor Authentication',
    ],

    // Login form fields
    'login' => [
        'email'         => 'Email',
        'password'      => 'Passwort',
        '2fauth'        => 'Authentifikations-Code',
        'invalid'       => 'Falsche E-Mail-Adresse oder falsches Passwort',
        'invalid-token' => 'Token nicht korrekt',
        'cookies'       => 'You must enable cookies to login.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'         => 'Name',
        'status'       => 'Status',
        'message'      => 'Nachricht',
        'message-help' => 'Sie können auch Markdown benutzen.',

        'templates' => [
            'name'     => 'Name',
            'template' => 'Template',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Name',
        'status'      => 'Status',
        'group'       => 'Gruppe',
        'description' => 'Beschreibung',
        'link'        => 'Link',
        'tags'        => 'Tags',
        'tags-help'   => 'Bitte als Komma-separierte Liste angeben.',

        'groups' => [
            'name' => 'Name',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Name',
        'suffix'           => 'Suffix',
        'description'      => 'Description',
        'description-help' => 'You may also use Markdown.',
        'display-chart'    => 'Display chart on status page?',
        'calc_type'        => 'Calculation of metrics',
        'type_sum'         => 'Sum',
        'type_avg'         => 'Average',

        'points' => [
            'value' => 'Value',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Name der Seite',
            'site-url'               => 'URL der Seite',
            'site-timezone'          => 'Wählen Sie Ihre Zeitzone',
            'site-locale'            => 'Wählen Sie Ihre Sprache',
            'date-format'            => 'Datumsformat',
            'display-graphs'         => 'Display graphs on status page?',
            'about-this-page'        => 'Über diese Seite',
            'days-of-incidents'      => 'Wie viele (vergangene) Tage sollen angezeigt werden?',
            'banner'                 => 'Banner-Bild',
            'banner-help'            => 'Wählen Sie möglichst ein Bild mit 930 px Breite.',
            'analytics_google'       => 'Google Analytics code',
            'analytics_gosquared'    => 'GoSquared Analytics code',
            'analytics_piwik_url'    => 'URL of your Piwik instance (without http(s)://)',
            'analytics_piwik_siteid' => 'Piwik\'s site id',
        ],
        'security' => [
            'allowed-domains'      => 'Erlaubte Domains',
            'allowed-domains-help' => 'Komma-Separiert. Die Domain die oben gesetzt ist, ist per Default erlaubt.',
        ],
        'stylesheet' => [
            'custom-css' => 'Eigenes Stylesheet',
        ],
        'theme' => [
            'background-color' => 'Hintergrund-Farbe',
            'text-color'       => 'Text-Farbe',
        ],
    ],

    'user' => [
        'username'     => 'Username',
        'email'        => 'E-Mail-Adresse',
        'password'     => 'Passwort',
        'api-key'      => 'API-Schlüssel',
        'api-key-help' => 'Eine Regenerierung Ihres API-Schlüssels verhindert den Zugriff für alle vorhandenen Anwendungen.',
        '2fa'          => [
            'help' => 'Zwei-Faktor-Authentifikation erhöht die Sicherheit Ihres Accounts. Sie müssen <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a>, <a href="https://fedorahosted.org/freeotp/" alt="OpenSource-Alternative">FreeOTP</a> oder andere OTP-Programme installieren. Wenn sie sich anschließend anmelden müssen Sie den in der App angezeigten Code eingeben.',
        ],
    ],

    // Buttons
    'add'    => 'Hinzufügen',
    'save'   => 'Speichern',
    'update' => 'Aktualsieren',
    'create' => 'Erstellen',
    'edit'   => 'Editieren',
    'delete' => 'Löschen',
    'submit' => 'Speichern',
    'cancel' => 'Abbrechen',
    'remove' => 'Entfernen',

    // Other
    'optional' => '* Optional',
];
