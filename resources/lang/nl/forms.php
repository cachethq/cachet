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
        'username'         => 'Gebruikersnaam',
        'password'         => 'Wachtwoord',
        'site_name'        => 'Site naam',
        'site_domain'      => 'Site Domein',
        'site_timezone'    => 'Selecteer uw tijdzone',
        'site_locale'      => 'Selecteer uw taal',
        'enable_google2fa' => 'Schakel Google twee factor authenticatie in',
        'cache_driver'     => 'Cache Driver',
        'session_driver'   => 'Sessie Driver',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Username or Email',
        'email'         => 'E-mail',
        'password'      => 'Wachtwoord',
        '2fauth'        => 'Authenticatie Code',
        'invalid'       => 'Invalid username or password',
        'invalid-token' => 'Ongeldig token',
        'cookies'       => 'U moet cookies inschakelen om in te loggen.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Naam',
        'status'             => 'Status',
        'component'          => 'Onderdeel',
        'message'            => 'Boodschap',
        'message-help'       => 'U kan ook gebruik maken van Markdown.',
        'scheduled_at'       => 'Voor wanneer is het onderhoud gepland?',
        'incident_time'      => 'Wanneer heeft dit incident plaatsgevonden?',
        'notify_subscribers' => 'Notify Subscribers?',
        'visibility'         => 'Incident Zichtbaarheid',
        'public'             => 'Zichtbaar voor publiek',
        'logged_in_only'     => 'Only visible to logged in users',
        'templates'          => [
            'name'     => 'Naam',
            'template' => 'Sjabloon',
            'twig'     => 'Incident Templates can make use of the <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> templating language.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Naam',
        'status'      => 'Status',
        'group'       => 'Groep',
        'description' => 'Omschrijving',
        'link'        => 'Link',
        'tags'        => 'Tags',
        'tags-help'   => 'Komma gescheiden.',
        'enabled'     => 'Component enabled?',

        'groups' => [
            'name'      => 'Naam',
            'collapsed' => 'Collapse the group by default?',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Naam',
        'suffix'           => 'Achtervoegsel',
        'description'      => 'Beschrijving',
        'description-help' => 'Je mag ook Markdown gebruiken.',
        'display-chart'    => 'Grafiek tonen op statuspagina?',
        'default-value'    => 'Default Value',
        'calc_type'        => 'Calculation of Metrics',
        'type_sum'         => 'Som',
        'type_avg'         => 'Gemiddelde',
        'places'           => 'Decimal Places',
        'default_view'     => 'Default View',

        'points' => [
            'value' => 'Waarde',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Site Naam',
            'site-url'               => 'Site URL',
            'display-graphs'         => 'Grafieken tonen op statuspagina?',
            'about-this-page'        => 'Over deze pagina',
            'days-of-incidents'      => 'Hoeveel dagen moeten incidenten getoond worden?',
            'banner'                 => 'Banner afbeelding',
            'banner-help'            => "Het wordt aanbevolen dat u geen bestanden upload die breeder zijn dan 930px.",
            'subscribers'            => 'Bezoekers toestaan om te abonneren op e-mail notificaties?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics code',
            'analytics_gosquared'    => 'GoSquared Analytics code',
            'analytics_piwik_url'    => 'URL of your Piwik instance (without http(s)://)',
            'analytics_piwik_siteid' => 'Piwik\'s site id',
        ],
        'localization' => [
            'site-timezone'          => 'Site Timezone',
            'site-locale'            => 'Site Language',
            'date-format'            => 'Date Format',
            'incident-date-format'   => 'Incident Timestamp Format',
        ],
        'security' => [
            'allowed-domains'      => 'Allowed Domains',
            'allowed-domains-help' => 'Door komma\'s gescheiden. Het hierboven ingestelde domein is automatisch standaard toegelaten.',
        ],
        'stylesheet' => [
            'custom-css' => 'Custom Stylesheet',
        ],
        'theme' => [
            'background-color'        => 'Achtergrondkleur',
            'background-fills'        => 'Background Fills (Components, Incidents, Footer)',
            'banner-background-color' => 'Banner Background Color',
            'banner-padding'          => 'Banner Padding',
            'fullwidth-banner'        => 'Enable fullwidth banner?',
            'text-color'              => 'Tekstkleur',
            'dashboard-login'         => 'Show dashboard button in the footer?',
            'reds'                    => 'Red (Used for errors)',
            'blues'                   => 'Blue (Used for information)',
            'greens'                  => 'Green (Used for success)',
            'yellows'                 => 'Yellow (Used for alerts)',
            'oranges'                 => 'Orange (Used for notices)',
            'metrics'                 => 'Metrics Fill',
            'links'                   => 'Links',
        ],
    ],

    'user' => [
        'username'       => 'Gebruikersnaam',
        'email'          => 'E-mail',
        'password'       => 'Wachtwoord',
        'api-token'      => 'API-token',
        'api-token-help' => 'Het opnieuw genereren van je API-token zorgt ervoor dat bestaande applicaties geen toegang meer hebben tot Cachet.',
        'gravatar'       => 'Change your profile picture at Gravatar.',
        'user_level'     => 'User Level',
        'levels'         => [
            'admin' => 'Admin',
            'user'  => 'User',
        ],
        '2fa' => [
            'help' => 'Het inschakelen van two-factor authenticatie verhoogt de veiligheid van uw account. U zult een applicatie zoals <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> of een vergelijkbare applicatie moeten downloaden op uw mobiele apparaat. Wanneer u inlogt wordt u gevraagd om een token in te voeren welke door de applicatie wordt gegenereerd.',
        ],
        'team' => [
            'description' => 'Invite your team members by entering their email addresses here.',
            'email'       => 'Email #:id',
        ],
    ],

    // Buttons
    'add'    => 'Toevoegen',
    'save'   => 'Opslaan',
    'update' => 'Bijwerken',
    'create' => 'Aanmaken',
    'edit'   => 'Bewerken',
    'delete' => 'Verwijderen',
    'submit' => 'Versturen',
    'cancel' => 'Annuleren',
    'remove' => 'Verwijderen',
    'invite' => 'Invite',
    'signup' => 'Sign Up',

    // Other
    'optional' => '* Optioneel',
];
